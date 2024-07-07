@extends('components.layout')

@section('content')
    <header>
        <section class="max-w-screen-xl p-6 mx-auto pt-[100px]">
            <div class="flex flex-col items-center justify-center py-10">
                <h2 class="text-2xl md:text-3xl font-bold text-center font-jakartaEuy text-danger-300">TENTANG KAMI</h2>
                <p class="text-center md:w-3/5">
                    {{-- FAST LEGAL adalah perusahaan yang menyediakan pengurusan legalitas perusahaan dan perorangan. Prinsip
                    kami menjadi solusi dan memberikan kemudahan bagi pengusaha Indonesia untuk memulai bisnis dan terus
                    mengembangkan bisnisnya. --}}
                    FAST LEGAL terdiri dari Individu pilihan dan merupakan Profesional yang berpengalaman akan membantu
                    pendirian legalitas Perusahaan anda maupun perizinan lanjutannya dari awal sampai akhir, bahkan kami
                    akan mendampingi Perusahaan anda secara berkelanjutan.
                </p>
            </div>
        </section>
    </header>

    <main>
        <section class="max-w-screen-xl p-6 mx-auto md:mb-40">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-4 lg:gap-5">
                <div class="lg:col-span-2 m">
                    <div class="about-img -mt-10">
                        <img src="{{ asset('assets/img/fastlegal.webp') }}" class="w-4/5 mx-auto" alt="fastlegal">
                    </div>
                </div>
                <div class="lg:col-span-3">
                    <h3 class="text-xl md:text-2xl pt-0 lg:pt-5 text-gray-800">
                        Tentang FAST LEGAL lainnya
                    </h3>

                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                            data-tabs-toggle="#default-styled-tab-content"
                            data-tabs-active-classes="text-danger-300 hover:text-danger-300 border-danger-300"
                            data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-danger-300 dark:text-gray-400 border-gray-100 hover:border-danger-300 dark:border-gray-700 dark:hover:text-gray-300"
                            role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="text-sm md:text-base inline-block p-4 border-b-2 rounded-t-lg"
                                    id="profile-styled-tab" data-tabs-target="#sejarah" type="button" role="tab"
                                    aria-controls="profile" aria-selected="false">Sejarah
                                </button>
                            </li>

                            <li class="me-2" role="presentation">
                                <button
                                    class="text-sm md:text-base inline-block p-4 border-b-2 rounded-t-lg hover:text-danger-300 hover:border-danger-300 dark:hover:text-gray-300"
                                    id="layanan-styled-tab" data-tabs-target="#layanan" type="button" role="tab"
                                    aria-controls="layanan" aria-selected="false">Layanan</button>
                            </li>

                            <li class="me-2" role="presentation">
                                <button
                                    class="text-sm md:text-base inline-block p-4 border-b-2 rounded-t-lg hover:text-danger-300 hover:border-danger-300 dark:hover:text-gray-300"
                                    id="pengalaman-styled-tab" data-tabs-target="#pengalaman" type="button" role="tab"
                                    aria-controls="pengalaman" aria-selected="false">Pengalaman</button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-styled-tab-content">
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="sejarah" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <p class="text-sm md:text-base text-gray-500 dark:text-gray-400">
                                FAST LEGAL beroperasi sejak 2022 dan baru mendirikan badan hukum pada tahun 2023, merupakan
                                perusahaan yang menyediakan pengurusan legalitas perusahaan dan perorangan. Prinsip kami
                                menjadi solusi dan memberikan kemudahan bagi pengusaha Indonesia untuk memulai bisnis dan
                                terus mengembangkan bisnisnya.
                            </p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="layanan" role="tabpanel"
                            aria-labelledby="layanan-tab">
                            <p class="text-sm md:text-base text-gray-500 dark:text-gray-400">
                                Layanan yang di tawarkan FAST LEGAL kerap berkembang dari waktu ke waktu. Di mulai dari
                                pendirian perusahaan, kini FAST LEGAL memiliki lebih dari 30 Layanan lainya, seperti
                                FASTHALAL (Sertifikasi Halal), FASTTAX (Pengurusan Pajak), FASTKONTRUKSI (Pengurusan Izin
                                Kontruksi), FASTPROPERTI (Pengurusan Seputar Tanah dan Properti) Perizinan Gedung,
                                Pengurusan Izin Lingkungan dan lainya. Seiring bertumbuhnya FAST LEGAL sebagai layanan
                                solusi bagi para pengusaha, kami akan terus berinovasi mengikuti semangat TIM FAST LEGAL.
                            </p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pengalaman" role="tabpanel"
                            aria-labelledby="pengalaman-tab">
                            <p class="text-sm md:text-base text-gray-500 dark:text-gray-400">
                                Tim FAST LEGAL terdiri dari Individu pilihan dan merupakan Profesional yang berpengalaman.
                                Kini FAST LEGAL sudah membantu lebih dari 500 Pengusaha di Indonesia untuk mendirikan
                                perusahaan dan mengurus seluruh kebutuhan legalitas Perusahaan. FAST LEGAL akan terus
                                berdedikasi dan memberikan kontribusi terbaik untuk perekonomian Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="flex items-center max-w-screen-xl mx-auto p-6 lg:mb-48">
            <div class="bg-danger-700 rounded-3xl grid grid-cols-1 py-4 md:py-2 md:grid-cols-2 px-10 gap-1 text-white">
                <div class="flex flex-col justify-center my-5 md:w-[112%]">
                    <h1 class="text-2xl md:text-4xl font-bold mb-4 font-jakartaEuy">
                        VISI FAST LEGAL
                    </h1>
                    <p class="text-base md:text-lg">
                        Menjadi konsultan perizinan dan Konsultan Bisnis yang memiliki pelayanan terbaik di kelas
                        Nasional maupun Internasional yang dapat meningkatkan pertumbuhan Perusahaan Pelanggan.
                    </p>
                </div>

                <div class="flex items-center justify-center -mb-4 md:-mb-2 md:-mt-56">
                    <img src="{{ asset('assets/img/visi.webp') }}" alt="Visi Image" class="w-[400px] select-none">
                </div>
            </div>
        </section>

        <section class="flex items-center max-w-screen-xl md:mt-4 mx-auto p-6 ">
            <div
                class="bg-danger-700 rounded-3xl lg:grid flex flex-col-reverse py-4 lg:py-2 lg:grid-cols-2 px-10 lg:gap-1 text-white">
                <div class="flex items-center justify-center -mb-4 lg:-mb-2 lg:-mt-56">
                    <img src="{{ asset('assets/img/misi.png') }}" alt="Visi Image" class="w-[450px] lg:-ml-10 select-none">
                </div>

                <div class="flex flex-col justify-center my-5 lg:my-0">
                    <h1 class="text-2xl md:text-4xl font-bold mb-4 font-jakartaEuy">
                        MISI FAST LEGAL
                    </h1>
                    <ul class="text-base list-disc">
                        <li>
                            Menjalankan operasional perusahaan dengan menempatkan SDM sebagai asset penting demi tercapainya
                            visi Perusahaan
                        </li>

                        <li>
                            Bekerja sama dengan institusi, organisasi / asosiasi, maupun Perusahaan lain untuk meningkatkan
                            kinerja dan pelayanan.
                        </li>

                        <li>
                            Meningkatkan mutu dan kualitas SDM untuk menjadi Konsultan yang mampu memberikan pelayanan yang
                            terbaik.
                        </li>

                        <li>
                            Menjaga kepercayaan pelanggan dengan bertanggung jawab menyelesaikan setiap kerja sama melalui
                            pola kerja tepat waktu, efektif dan efisien.
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="max-w-screen-xl mx-auto mt-6 p-6">
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

        @include('components.hubungi-component')

    </main>
@endsection
