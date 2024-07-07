import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    const dropdownButton = document.getElementById(
        "mega-menu-full-dropdown-button"
    );
    const dropdownMenu = document.getElementById("mega-menu-full-dropdown");
    const iconV1 = document.getElementById("icon-megamenu-dropdown");
    const navigation = document.getElementById("navigation");
    const body = document.body;

    dropdownButton.addEventListener("click", function () {
        if (dropdownMenu.classList.contains("lg:hidden")) {
            dropdownMenu.classList.remove("lg:hidden", "animate-slideUp");
            dropdownMenu.classList.add("lg:block", "animate-slideDown");
            navigation.classList.add("shadow-lg", "shadow-gray-400/40");
            dropdownButton.classList.add("active");
            body.classList.add("overflow-y-hidden");
            iconV1.classList.add("-rotate-180", "transition");
        } else {
            dropdownMenu.classList.remove("block", "animate-slideDown");
            dropdownMenu.classList.add("animate-slideUp");
            dropdownButton.classList.remove("active");
            navigation.classList.remove("shadow-lg", "shadow-gray-400/40");
            body.classList.remove("overflow-y-hidden");
            iconV1.classList.remove("-rotate-180", "transition");

            dropdownMenu.addEventListener(
                "animationend",
                function () {
                    if (dropdownMenu.classList.contains("animate-slideUp")) {
                        dropdownMenu.classList.remove("animate-slideUp");
                        dropdownMenu.classList.add("lg:hidden");
                    }
                },
                { once: true }
            );
        }
    });

    const btnLayananMobile = document.getElementById("btn-layanan-mobile");
    const dropdownLayananMobile = document.getElementById(
        "dropdown-layanan-mobile"
    );

    btnLayananMobile.addEventListener("click", function () {
        if (dropdownLayananMobile.classList.contains("hidden")) {
            dropdownLayananMobile.classList.remove("hidden");
            dropdownLayananMobile.classList.add("block");
            btnLayananMobile.classList.add("bg-gray-200", "text-gray-900");
        } else {
            dropdownLayananMobile.classList.remove("block");
            dropdownLayananMobile.classList.add("hidden");
            btnLayananMobile.classList.remove("bg-gray-200", "text-gray-900");
        }
    });

    if (location.pathname === "/") {
        const numCounters = [
            { id: "counter1", value: 2 },
            { id: "counter2", value: 30 },
            { id: "counter3", value: 500 },
        ];

        const numObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    numCounters.forEach((counter) => {
                        animateNumCount(counter.id, counter.value);
                    });
                    numObserver.disconnect();
                }
            });
        });

        const numTarget = document.querySelector(".countAbout");
        numObserver.observe(numTarget);
    }

    function animateNumCount(id, targetValue) {
        const element = document.getElementById(id);
        let startValue = 0;
        const duration = 2000;
        const increment = targetValue / (duration / 20);

        const timerInterval = setInterval(() => {
            startValue += increment;
            if (startValue >= targetValue) {
                element.textContent =
                    targetValue +
                    (id === "counter2" || id === "counter3" ? "+" : "");
                clearInterval(timerInterval);
            } else {
                element.textContent = Math.floor(startValue);
            }
        }, 20);
    }

    document.addEventListener("scroll", function () {
        navigation.classList.toggle("shadow-custom3", window.scrollY > 0);
    });
});
