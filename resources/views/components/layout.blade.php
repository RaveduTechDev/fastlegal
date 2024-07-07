<!DOCTYPE html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description"
        content="FASTLEGAL.id adalah platform yang menyediakan layanan pengurusan legalitas perusahaan dan perorangan.">

    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-BBQEVV6r.css') }}">
    <script src="{{ asset('build/assets/app-IbnlEw2D.js') }}"></script>

</head>

<body>
    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    <script src="{{ asset('lib/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            let owl1 = $(".layanan-link");
            owl1.owlCarousel({
                margin: 20,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        items: 1,
                    },
                    600: {
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        items: 2,
                    },
                    750: {
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        items: 3,
                    },

                    1000: {
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        items: 4,
                    },

                    1200: {
                        loop: false,
                        autoplay: false,
                        autoplayTimeout: 0,
                        autoplayHoverPause: false,
                        items: 5,
                    },
                },
            });

            $(".layanan-link .owl-item img").css({
                width: "40px",
            });

            let owl2 = $(".layanan-page");
            owl2.owlCarousel({
                loop: false,
                margin: 30,
                dots: false,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                    },
                    550: {
                        items: 2,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                    },
                    750: {
                        items: 3,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                    },
                    1000: {
                        items: 4,
                    },
                },
                onInitialized: checkNavButtons,
                onTranslated: checkNavButtons,
            });

            $(".service-carousel .owl-stage-outer").css({
                "box-shadow": "inset -40px 0 35px -35px hsla(0,0%,0%,.25)",
            });


            $(".owl-stage").css({
                padding: "2rem 0",
            });

            $(".layanan-page .owl-item img").css({
                width: "150px",
            });

            $(".layanan-page .owl-item .imgfasttax").css({
                width: "160px",
            });

            $(".layanan-page .owl-item .imgfasthalal").css({
                width: "110px",
            });

            $(".layanan-page .owl-item .imgfastkontruksi").css({
                width: "120px",
            });

            $(".custom-next").click(function() {
                owl2.trigger("next.owl.carousel");
            });

            $(".custom-prev").click(function() {
                owl2.trigger("prev.owl.carousel", [300]);
            });

            function checkNavButtons(event) {
                if (!event || !event.item || !event.page) {
                    console.error("Invalid event structure");
                    return;
                }

                let currentIndex = event.item.index;
                let pageSize = event.page.size;

                let carousel = event.target;
                let items = $(carousel).find(".owl-item");

                if (currentIndex === 0) {
                    $(".custom-prev").hide();
                } else {
                    $(".custom-prev").show();
                }

                if (currentIndex + pageSize >= items.length) {
                    $(".custom-next").hide();
                } else {
                    $(".custom-next").show();
                }

                // media query
                if (window.matchMedia("(max-width: 1000px)").matches) {
                    $(".custom-next").hide();
                    $(".custom-prev").hide();
                }
            }

            owl2.on("initialized.owl.carousel", function(event) {
                checkNavButtons(event);
            });
        });
    </script>

</body>

</html>
