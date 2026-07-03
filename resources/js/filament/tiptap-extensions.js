document.addEventListener(
    "paste",
    (event) => {
        const editor = event.target?.closest?.(".ProseMirror");

        if (!editor) {
            return;
        }

        const clipboardHtml = event.clipboardData?.getData("text/html");

        if (!clipboardHtml) {
            return;
        }

        const parser = new DOMParser();
        const documentFromClipboard = parser.parseFromString(
            clipboardHtml,
            "text/html",
        );

        const allowedTags = new Set([
            "a",
            "b",
            "blockquote",
            "br",
            "code",
            "div",
            "details",
            "em",
            "figcaption",
            "figure",
            "h1",
            "h2",
            "h3",
            "h4",
            "h5",
            "h6",
            "hr",
            "i",
            "img",
            "li",
            "ol",
            "p",
            "pre",
            "small",
            "span",
            "strong",
            "summary",
            "table",
            "tbody",
            "td",
            "th",
            "thead",
            "tr",
            "u",
            "ul",
        ]);

        const unwrapNode = (node) => {
            const parent = node.parentNode;

            while (node.firstChild) {
                parent.insertBefore(node.firstChild, node);
            }

            parent.removeChild(node);
        };

        const sanitizeUrl = (value, allowRelative = false) => {
            if (!value) {
                return "";
            }

            if (allowRelative && value.startsWith("/")) {
                return value;
            }

            try {
                const parsedUrl = new URL(value, window.location.origin);

                if (
                    ["http:", "https:", "mailto:", "tel:"].includes(
                        parsedUrl.protocol,
                    )
                ) {
                    return parsedUrl.href;
                }
            } catch (error) {
                return "";
            }

            return "";
        };

        documentFromClipboard.body.querySelectorAll("*").forEach((element) => {
            const tagName = element.tagName.toLowerCase();

            if (!allowedTags.has(tagName)) {
                unwrapNode(element);
                return;
            }

            Array.from(element.attributes).forEach((attribute) => {
                const attributeName = attribute.name.toLowerCase();

                if (attributeName.startsWith("on")) {
                    element.removeAttribute(attribute.name);
                    return;
                }

                if (attributeName === "class") {
                    const allowedClasses = (attribute.value || "")
                        .split(/\s+/)
                        .filter(Boolean)
                        .filter((className) =>
                            [
                                "lead",
                                "checked-list",
                                "hljs",
                                "responsive",
                                "ProseMirror-selectednode",
                            ].includes(className),
                        );

                    if (allowedClasses.length === 0) {
                        element.removeAttribute(attribute.name);
                        return;
                    }

                    element.setAttribute("class", allowedClasses.join(" "));
                    return;
                }

                if (attributeName === "style") {
                    if (
                        [
                            "span",
                            "p",
                            "div",
                            "h1",
                            "h2",
                            "h3",
                            "h4",
                            "h5",
                            "h6",
                            "blockquote",
                            "li",
                            "td",
                            "th",
                        ].includes(tagName)
                    ) {
                        return;
                    }

                    element.removeAttribute(attribute.name);
                    return;
                }

                if (attributeName === "href") {
                    const sanitizedHref = sanitizeUrl(attribute.value);

                    if (!sanitizedHref) {
                        element.removeAttribute(attribute.name);
                        return;
                    }

                    element.setAttribute("href", sanitizedHref);

                    if (!element.getAttribute("rel")) {
                        element.setAttribute("rel", "noopener noreferrer");
                    }

                    return;
                }

                if (attributeName === "src") {
                    const sanitizedSrc = sanitizeUrl(attribute.value, true);

                    if (!sanitizedSrc) {
                        element.removeAttribute(attribute.name);
                        return;
                    }

                    element.setAttribute("src", sanitizedSrc);
                    return;
                }

                if (
                    ![
                        "alt",
                        "title",
                        "target",
                        "rel",
                        "width",
                        "height",
                        "loading",
                        "allow",
                        "allowfullscreen",
                        "frameborder",
                        "colspan",
                        "rowspan",
                        "scope",
                        "data-as-button",
                        "data-as-button-theme",
                    ].includes(attributeName)
                ) {
                    element.removeAttribute(attribute.name);
                }
            });
        });

        const sanitizedHtml = documentFromClipboard.body.innerHTML.trim();

        if (!sanitizedHtml) {
            return;
        }

        event.preventDefault();
        document.execCommand("insertHTML", false, sanitizedHtml);
    },
    true,
);
