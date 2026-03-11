@extends('components.layout')

@section('content')
    <header>
        <section class="relative bg-hero3 bg-fixed flex s-center pt-[120px] pb-[40px]">
            <div class="overlay absolute inset-0"></div>
            <div class="relative grid grid-cols-1 md:grid-cols-2 max-w-screen-xl mx-auto p-6 text-white">
                <div>
                    <h1 class="text-2xl md:text-4xl font-bold mb-8 font-jakartaEuy">
                        FASTKONTRUKSI
                    </h1>
                    <p class="text-base md:text-lg mb-4">
                        FASTKONTRUKSI membantu Perusahaan kontruksi memenuhi ijin usaha dalam persyaratan tender pemerintah
                        maupun swasta. Dengan syarat yang mudah, proses cepat, dan biaya terjangkau dan diterbitkan resmi
                        oleh Lembaga Sertifikasi Badan Usaha (LSBU) yang terdaftar di Kementerian Pekerjaan Umum dan
                        Perumahan Rakyat (PUPR).
                    </p>
                </div>
            </div>
        </section>
    </header>

    <main>
        <section class="max-w-screen-xl mx-auto p-6">
            <h2 class="text-xl md:text-2xl font-semibold font-jakartaEuy mb-4">Layanan FASTKONTRUKSI</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class=" bg-white  border border-red-300/45 rounded-lg overflow-hidden flex flex-col">
                    <img class="mx-auto w-[200px] p-4"
                        src="{{ asset('assets/icon/fast-kontruksi/Kartu Tanda Anggota (KTA) Asosiasi Kontruksi.PNG') }}"
                        alt="Pendirian Perusahaan" loading="lazy">
                    <div class="p-4 flex-grow">
                        <h3 class="text-lg md:text-xl mb-4 font-bold font-jakartaEuy">Kartu Tanda Anggota (KTA) Asosiasi
                            Kontruksi</h3>
                    </div>
                    <div class="bg-gray-100 p-5">
                        <div class="flex items-center">
                            <div class="flex-grow">
                                <p class="text-sm">Mulai dari</p>
                                <p class="text-md font-extrabold font-jakartaEuy flex-grow">IDR 1.500.000</p>
                            </div>

                            <a href="{{ url('https://api.whatsapp.com/send?phone=6281294924995&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                class="bg-danger-300 hover:bg-danger-700 transition text-white p-2 rounded-md">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <div class=" bg-white  border border-red-300/45 rounded-lg overflow-hidden flex flex-col">
                    <img class="mx-auto w-[200px] p-4"
                        src="{{ asset('assets/icon/fast-kontruksi/Sertifikat Kompetensi Kerja (SKK).PNG') }}"
                        alt="Pendirian Perusahaan" loading="lazy">
                    <div class="p-4 flex-grow">
                        <h3 class="text-lg md:text-xl mb-4 font-bold font-jakartaEuy">Sertifikat Kompetensi Kerja (SKK)</h3>
                    </div>
                    <div class="bg-gray-100 p-5">
                        <div class="flex items-center">
                            <div class="flex-grow">
                                <p class="text-sm">Mulai dari</p>
                                <p class="text-md font-extrabold font-jakartaEuy flex-grow">IDR 2.500.000</p>
                            </div>

                            <a href="{{ url('https://api.whatsapp.com/send?phone=6281294924995&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                class="bg-danger-300 hover:bg-danger-700 transition text-white p-2 rounded-md">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <div class=" bg-white  border border-red-300/45 rounded-lg overflow-hidden flex flex-col">
                    <img class="mx-auto w-[200px] p-4"
                        src="{{ asset('assets/icon/fast-kontruksi/Sertifikat Badan Usaha (SBU).PNG') }}"
                        alt="Pendirian Perusahaan" loading="lazy">
                    <div class="p-4 flex-grow">
                        <h3 class="text-lg md:text-xl mb-4 font-bold font-jakartaEuy">Sertifikat Badan Usaha (SBU) </h3>
                    </div>
                    <div class="bg-gray-100 p-5">
                        <div class="flex items-center">
                            <div class="flex-grow">
                                <p class="text-sm">Mulai dari</p>
                                <p class="text-md font-extrabold font-jakartaEuy flex-grow">IDR 1.000.000</p>
                            </div>

                            <a href="{{ url('https://api.whatsapp.com/send?phone=6281294924995&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                class="bg-danger-300 hover:bg-danger-700 transition text-white p-2 rounded-md">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('components.hubungi-component')
    </main>
@endsection
