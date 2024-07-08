@extends('components.layout')

@section('content')
    <header>
        <section class="relative bg-hero bg-fixed flex items-center pt-[120px] pb-[40px]">
            <div class="overlay absolute inset-0"></div>
            <div class="relative grid grid-cols-1  md:grid-cols-2 gap-4 max-w-screen-xl mx-auto p-6 text-white">
                <div class="flex flex-col justify-center">
                    <h1 class="text-2xl md:text-4xl font-bold mb-8 font-jakartaEuy">FASTLEGAL MEMBANTU BISNISMU LEBIH
                        AKSELERATIF
                    </h1>
                    <p class="text-base md:text-lg mb-8">
                        Kami menyediakan layanan pengurusan legalitas perusahaan yang cepat dan efisien. Dengan bantuan
                        kami, Anda dapat fokus mengembangkan bisnis tanpa khawatir tentang proses perizinan. Mulailah
                        perjalanan sukses Anda bersama kami.
                    </p>
                    <a href="#"
                        class="bg-white hover:text-danger-500 text-danger-300 transition font-bold py-2 px-6 rounded-full w-max">
                        Mulai Sekarang
                    </a>
                </div>
                {{-- <div class="flex items-center justify-center">
                <img src="path_to_your_image.jpg" alt="Hero Image" class="rounded-lg shadow-lg">
            </div> --}}
            </div>
        </section>
    </header>

    <main>
        <section class="py-6 mb-6 px-6 max-w-screen-xl mx-auto">
            <div class="owl-carousel owl-theme layanan-link">
                <div class="item px-2">
                    <a href="{{ url('/pendirian-perusahaan') }}"
                        class="flex items-center p-3 transition rounded-lg bg-white shadow-custom2">
                        <img class="w-10 block group-hover:hidden"
                            src="{{ asset('assets/img/commercial-complex-icon.svg') }}" alt="icon company">
                        <div class="ml-4">
                            <h3 class="text-xs sm:text-sm md:text-base font-semibold group-hover:text-white">Pendirian
                                Perusahaan</h3>
                        </div>
                    </a>
                </div>

                <div class="item px-2">
                    <a href="#" class=" flex items-center p-3 transition rounded-lg bg-white shadow-custom2">
                        <svg class="w-8 text-danger-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M0 256C0 114.6 114.6 0 256 0c33 0 64.6 6.3 93.6 17.7c7.4 2.9 11.5 10.7 9.8 18.4s-8.8 13-16.7 12.4c-4.8-.3-9.7-.5-14.6-.5c-114.9 0-208 93.1-208 208s93.1 208 208 208c4.9 0 9.8-.2 14.6-.5c7.9-.5 15 4.7 16.7 12.4s-2.4 15.5-9.8 18.4C320.6 505.7 289 512 256 512C114.6 512 0 397.4 0 256zM375.4 137.4c3.5-7.1 13.7-7.1 17.2 0l31.5 63.8c1.4 2.8 4.1 4.8 7.2 5.3l70.4 10.2c7.9 1.1 11 10.8 5.3 16.4l-50.9 49.6c-2.3 2.2-3.3 5.4-2.8 8.5l12 70.1c1.3 7.8-6.9 13.8-13.9 10.1l-63-33.1c-2.8-1.5-6.1-1.5-8.9 0l-63 33.1c-7 3.7-15.3-2.3-13.9-10.1l12-70.1c.5-3.1-.5-6.3-2.8-8.5L261 233.1c-5.7-5.6-2.6-15.2 5.3-16.4l70.4-10.2c3.1-.5 5.8-2.4 7.2-5.3l31.5-63.8z" />
                        </svg>
                        <div class="ml-4">
                            <h3 class="text-xs sm:text-sm md:text-base font-semibold group-hover:text-white">FASTHALAL</h3>
                        </div>
                    </a>
                </div>

                <div class="item px-2">
                    <a href="#" class=" flex items-center p-3 transition rounded-lg bg-white shadow-custom2">
                        <svg class=" w-9 text-danger-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <path
                                d="M256 32c-17.7 0-32 14.3-32 32v2.3 99.6c0 5.6-4.5 10.1-10.1 10.1c-3.6 0-7-1.9-8.8-5.1L157.1 87C83 123.5 32 199.8 32 288v64H544l0-66.4c-.9-87.2-51.7-162.4-125.1-198.6l-48 83.9c-1.8 3.2-5.2 5.1-8.8 5.1c-5.6 0-10.1-4.5-10.1-10.1V66.3 64c0-17.7-14.3-32-32-32H256zM16.6 384C7.4 384 0 391.4 0 400.6c0 4.7 2 9.2 5.8 11.9C27.5 428.4 111.8 480 288 480s260.5-51.6 282.2-67.5c3.8-2.8 5.8-7.2 5.8-11.9c0-9.2-7.4-16.6-16.6-16.6H16.6z" />
                        </svg>
                        <div class="ml-4">
                            <h3 class="text-xs sm:text-sm md:text-base font-semibold group-hover:text-white">FASTKONTRUKSI
                            </h3>
                        </div>
                    </a>
                </div>

                <div class="item px-2">
                    <a href="#" class=" flex items-center p-3 transition rounded-lg bg-white shadow-custom2">
                        <svg class="w-10 text-danger-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512">
                            <path
                                d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h89.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zM576 272a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM352 477.1c0 19.3 15.6 34.9 34.9 34.9H605.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H445.1c-51.4 0-93.1 41.7-93.1 93.1z" />
                        </svg>
                        <div class="ml-4">
                            <h3 class="text-xs sm:text-sm md:text-base font-semibold group-hover:text-white">FASTPROPERTI
                            </h3>
                        </div>
                    </a>
                </div>

                <div class="item px-2">
                    <a href="#" class=" flex items-center p-3 transition rounded-lg bg-white shadow-custom2">
                        <svg class="w-6 text-danger-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 384 512">
                            <path
                                d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 80c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm128 72c8.8 0 16 7.2 16 16v17.3c8.5 1.2 16.7 3.1 24.1 5.1c8.5 2.3 13.6 11 11.3 19.6s-11 13.6-19.6 11.3c-11.1-3-22-5.2-32.1-5.3c-8.4-.1-17.4 1.8-23.6 5.5c-5.7 3.4-8.1 7.3-8.1 12.8c0 3.7 1.3 6.5 7.3 10.1c6.9 4.1 16.6 7.1 29.2 10.9l.5 .1 0 0 0 0c11.3 3.4 25.3 7.6 36.3 14.6c12.1 7.6 22.4 19.7 22.7 38.2c.3 19.3-9.6 33.3-22.9 41.6c-7.7 4.8-16.4 7.6-25.1 9.1V440c0 8.8-7.2 16-16 16s-16-7.2-16-16V422.2c-11.2-2.1-21.7-5.7-30.9-8.9l0 0 0 0c-2.1-.7-4.2-1.4-6.2-2.1c-8.4-2.8-12.9-11.9-10.1-20.2s11.9-12.9 20.2-10.1c2.5 .8 4.8 1.6 7.1 2.4l0 0 0 0 0 0c13.6 4.6 24.6 8.4 36.3 8.7c9.1 .3 17.9-1.7 23.7-5.3c5.1-3.2 7.9-7.3 7.8-14c-.1-4.6-1.8-7.8-7.7-11.6c-6.8-4.3-16.5-7.4-29-11.2l-1.6-.5 0 0c-11-3.3-24.3-7.3-34.8-13.7c-12-7.2-22.6-18.9-22.7-37.3c-.1-19.4 10.8-32.8 23.8-40.5c7.5-4.4 15.8-7.2 24.1-8.7V232c0-8.8 7.2-16 16-16z" />
                        </svg>
                        <div class="ml-4">
                            <h3 class="text-xs sm:text-sm md:text-base font-semibold group-hover:text-white">FASTTAX</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section>
            <article class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-screen-xl mx-auto p-6">
                <div class="flex items-center justify-center">
                    <img class="rounded-lg w-96" src="{{ asset('assets/img/about-us.svg') }}" alt="About Us">
                </div>
                <div class="flex flex-col justify-center">
                    <h2 class="text-2xl md:text-3xl font-bold mb-8 font-jakartaEuy">Tentang FASTLEGAL.id</h2>
                    <p class="mb-8">
                        FAST LEGAL beroperasi sejak 2022 dan baru mendirikan badan hukum pada tahun 2023, merupakan
                        perusahaan yang menyediakan pengurusan legalitas perusahaan dan perorangan. Di mulai dari
                        pendirian perusahaan, kini FAST LEGAL memiliki lebih dari 30 Layanan lainnya. Serta FAST LEGAL
                        sudah membantu lebih dari 500 Pengusaha di Indonesia untuk mendirikan perusahaan dan mengurus
                        seluruh kebutuhan legalitas Perusahaan.
                    </p>

                    <section class="bg-white dark:bg-gray-900">
                        <div class="max-w-screen-xl px-4 mx-auto text-center  lg:px-6">
                            <dl
                                class="countAbout grid max-w-screen-md gap-20 mx-auto text-gray-900 grid-cols-3 dark:text-white">
                                <div class="flex flex-col items-center justify-center">
                                    <dt id="counter1" class="mb-2 text-2xl md:text-4xl font-extrabold">2</dt>
                                    <dd class="font-light text-gray-500">Tahun Pengalaman</dd>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <dt id="counter2" class="mb-2 text-2xl md:text-4xl font-extrabold">30+</dt>
                                    <dd class="font-light text-gray-500">Layanan</dd>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <dt id="counter3" class="mb-2 text-2xl md:text-4xl font-extrabold">500+</dt>
                                    <dd class="font-light text-gray-500">Klien</dd>
                                </div>
                            </dl>
                        </div>
                    </section>
                </div>
            </article>
        </section>

        <section class="max-w-screen-xl mx-auto mt-4 mb-6 p-6">
            <blockquote class="p-4 md:py-8 md:px-36 lg:px-48 mt-4 mb-6 rounded-md border-s-8 border-danger-300 bg-red-100">
                <h2 class="md:text-2xl text-center italic font-medium leading-relaxed text-gray-900 ">
                    Bersama FAST LEGAL akan selalu ada solusi dan kemudahan dalam memenuhi kebutuhan legalitas anda.
                </h2>
            </blockquote>
        </section>

        <section class="max-w-screen-xl mx-auto p-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-14">KENAPA MEMILIH KAMI ?</h2>
            <div class=" lg:w-3/4 mx-auto">
                <div class="flex items-start mb-12">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/icon/profesional.svg') }}" alt="profesional"
                            class="h-8 w-8 md:h-12 md:w-12 md:ml-20">
                    </div>
                    <div class="ml-4">
                        <h5 class="text-xl font-semibold mb-2">Profesional</h5>
                        <p class="text-gray-600">
                            Fast Legal memiliki tim profesional yang ahli di bidangnya masing-masing yang akan bantu Anda
                            dapatkan sertifikasi melalui proses yang tepat.
                        </p>
                    </div>
                </div>

                <div class="flex items-start mb-12">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/icon/terlengkap.svg') }}" alt="terlengkap"
                            class="h-8 w-8 md:h-12 md:w-12 md:ml-20">
                    </div>
                    <div class="ml-4">
                        <h5 class="text-xl font-semibold mb-2">Terlengkap</h5>
                        <p class="text-gray-600">
                            Fast Legal menyediakan hampir seluruh layanan legalitas yang dibutuhkan pelaku usaha maupun
                            perusahaan, dari pendirian perusahaan, pengurusan perizinan sampai layanan pengurusan pajak.
                        </p>
                    </div>
                </div>

                <div class="flex items-start mb-12">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/icon/tercepat.svg') }}" alt="tercepat"
                            class="h-8 w-8 md:h-12 md:w-12 md:ml-20">
                    </div>
                    <div class="ml-4">
                        <h5 class="text-xl font-semibold mb-2">Tercepat</h5>
                        <p class="text-gray-600">
                            Fast Legal memiliki dedikasi untuk memberikan pelayan terbaik dengan memastikan semua layanan
                            legalitas diselesaikan dalam waktu singkat. Pendirian PT selesai hanya dalam 3 hari kerja.
                        </p>
                    </div>
                </div>
                <div class="flex items-start mb-12">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/icon/terpercaya.svg') }}" alt="terpercaya"
                            class="h-8 w-8 md:h-12 md:w-12 md:ml-20">
                    </div>
                    <div class="ml-4">
                        <h5 class="text-xl font-semibold mb-2">Terpercaya</h5>
                        <p class="text-gray-600">
                            Tim Fast Legal terdiri dari orang-orang profesional dan berpengalaman. Seluruh pengerjaan
                            legalitas dilakukan langsung oleh Tim Fast Legal tanpa menggunakan pihak ke-3 untuk menjamin
                            pelayanan yang cepat dan maksimal.
                        </p>
                    </div>
                </div>
                <div class="flex items-start mb-12">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/icon/garansi.svg') }}" alt="garansi pasti beres"
                            class="h-8 w-8 md:h-12 md:w-12 md:ml-20">
                    </div>
                    <div class="ml-4">
                        <h5 class="text-xl font-semibold mb-2">Garansi Pasti Beres</h5>
                        <p class="text-gray-600">
                            Selama owner tidak melanggar peraturan perizinan, maka kami garansi perizinan anda pasti beres,
                            diterbitkan oleh DPMPTSP maupun Lembaga Pemerintah lainnya yang berwewenang menerbitkan
                            perizinan.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="max-w-screen-xl mx-auto p-6 my-10 relative">
            <h2 class="text-2xl md:text-3xl font-bold text-center font-jakartaEuy">LAYANAN KAMI</h2>
            <p class="text-gray-700 text-center md:w-3/5 mb-8 mx-auto">
                Kami menyediakan berbagai layanan yang dapat membantu Anda dalam mengurus legalitas perusahaan dan
                perorangan. Berikut adalah beberapa layanan yang kami tawarkan:
            </p>

            <div class="owl-carousel owl-theme layanan-page">
                <div class="item bg-white shadow-xl border-2 border-gray-100 rounded-lg overflow-hidden">
                    <img class="mx-auto p-4" src="{{ asset('assets/img/pendirian-perusahaan.svg') }}"
                        alt="Pendirian Perusahaan">
                    <div class="p-4">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">Pendirian Perusahaan</h3>
                        <p class="text-gray-700">
                            Pendirian Perusahaan untuk membantu Anda menjalankan bisnis dengan legalitas serta badan
                            usaha yang bonafid
                        </p>
                        <a class="text-danger-300 text-bold hover:underline"
                            href="{{ url('/pendirian-perusahaan') }}">Selengkapnya</a>
                    </div>
                </div>

                <div class="item bg-white shadow-xl border-2 border-gray-100 rounded-lg overflow-hidden">
                    <img class="mx-auto p-4 imgfasthalal" src="{{ asset('assets/img/fasthalal.svg') }}" alt="FASTHALAL">
                    <div class="p-4">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">FASTHALAL</h3>
                        <p class="text-gray-700">
                            Fasthalal membantu Anda memperoleh sertifikasi halal yang sah dan terpercaya untuk berbagai
                            jenis produk dan layanan.
                        </p>
                        <a class="text-danger-300 text-bold hover:underline" href="">Selengkapnya</a>
                    </div>
                </div>

                <div class="item bg-white shadow-xl border-2 border-gray-100 rounded-lg overflow-hidden">
                    <img class="mx-auto p-4 imgfastkontruksi" src="{{ asset('assets/img/fastkontruksi.svg') }}"
                        alt="FASTKONTRUKSI">
                    <div class="p-4">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">FASTKONTRUKSI</h3>
                        <p class="text-gray-700">
                            Fastkontruksi memudahkan izin usaha konstruksi untuk tender dengan syarat mudah, proses
                            cepat, dan biaya terjangkau. Izin resmi dari LSBU yang terdaftar di Kementerian PUPR.
                        </p>
                        <a class="text-danger-300 text-bold hover:underline" href="">Selengkapnya</a>
                    </div>
                </div>

                <div class="item bg-white shadow-xl border-2 border-gray-100 rounded-lg overflow-hidden">
                    <img class="mx-auto p-4 " src="{{ asset('assets/img/fastproperti.svg') }}" alt="FASTPROPERTI">
                    <div class="p-4">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">FASTPROPERTI</h3>
                        <p class="text-gray-700">
                            Fastproperti membantu anda dalam pengurusan surat-surat seputar tanah dan properti. Dengan
                            dibantu oleh tenaga professional dan berdedikasi kami sangat bangga melayani anda.
                        </p>
                        <a class="text-danger-300 text-bold hover:underline" href="">Selengkapnya</a>
                    </div>
                </div>

                <div class="item bg-white shadow-xl border-2 border-gray-100 rounded-lg overflow-hidden">
                    <img class="mx-auto p-4 imgfasttax" src="{{ asset('assets/img/fasttax.svg') }}" alt="FASTTAX">
                    <div class="p-4">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">FASTTAX</h3>
                        <p class="text-gray-700">
                            Fastfax membantu mengoptimalkan efisiensi pajak dan mematuhi semua peraturan melalui
                            strategi inovatif, mendukung strategi keseluruhan perusahaan Anda.
                        </p>
                        <a class="text-danger-300 text-bold hover:underline" href="">Selengkapnya</a>
                    </div>
                </div>

                <div class="item bg-white shadow-xl border-2 border-gray-100 rounded-lg overflow-hidden">
                    <img class="mx-auto pt-4 px-4 pb-3" src="{{ asset('assets/img/lainnya.svg') }}" alt="FASTTAX">
                    <div class="p-4">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">Layanan Lainnya</h3>
                        <p class="text-gray-700">
                            Layanan lainnya yang sering dibutuhkan untuk kebutuhan bisnis
                        </p>
                        <a class="text-danger-300 text-bold hover:underline" href="">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div
                class="custom-nav-button hidden md:block absolute z-10 rounded-full px-4 py-3 bg-gray-700/70 left-0 -translate-y-48 -mt-20 cursor-pointer custom-prev">
                <img class="w-4 select-none " src="{{ asset('assets/icon/left.svg') }}" alt="kiri">
            </div>
            <div
                class="custom-nav-button hidden md:block absolute z-10 rounded-full px-4 py-3 bg-gray-700/70 right-0 -translate-y-48 -mt-20 cursor-pointer custom-next">
                <img class="w-4 select-none " src="{{ asset('assets/icon/right.svg') }}" alt="kanan">
            </div>

        </section>

        <section class="max-w-screen-xl mx-auto p-6 my-10" id="business-news">
            <header class="mb-8 text-center">
                <h2 class="text-2xl md:text-3xl font-bold uppercase tracking-wide font-jakartaEuy text-gray-900">Artikel
                </h2>
            </header>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="col-span-1 mb-8 md:mb-0">
                    <a href="https://www.kominfo.go.id/content/detail/44405/permudah-perizinan-usaha-pelaku-umkm-ekraf-kemenparekraf-gandeng-izincoid/0/berita"
                        target="_blank" class="text-black">
                        <div class="card shadow-lg rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="{{ asset('assets/img/bg-header.jpg') }}"
                                alt="">
                            <div class="p-4">
                                <h5 class="text-lg font-bold mb-2 font-jakartaEuy">Lorem ipsum dolor sit amet
                                    consectetur,
                                    adipisicing elit. Voluptatem molestiae recusandae amet sapiente sunt magni.
                                    Error illo ex maxime excepturi.</h5>
                                <p class="text-gray-500 text-sm mb-4">20 Juni 2024</p>
                                <p class="text-gray-700 text-sm mb-4">Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Eum et sint at iure eaque provident nam, nesciunt sunt fugit
                                    quo facilis ipsum expedita perspiciatis deserunt dolores fuga obcaecati cum
                                    fugiat veniam, dolore placeat alias vitae, nostrum eveniet. Laboriosam, saepe
                                    explicabo!
                                </p>
                                <a href="" class="text-danger-300 hover:underline">Baca lebih lanjut</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-span-1 mb-8 md:mb-0">
                    <a href="https://kemenparekraf.go.id/hasil-pencarian/siaran-pers-kemenparekraf-gandeng-izincoid-kolaborasi-permudah-perizinan-usaha-pelaku-umkm-ekraf"
                        target="_blank" class="text-black">
                        <div class="card shadow-lg rounded-lg overflow-hidden">
                            <img class="w-full h-48 object-cover" src="{{ asset('assets/img/bg-header.jpg') }}"
                                alt="">
                            <div class="p-4">
                                <h5 class="text-lg font-bold mb-2 font-jakartaEuy">Lorem ipsum dolor sit amet
                                    consectetur,
                                    adipisicing elit. Voluptatem molestiae recusandae amet sapiente sunt magni.
                                    Error illo ex maxime excepturi.</h5>
                                <p class="text-gray-500 text-sm mb-4">20 Juni 2024</p>
                                <p class="text-gray-700 text-sm mb-4">Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Eum et sint at iure eaque provident nam, nesciunt sunt fugit
                                    quo facilis ipsum expedita perspiciatis deserunt dolores fuga obcaecati cum
                                    fugiat veniam, dolore placeat alias vitae, nostrum eveniet. Laboriosam, saepe
                                    explicabo!
                                </p>
                                <a href="" class="text-danger-300 hover:underline">Baca lebih lanjut</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-span-1 mb-8 md:mb-0">
                    <div>
                        <a href="https://izin.co.id/indonesia-business-tips/2022/08/03/kenali-hak-desain-industri-atas-produk-anda/"
                            target="_blank" class="text-black">
                            <h6 class="font-jakartaEuy text-lg font-bold mb-1">Kenali Hak Desain Industri Atas
                                Produk Anda!</h6>
                            <p class="text-gray-500 text-sm mb-4">28 Juli, 2021</p>
                        </a>
                        <div class="border-b-2 border-red-500 mb-4"></div>
                        <a href="https://izin.co.id/indonesia-business-tips/2022/08/11/here-are-the-reasons-why-you-should-use-virtual-office-in-indonesia/"
                            target="_blank" class="text-black">
                            <h6 class="font-jakartaEuy text-lg font-bold mb-1">Inilah alasan mengapa Anda harus
                                menggunakan Virtual
                                Office di Indonesia!</h6>
                            <p class="text-gray-500 text-sm mb-4">28 Juli, 2021</p>
                        </a>
                        <div class="border-b-2 border-red-500 mb-4"></div>
                        <a href="https://izin.co.id/indonesia-business-tips/2022/07/28/merek-dagang-mu-belum-terdaftar-berikut-ini-kasus-sengketa-merek-yang-terkenal-di-indonesia/"
                            target="_blank" class="text-black">
                            <h6 class="font-jakartaEuy text-lg font-bold mb-1">Merek Dagang Mu Belum Terdaftar?
                                Berikut Ini Kasus
                                Sengketa Merek Yang Terkenal Di Indonesia</h6>
                            <p class="text-gray-500 text-sm mb-4">28 Juli, 2021</p>
                        </a>
                        <div class="border-b-2 border-red-500 mb-4"></div>
                        <a href="https://izin.co.id/indonesia-business-tips/2022/07/28/hak-kekayaan-intelektual-bisa-jadi-jaminan/"
                            target="_blank" class="text-black">
                            <h6 class="font-jakartaEuy text-lg font-bold mb-1">Hak Kekayaan Intelektual Bisa Jadi
                                Jaminan!</h6>
                            <p class="text-gray-500 text-sm mb-4">28 Juli, 2021</p>
                        </a>
                        <div class="border-b-2 border-danger-300 mb-4"></div>
                        <a href="https://izin.co.id/indonesia-business-tips/2022/07/13/perhatikan-hal-hal-berikut-dalam-penutupan-pt/"
                            target="_blank" class="text-black">
                            <h6 class="font-jakartaEuy text-lg font-bold mb-1">Perhatikan Hal-Hal Berikut Dalam
                                Penutupan PT!</h6>
                            <p class="text-gray-500 text-sm mb-4">13 Juli, 2022</p>
                        </a>
                        <a href="https://izin.co.id/indonesia-business-tips/" class="text-danger-300 font-bold">Lihat
                            Artikel Lain <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        @include('components.hubungi-component')

        <section class="max-w-screen-xl mx-auto p-6">
            <h2
                class="text-2xl md:text-3xl font-bold uppercase text-center mb-14 tracking-wide font-jakartaEuy text-gray-900">
                PARTNER KAMI
            </h2>
            <div class="owl-carousel owl-theme partner-link">
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/partner/alfi_logo.png') }}"
                            alt="alfi logo">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner"
                            src="{{ asset('assets/img/partner/Bank_Syariah_Indonesia.svg.png') }}" alt="bsi logo">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner"
                            src="{{ asset('assets/img/partner/gapensi-logo-A3000ECD57-seeklogo.com.png') }}"
                            alt="gapensi">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/partner/halal-mui-logo.png') }}"
                            alt="halal mui">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner"
                            src="{{ asset('assets/img/partner/Bank_Syariah_Indonesia.svg.png') }}" alt="bsi logo">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner"
                            src="{{ asset('assets/img/partner/gapensi-logo-A3000ECD57-seeklogo.com.png') }}"
                            alt="gapensi">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/partner/halal-mui-logo.png') }}"
                            alt="halal mui">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/partner/alfi_logo.png') }}"
                            alt="alfi logo">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner"
                            src="{{ asset('assets/img/partner/gapensi-logo-A3000ECD57-seeklogo.com.png') }}"
                            alt="gapensi">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/partner/halal-mui-logo.png') }}"
                            alt="halal mui">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner"
                            src="{{ asset('assets/img/partner/Bank_Syariah_Indonesia.svg.png') }}" alt="bsi logo">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner"
                            src="{{ asset('assets/img/partner/gapensi-logo-A3000ECD57-seeklogo.com.png') }}"
                            alt="gapensi">
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-screen-xl mx-auto p-6 mb-6">
            <h2
                class="text-2xl md:text-3xl font-bold uppercase text-center mb-14 tracking-wide font-jakartaEuy text-gray-900">
                CLIENT KAMI
            </h2>
            <div class="owl-carousel owl-theme client-link">
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/Blue_Simple_Company_Logo.PNG') }}"
                            alt="blue simple logo">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/hitachi.png') }}"
                            alt="hitachi logo">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/htli.jpg') }}" alt="gapensi">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/tel.png') }}" alt="halal mui">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/hitachi.png') }}"
                            alt="hitachi logo">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/htli.jpg') }}" alt="gapensi">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/tel.png') }}" alt="halal mui">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/Blue_Simple_Company_Logo.PNG') }}"
                            alt="blue simple logo">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/htli.jpg') }}" alt="gapensi">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/tel.png') }}" alt="halal mui">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/hitachi.png') }}"
                            alt="hitachi logo">
                    </div>
                </div>
                <div class="item px-2">
                    <div class="partner-logo">
                        <img class="w-60 img-partner" src="{{ asset('assets/img/client/htli.jpg') }}" alt="gapensi">
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-screen-xl mx-auto p-6 mb-10 gallery">
            <div class="gallery-body">
                <div id="gallery-content" class="grid grid-cols-3 gap-4">
                    <a href="{{ asset('assets/img/dokumentasi/IMG-20230711-WA0041.jpg') }}"
                        class="gallery-item overflow-hidden relative w-full h-100 group">
                        <img src="{{ asset('assets/img/dokumentasi/IMG-20230711-WA0041.jpg') }}"
                            class="gallery-img w-full h-full object-cover" alt="Image 1" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="text-white p-2 flex transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M10 7v6m-3-3h6m4 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="ml-2">ZOOM</span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ asset('assets/img/dokumentasi/IMG-20230714-WA0044.jpg') }}"
                        class="gallery-item overflow-hidden relative w-full h-100 group">
                        <img src="{{ asset('assets/img/dokumentasi/IMG-20230714-WA0044.jpg') }}"
                            class="gallery-img w-full h-full object-cover" alt="Image 2" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="text-white p-2 flex transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M10 7v6m-3-3h6m4 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="ml-2">ZOOM</span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ asset('assets/img/dokumentasi/IMG-20230725-WA0038.jpg') }}"
                        class="gallery-item overflow-hidden relative w-full h-100 group">
                        <img src="{{ asset('assets/img/dokumentasi/IMG-20230725-WA0038.jpg') }}"
                            class="gallery-img w-full h-full object-cover" alt="Image 3" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="text-white p-2 flex transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M10 7v6m-3-3h6m4 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="ml-2">ZOOM</span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ asset('assets/img/dokumentasi/IMG-20230801-WA0049.jpg') }}"
                        class="gallery-item overflow-hidden relative w-full h-100 group">
                        <img src="{{ asset('assets/img/dokumentasi/IMG-20230801-WA0049.jpg') }}"
                            class="gallery-img w-full h-full object-cover" alt="Image 4" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="text-white p-2 flex transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M10 7v6m-3-3h6m4 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="ml-2">ZOOM</span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ asset('assets/img/dokumentasi/IMG-20230803-WA0020.jpg') }}"
                        class="gallery-item overflow-hidden relative w-full h-100 group">
                        <img src="{{ asset('assets/img/dokumentasi/IMG-20230803-WA0020.jpg') }}"
                            class="gallery-img w-full h-full object-cover" alt="Image 5" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="text-white p-2 flex transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M10 7v6m-3-3h6m4 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="ml-2">ZOOM</span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ asset('assets/img/dokumentasi/IMG-20230807-WA0053.jpg') }}"
                        class="gallery-item overflow-hidden relative w-full h-100 group">
                        <img src="{{ asset('assets/img/dokumentasi/IMG-20230807-WA0053.jpg') }}"
                            class="gallery-img w-full h-full object-cover" alt="Image 6" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="text-white p-2 flex transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M10 7v6m-3-3h6m4 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="ml-2">ZOOM</span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ asset('assets/img/dokumentasi/IMG-20230809-WA0048.jpg') }}"
                        class="gallery-item overflow-hidden relative w-full h-32 sm:h-40 md:h-80 group">
                        <img src="{{ asset('assets/img/dokumentasi/IMG-20230809-WA0048.jpg') }}"
                            class="gallery-img w-full h-full object-cover" alt="Image 7" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="text-white p-2 flex transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M10 7v6m-3-3h6m4 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="ml-2">ZOOM</span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ asset('assets/img/dokumentasi/IMG-20230811-WA0061.jpg') }}"
                        class="gallery-item overflow-hidden relative w-full h-32 sm:h-40 md:h-80 group">
                        <img src="{{ asset('assets/img/dokumentasi/IMG-20230811-WA0061.jpg') }}"
                            class="gallery-img w-full h-full object-cover" alt="Image 8" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="text-white p-2 flex transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M10 7v6m-3-3h6m4 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="ml-2">ZOOM</span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ asset('assets/img/dokumentasi/IMG-20230829-WA0020.jpg') }}"
                        class="gallery-item overflow-hidden relative w-full h-32 sm:h-40 md:h-80 group">
                        <img src="{{ asset('assets/img/dokumentasi/IMG-20230829-WA0020.jpg') }}"
                            class="gallery-img w-full h-full object-cover" alt="Image 9" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="text-white p-2 flex transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M10 7v6m-3-3h6m4 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="ml-2">ZOOM</span>
                            </div>
                        </div>
                    </a>
                    <!-- Hidden Images -->
                    <a href="{{ asset('assets/img/dokumentasi/IMG-20230930-WA0048.jpg') }}"
                        class="gallery-item overflow-hidden relative w-full h-100 hidden group">
                        <img src="{{ asset('assets/img/dokumentasi/IMG-20230930-WA0048.jpg') }}"
                            class="gallery-img w-full h-full object-cover" alt="Image 10" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="text-white p-2 flex transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M10 7v6m-3-3h6m4 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="ml-2">ZOOM</span>
                            </div>
                        </div>
                    </a>
                    <a href="{{ asset('assets/img/dokumentasi/IMG-20231221-WA0054.jpg') }}"
                        class="gallery-item overflow-hidden relative w-full h-100 hidden group">
                        <img src="{{ asset('assets/img/dokumentasi/IMG-20231221-WA0054.jpg') }}"
                            class="gallery-img w-full h-full object-cover" alt="Image 11" />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="text-white p-2 flex transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M10 7v6m-3-3h6m4 0a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="ml-2">ZOOM</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="text-center mt-4">
                    <h3 id="show-more"
                        class="px-4 py-2 transition cursor-pointer text-gray-900 hover:text-danger-300 rounded">
                        -- Selengkapnya --
                    </h3>
                </div>
            </div>
        </section>
    </main>
@endsection
