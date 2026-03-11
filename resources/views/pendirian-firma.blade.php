@extends('components.layout')

@section('content')
    <header>
        <section class="relative bg-hero2 bg-fixed flex s-center pt-[120px] pb-[40px]">
            <div class="overlay absolute inset-0"></div>
            <div class="relative flex md:flex-row items-center flex-col max-w-screen-xl mx-auto p-6 text-white">
                <div class="md:mr-10">
                    <a href="{{ url('/pendirian-perusahaan') }}" class="group inline-block">
                        <div class="flex flex-row items-center ">
                            <span class="text-xl mb-2 rounded-full transition group-hover:bg-white p-2  border border-white">
                                <svg class="w-4 h-4 text-white transition group-hover:text-danger-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m15 19-7-7 7-7" />
                                </svg>
                            </span>
                            <span class="ml-2 pb-2 group-hover:underline transition"> Kembali</span>
                        </div>
                    </a>
                    <h1 class="text-2xl md:text-4xl font-bold mb-6 font-jakartaEuy">
                        PENDIRIAN FIRMA
                    </h1>
                    <p class="text-base md:text-lg mb-4">
                        Untuk Anda yang membutuhkan badan usaha berbentuk Persekutuan yang tidak terbatas tanggung jawabnya
                        terhadap perikatan Perseroan dengan pihak ketiga.
                    </p>
                </div>

                <div class="w-full mt-px bg-white shadow-danger-300 rounded-lg ">
                    <div class="px-2 text-center h-28 flex flex-col items-center justify-center">
                        <span class="text-2xl text-gray-600">IDR 6.900.000</span>
                    </div>
                    <p class="text-gray-600 h-12  px-6 flex items-center border-t border-gray-300">
                        <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        <span> AKTA Pendirian Firma</span>
                    </p>
                    <p class="text-gray-600 h-12  px-6 flex items-center">
                        <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        <span> SK KEMENKUMHAM</span>
                    </p>
                    <p class="text-gray-600 h-12  px-6 flex items-center">
                        <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        <span> NPWP dan SKT</span>
                    </p>
                    <p class="text-gray-600 h-12  px-6 flex items-center">
                        <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        <span> NIB</span>
                    </p>
                    <p class="text-gray-600 h-12  px-6 flex items-center">
                        <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        <span> Akun OSS RBA</span>
                    </p>

                    <div class="p-6 text-center border-t border-gray-300">
                        <a href="{{ url('https://api.whatsapp.com/send?phone=6281294924995&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                            class="flex items-center mt-auto text-white bg-danger-300 border-0 py-2 px-4 w-full focus:outline-none hover:bg-red-600 rounded">
                            Pesan Sekarang
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <main>
        @include('components.hubungi-component')
    </main>
@endsection
