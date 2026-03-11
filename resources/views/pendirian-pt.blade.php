@extends('components.layout')

@section('content')
    <header>
        <section class="relative bg-fixed bg-hero2 flex s-center pt-[120px] pb-[40px]">
            <div class="overlay absolute inset-0"></div>
            <div class="relative grid grid-cols-1 max-w-screen-xl mx-auto p-6 text-white">
                <div class="text-center justify-center">
                    <h1 class="text-2xl md:text-4xl  font-bold mb-8 font-jakartaEuy">
                        PAKET PENDIRIAN PT
                    </h1>
                    <p class="text-base md:text-lg mb-8 md:w-2/3 mx-auto">
                        Untuk Anda yang ingin melindungi aset pribadi Anda, ingin membuka pintu menuju peluang yang
                        lebih besar, dan perlindungan hukum yang lebih kuat, Mendirikan PT adalah langkah yang tepat!
                    </p>
                    <a href="#show-paket"
                        class="bg-white hover:text-danger-500 text-danger-300 transition font-bold py-2 px-6 rounded-full w-max">
                        Mulai Sekarang
                    </a>
                </div>
            </div>
        </section>
    </header>

    <main>
        <section class="max-w-screen-xl px-6 mx-auto mt-5">
            <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-danger-300">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            <span class="hidden md:block">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="{{ url('/pendirian-perusahaan') }}"
                                class="ms-1 text-xs md:text-sm font-medium text-gray-700 hover:text-danger-300 md:ms-2">
                                Pendirian Perusahaan
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-xs md:text-sm font-medium text-gray-500 md:ms-2 dark">
                                Pendirian PT
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </section>

        <section class="max-w-screen-xl px-6 mx-auto my-5" id="show-paket">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-6">
                <div
                    class="flex flex-col items-start p-5 bg-white border border-danger-300/40 rounded-lg shadow lg:flex-row">
                    <img class="w-3/4 mx-auto md:mt-4 rounded-t-lg h-40 md:h-auto lg:w-36 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('assets/img/pendirian-pt.svg') }}" alt="pt perorangan">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            PT PERORANGAN
                        </h2>
                        <h3 class="mb-2 text-lg text-danger-300 font-medium">IDR 1.200.000</h3>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Pengecakan Nama Perusahaan</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Konsultasi Pendirian Perusahaan</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Sertifikat Pendirian PT dari KEMENKUMHAM</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Pernyataan Pendirian PT dari KEMENKUMHAM</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> NPWP & SKT</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> NIB & Sertifikat Standar</span>
                        </p>
                        <p class="text-gray-600 mb-10 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Akun OSS RBA</span>
                        </p>
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

                <div
                    class="flex flex-col items-start p-5 bg-white border border-danger-300/40 rounded-lg shadow lg:flex-row">
                    <img class="w-3/4 mx-auto md:mt-4 rounded-t-lg h-40 md:h-auto lg:w-36 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('assets/img/pendirian-pt.svg') }}" alt="pt silver">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            PT SILVER
                        </h2>
                        <h3 class="mb-2 text-lg text-danger-300 font-medium">IDR 5.700.000</h3>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Pengecakan Nama Perusahaan</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Konsultasi Pendirian Perusahaan</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> AKTA Notaris</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> SK KEMENKUMHAM</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> NPWP & SKT</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> NIB & Sertifikat Standar</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Akun OSS RBA</span>
                        </p>
                        <p class="text-gray-600 mb-10 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Pernyataan Tata Ruang, K3L dan SPPL</span>
                        </p>

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

                <div
                    class="flex flex-col items-start p-5 bg-white border border-danger-300/40 rounded-lg shadow lg:flex-row">
                    <img class="w-3/4 mx-auto md:mt-4 rounded-t-lg h-40 md:h-auto lg:w-36 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('assets/img/pendirian-pt.svg') }}" alt="pt perorangan">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            PT GOLD
                        </h2>
                        <h3 class="mb-2 text-lg text-danger-300 font-medium">IDR 6.700.000</h3>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Pengecakan Nama Perusahaan</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Konsultasi Pendirian Perusahaan</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> AKTA Notaris</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> SK KEMENKUMHAM</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> NPWP & SKT</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> NIB & Sertifikat Standar</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Akun OSS RBA</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Pernyataan Tata Ruang, K3L dan SPPL</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Rekening Perusahaan</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> EFIN Perusahaan</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> TAX Planning</span>
                        </p>
                        <p class="text-gray-600 mb-10 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> SKT Umum Pajak</span>
                        </p>

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

                <div
                    class="flex flex-col items-start p-5 bg-white border border-danger-300/40 rounded-lg shadow lg:flex-row">
                    <img class="w-3/4 mx-auto md:mt-4 rounded-t-lg h-40 md:h-auto lg:w-36 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('assets/img/pendirian-pt.svg') }}" alt="pt perorangan">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            PT PLATINUM
                        </h2>
                        <h3 class="mb-2 text-lg text-danger-300 font-medium">IDR 7.500.000</h3>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Pengecakan Nama Perusahaan</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Konsultasi Pendirian Perusahaan</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> AKTA Notaris</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> SK KEMENKUMHAM</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> NPWP & SKT</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> NIB & Sertifikat Standar</span>
                        </p>
                        <p class="text-gray-600 mb-1 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Akun OSS RBA</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Pernyataan Tata Ruang, K3L dan SPPL</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Rekening Perusahaan</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> EFIN Perusahaan</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> TAX Planning</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> SKT Umum Pajak</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Logo Perusahaan</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> KOP Surat Perusahaan</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> STEMPEL</span>
                        </p>
                        <p class="text-gray-600 mb-10 flex items-center">
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                            </svg>
                            <span> Company Profile</span>
                        </p>

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

        <section class="md:mt-16">
            <article class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-screen-xl mx-auto p-6">
                <div class="flex items-start justify-center">
                    <img class="rounded-lg w-96" src="{{ asset('assets/img/about-us.svg') }}" alt="About Us">
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-4 font-jakartaEuy">Apa itu PT ?</h2>
                    <p class="mb-4">
                        Perseroan Terbatas (PT) (bahasa Belanda: Naamloze Vennootschap) adalah suatu badan hukum untuk
                        menjalankan usaha yang memiliki modal terdiri dari saham-saham, yang pemiliknya memiliki bagian
                        sebanyak saham yang dimilikinya. Karena modalnya terdiri dari saham-saham yang dapat
                        diperjualbelikan, perubahan kepemilikan perusahaan dapat dilakukan tanpa perlu membubarkan
                        perusahaan.
                    </p>
                    <p class="mb-4">
                        Terdapat dua pemilik modal dalam badan usaha berbentuk persekutuan komanditer, yaitu sekutu
                        komanditer dan sekutu komplementer. Sekutu komanditer bertugas menyerahkan barang, jasa,
                        atau uang
                        sebagai modal CV, tetapi tidak turut bertanggung jawab terhadap keberlangsungan CV.
                    </p>
                    <p class="mb-6">
                        Sekutu ini juga disebut sebagai sekutu pasif karena hanya bertugas untuk menyerahkan
                        pemasukan
                        sebagai modal persekutuan. Sementara sekutu komplementer yang disebut sekutu aktif yang
                        bertugas
                        untuk aktivitas operasional perusahaan dan sepenuhnya berhak melangsungkan perjanjian kerja
                        dengan
                        pihak ketiga. Sekutu ini merupakan pihak yang bertanggung jawab penuh terhadap eksistensi
                        CV,
                        seperti yang tertulis di Kitab Undang-Undang Hukum Dagang (KUH) Pasal 19.
                    </p>
                    <p class="mb-2 text-bold">
                        PERSYARATAN PENDIRIAN KLIK DIBAWAH INI
                    </p>

                    <a href="{{ url('https://docs.google.com/document/d/1q-pkEbcd7RHwX6rHa0zsez2SoymAXT-Q/edit?usp=sharing&ouid=110404530699378174574&rtpof=true&sd=true') }}"
                        class="px-4 py-2 inline-flex transition bg-danger-300 hover:bg-danger-700 rounded-md text-white"
                        target="_blank">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M6 16v-3h.375a.626.626 0 0 1 .625.626v1.749a.626.626 0 0 1-.626.625H6Zm6-2.5a.5.5 0 1 1 1 0v2a.5.5 0 0 1-1 0v-2Z" />
                            <path fill-rule="evenodd"
                                d="M11 7V2h7a2 2 0 0 1 2 2v5h1a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-1a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2H3a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h6a2 2 0 0 0 2-2Zm7.683 6.006 1.335-.024-.037-2-1.327.024a2.647 2.647 0 0 0-2.636 2.647v1.706a2.647 2.647 0 0 0 2.647 2.647H20v-2h-1.335a.647.647 0 0 1-.647-.647v-1.706a.647.647 0 0 1 .647-.647h.018ZM5 11a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h1.376A2.626 2.626 0 0 0 9 15.375v-1.75A2.626 2.626 0 0 0 6.375 11H5Zm7.5 0a2.5 2.5 0 0 0-2.5 2.5v2a2.5 2.5 0 0 0 5 0v-2a2.5 2.5 0 0 0-2.5-2.5Z"
                                clip-rule="evenodd" />
                            <path d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Z" />
                        </svg>

                        <span class="ml-2"> Lihat Persyaratan</span>
                    </a>
                </div>
            </article>
        </section>

        @include('components.hubungi-component')

    </main>
@endsection
