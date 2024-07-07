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
                            <h3 class="font-semibold group-hover:text-white">Pendirian Perusahaan</h3>
                        </div>
                    </a>
                </div>

                <div class="item px-2">
                    <a href="#" class=" flex items-center p-3 transition rounded-lg bg-white shadow-custom2">
                        <img class="w-10 block group-hover:hidden"
                            src="{{ asset('assets/img/commercial-complex-icon.svg') }}" alt="icon company">
                        <div class="ml-4">
                            <h3 class="font-semibold group-hover:text-white">FASTHALAL</h3>
                        </div>
                    </a>
                </div>

                <div class="item px-2">
                    <a href="#" class=" flex items-center p-3 transition rounded-lg bg-white shadow-custom2">
                        <img class="w-10 block group-hover:hidden"
                            src="{{ asset('assets/img/commercial-complex-icon.svg') }}" alt="icon company">
                        <div class="ml-4">
                            <h3 class="font-semibold group-hover:text-white">FASTKONTRUKSI</h3>
                        </div>
                    </a>
                </div>

                <div class="item px-2">
                    <a href="#" class=" flex items-center p-3 transition rounded-lg bg-white shadow-custom2">
                        <img class="w-10 block group-hover:hidden"
                            src="{{ asset('assets/img/commercial-complex-icon.svg') }}" alt="icon company">
                        <div class="ml-4">
                            <h3 class="font-semibold group-hover:text-white">FASTPROPERTI</h3>
                        </div>
                    </a>
                </div>

                <div class="item px-2">
                    <a href="#" class=" flex items-center p-3 transition rounded-lg bg-white shadow-custom2">
                        <img class="w-10 block group-hover:hidden"
                            src="{{ asset('assets/img/commercial-complex-icon.svg') }}" alt="icon company">
                        <div class="ml-4">
                            <h3 class="font-semibold group-hover:text-white">FASTTAX</h3>
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
            <blockquote class="p-4 md:py-8 md:px-20 mt-4 mb-6 rounded-md border-s-8 border-danger-300 bg-red-100">
                <h2 class="md:text-3xl text-center italic font-medium leading-relaxed text-gray-900 ">
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

        {{-- partner --}}

    </main>
@endsection
