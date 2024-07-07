@extends('components.layout')

@section('content')
    <header>
        <section class="relative bg-hero2 bg-fixed flex s-center pt-[120px] pb-[40px]">
            <div class="overlay absolute inset-0"></div>
            <div class="relative grid grid-cols-1 max-w-screen-xl mx-auto p-6 text-white">
                <div class="text-center justify-center">
                    <h1 class="text-2xl md:text-4xl font-bold mb-8 font-jakartaEuy">
                        PENDIRIAN PERUSAHAAN
                    </h1>
                    <p class="text-base md:text-lg mb-8 md:w-2/3 mx-auto">
                        Pendirian Perusahaan untuk membantu Anda menjelaskan bisnis dengan legalitas serta badan usaha yang
                        bonafid
                    </p>
                    <a href="#start"
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
                            class="inline-flex items-center text-xs md:text-sm font-medium text-gray-700 hover:text-danger-300">
                            <svg class="w-3 h-3 md:me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            <span class="hidden md:block">Beranda</span>
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180  w-2 h-2 md:w-3 md:h-3 mx-1 text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-xs md:text-sm font-medium text-gray-500 md:ms-2 dark">
                                Pendirian Perusahaan
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </section>

        <section class="max-w-screen-xl mx-auto p-6 mt-4 mb-10 relative" id="start">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class=" bg-white  border border-red-300/45 rounded-lg overflow-hidden flex flex-col">
                    <img class="mx-auto w-[200px] p-4" src="{{ asset('assets/img/pendirian-pt.svg') }}"
                        alt="Pendirian Perusahaan">
                    <div class="p-4 flex-grow">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">Paket Pendirian PT</h3>
                        <p class="text-gray-700 text-md">
                            deskripsi
                        </p>
                    </div>

                    <div class="bg-gray-100 p-5">
                        <div class="flex items-center">
                            <div class="flex-grow">
                                <p class="text-sm">Mulai dari</p>
                                <p class="text-md font-extrabold font-jakartaEuy flex-grow">IDR 1.200.000</p>
                            </div>

                            <a href="{{ url('/pendirian-pt') }}" class="bg-red-300/50 p-2 rounded-full group">
                                <svg class="w-6 h-6 text-danger-300 transition group-hover:translate-x-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>

                <div class=" bg-white  border border-red-300/45 rounded-lg overflow-hidden flex flex-col">
                    <img class="mx-auto w-[200px] p-4" src="{{ asset('assets/img/pendirian-pt.svg') }}"
                        alt="Pendirian Perusahaan">
                    <div class="p-4 flex-grow">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">Paket Pendirian CV</h3>
                        <p class="text-gray-700 text-md">
                            deskripsi
                        </p>
                    </div>

                    <div class="bg-gray-100 p-5">
                        <div class="flex items-center">
                            <div class="flex-grow">
                                <p class="text-sm">Mulai dari</p>
                                <p class="text-md font-extrabold font-jakartaEuy flex-grow">IDR 4.700.000</p>
                            </div>

                            <a href="{{ url('/pendirian-cv') }}" class="bg-red-300/50 p-2 rounded-full group">
                                <svg class="w-6 h-6 text-danger-300 transition group-hover:translate-x-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white  border border-red-300/45 rounded-lg overflow-hidden flex flex-col">
                    <img class="mx-auto w-[200px] p-4" src="{{ asset('assets/img/pendirian-pt.svg') }}"
                        alt="Pendirian Perusahaan">
                    <div class="p-4 flex-grow">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">Paket Pendirian Firma</h3>
                        <p class="text-gray-700 text-md">
                            Untuk Anda yang membutuhkan badan usaha berbentuk Persekutuan yang tidak terbatas tanggung
                            jawabnya terhadap perikatan Perseroan dengan pihak ketiga.
                        </p>
                    </div>

                    <div class="bg-gray-100 p-5">
                        <div class="flex items-center">
                            <div class="flex-grow">
                                <p class="text-sm">Mulai dari</p>
                                <p class="text-md font-extrabold font-jakartaEuy flex-grow">IDR 6.900.000</p>
                            </div>

                            <a href="{{ url('/pendirian-firma') }}" class="bg-red-300/50 p-2 rounded-full group">
                                <svg class="w-6 h-6 text-danger-300 transition group-hover:translate-x-1"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class=" bg-white  border border-red-300/45 rounded-lg overflow-hidden flex flex-col">
                    <img class="mx-auto w-[200px] p-4" src="{{ asset('assets/img/pendirian-pt.svg') }}"
                        alt="Pendirian Perusahaan">
                    <div class="p-4 flex-grow">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">Paket Pendirian Koperasi</h3>
                        <p class="text-gray-700 text-md">
                            Untuk Anda yang ingin membutuhkan badan usaha untuk kepentingan bersama, saling tolong menolong
                            mensejahterakan dan memberi manfaat bagi segenap anggota maupun Masyarakat sekitar.
                        </p>
                    </div>

                    <div class="bg-gray-100 p-5">
                        <div class="flex items-center">
                            <div class="flex-grow">
                                <p class="text-sm">Mulai dari</p>
                                <p class="text-md font-extrabold font-jakartaEuy flex-grow">IDR 10.900.000</p>
                            </div>

                            <a href="{{ url('/pendirian-koperasi') }}" class="bg-red-300/50 p-2 rounded-full group">
                                <svg class="w-6 h-6 text-danger-300 transition group-hover:translate-x-1"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>

                <div class=" bg-white  border border-red-300/45 rounded-lg overflow-hidden flex flex-col">
                    <img class="mx-auto w-[200px] p-4" src="{{ asset('assets/img/pendirian-pt.svg') }}"
                        alt="Pendirian Perusahaan">
                    <div class="p-4 flex-grow">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">Paket Pendirian Yayasan</h3>
                        <p class="text-gray-700 text-md">
                            Untuk anda yang ingin membutuhkan badan hukum yang bergerak dalam bidang sosial, keagamaan dan
                            kemanusiaan.
                        </p>
                    </div>

                    <div class="bg-gray-100 p-5">
                        <div class="flex items-center">
                            <div class="flex-grow">
                                <p class="text-sm">Mulai dari</p>
                                <p class="text-md font-extrabold font-jakartaEuy flex-grow">IDR 6.900.000</p>
                            </div>

                            <a href="{{ url('/pendirian-yayasan') }}" class="bg-red-300/50 p-2 rounded-full group">
                                <svg class="w-6 h-6 text-danger-300 transition group-hover:translate-x-1"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>

                <div class=" bg-white  border border-red-300/45 rounded-lg overflow-hidden flex flex-col">
                    <img class="mx-auto w-[200px] p-4" src="{{ asset('assets/img/pendirian-pt.svg') }}"
                        alt="Pendirian Perusahaan">
                    <div class="p-4 flex-grow">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">Paket Pendirian Perkumpulan</h3>
                        <p class="text-gray-700 text-md">
                            Untuk anda yang ingin membutuhkan badan hukum yang merupakan kumpulan orang untuk mewujudkan
                            kesamaan maksud dan tujuan tertentu dibidang sosial, keagamaan dan kemanusiaan dan tidak
                            membagikan keuntungan kepada anggotanya.
                        </p>
                    </div>

                    <div class="bg-gray-100 p-5">
                        <div class="flex items-center">
                            <div class="flex-grow">
                                <p class="text-sm">Mulai dari</p>
                                <p class="text-md font-extrabold font-jakartaEuy flex-grow">IDR 7.900.000</p>
                            </div>

                            <a href="{{ url('/pendirian-perkumpulan') }}" class="bg-red-300/50 p-2 rounded-full group">
                                <svg class="w-6 h-6 text-danger-300 transition group-hover:translate-x-1"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class=" bg-white  border border-red-300/45 rounded-lg overflow-hidden flex flex-col">
                    <img class="mx-auto w-[200px] p-4" src="{{ asset('assets/img/pendirian-pt.svg') }}"
                        alt="Pendirian Perusahaan">
                    <div class="p-4 flex-grow">
                        <h3 class="text-lg mb-4 font-bold font-jakartaEuy">Paket Pendirian Persekutuan Perdata</h3>
                        <p class="text-gray-700 text-md">
                            Untuk anda yang ingin membutuhkan badan usaha dengan kumpulan orang – orang yang memiliki
                            profesi yang sama dan menggunakan nama yang sama untuk mencari keuntungan.
                        </p>
                    </div>

                    <div class="bg-gray-100 p-5">
                        <div class="flex items-center">
                            <div class="flex-grow">
                                <p class="text-sm">Mulai dari</p>
                                <p class="text-md font-extrabold font-jakartaEuy flex-grow">IDR 6.900.000</p>
                            </div>

                            <a href="{{ url('/pendirian-persekutuan-perdata') }}"
                                class="bg-red-300/50 p-2 rounded-full group">
                                <svg class="w-6 h-6 text-danger-300 transition group-hover:translate-x-1"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        @include('components.hubungi-component')
    </main>
@endsection
