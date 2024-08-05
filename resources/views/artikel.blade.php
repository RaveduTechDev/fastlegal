@extends('components.layout')

@section('content')
    <header class="max-w-screen-xl mx-auto p-6">
        {{-- <section class="relative bg-hero3 bg-fixed flex s-center pt-[120px] pb-[40px]">
            <div class="overlay absolute inset-0"></div>
            <div class="relative grid grid-cols-1 md:grid-cols-2 max-w-screen-xl mx-auto p-6 text-white">
                <div>
                    <h1 class="text-2xl md:text-4xl font-bold mb-8 font-jakartaEuy">
                        ARTIKEL
                    </h1>
                    <p class="text-base md:text-lg mb-16">
                        FASTHALAL memberikan jasa konsultasi professional dalam pengurusan sertifikasi halal untuk berbagai
                        jenis produk dan layanan. Kami bangga menjadi mitra Anda dalam memperoleh sertifikasi halal yang sah
                        dan terpercaya.
                    </p>
                </div>
            </div>
        </section> --}}
        <h1 class="text-3xl font-bold pt-[100px]">ARTIKEL</h1>
    </header>

    <main>

        {{-- <section class="max-w-screen-xl mx-auto p-6 mb-10 grid grid-cols-1 md:grid-cols-2">
            <div class="main-content">

                <article
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="/docs/images/blog/image-4.jpg" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="">Noteworthy technology acquisitions 2021</a>
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </article>


            </div>
        </section> --}}

        <section class="flex flex-wrap max-w-screen-xl mx-auto p-6 mb-10">
            <div id="main-content" class="w-full md:w-2/3 lg:w-3/4">
                <article class="flex items-start mb-4 py-2">
                    <figure class="w-40 h-20 sm:w-full sm:h-auto md:w-1/3 overflow-hidden">
                        <a href="">
                            <img src="{{ asset('assets/img/bg-header.jpg') }}" alt="nyenye"
                                class="object-cover w-40 h-20  sm:h-48 sm:w-96 shadow-md">
                        </a>
                    </figure>

                    <div class="w-full md:w-2/3 px-4">
                        <div class="mb-4">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-semibold">
                                <a href="" class="hover:text-danger-300">
                                    Jasa Pembuatan PT Murah dan Cepat
                                </a>
                            </h3>
                            <div class="text-sm text-gray-500">
                                <span class="mr-2 inline-flex items-center">
                                    <svg class="w-4 h-4 " fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    <span class="ml-1">Agustus 5, 2024</span>
                                </span>
                                <span class="mr-2 inline-flex items-center group">
                                    <svg class="w-4 h-4 group-hover:text-danger-300" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                    <a href="" class="group-hover:text-danger-300 ml-1">Tim Fast Legal</a>
                                </span>
                                <span class="inline-flex items-center group">
                                    <svg class="w-4 h-4 group-hover:text-danger-300" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z" />
                                    </svg>
                                    <a href="" class="group-hover:text-danger-300 ml-1">0</a>
                                </span>
                            </div>
                        </div>
                        <div class="hidden sm:block">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fuga hic error autem
                                quae. Consectetur saepe, esse maiores inventore, qui, officia atque dolor molestiae quaerat
                                magni sapiente. <a href="" class="text-danger-300 hover:underline">[…]
                                </a>
                            </p>
                        </div>
                    </div>
                </article>

                <hr class="border-b border-gray-200 my-4 md:mr-10">

                <article class="flex items-start mb-4 py-2">
                    <figure class="w-40 h-20 sm:w-full sm:h-auto md:w-1/3 overflow-hidden">
                        <a href="">
                            <img src="{{ asset('assets/img/bg-header.jpg') }}" alt="nyenye"
                                class="object-cover w-40 h-20  sm:h-48 sm:w-96 shadow-md">
                        </a>
                    </figure>

                    <div class="w-full md:w-2/3 px-4">
                        <div class="mb-4">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-semibold">
                                <a href="" class="hover:text-danger-300">
                                    Jasa Pembuatan PT Murah dan Cepat
                                </a>
                            </h3>
                            <div class="text-sm text-gray-500">
                                <span class="mr-2 inline-flex items-center">
                                    <svg class="w-4 h-4 " fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    <span class="ml-1">Agustus 5, 2024</span>
                                </span>
                                <span class="mr-2 inline-flex items-center group">
                                    <svg class="w-4 h-4 group-hover:text-danger-300" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                    <a href="" class="group-hover:text-danger-300 ml-1">Tim Fast Legal</a>
                                </span>
                                <span class="inline-flex items-center group">
                                    <svg class="w-4 h-4 group-hover:text-danger-300" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z" />
                                    </svg>
                                    <a href="" class="group-hover:text-danger-300 ml-1">0</a>
                                </span>
                            </div>
                        </div>
                        <div class="hidden sm:block">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fuga hic error autem
                                quae. Consectetur saepe, esse maiores inventore, qui, officia atque dolor molestiae quaerat
                                magni sapiente. <a href="" class="text-danger-300 hover:underline">[…]
                                </a>
                            </p>
                        </div>
                    </div>
                </article>

                <hr class="border-b border-gray-200 my-4 md:mr-10">

                <article class="flex items-start mb-4 py-2">
                    <figure class="w-40 h-20 sm:w-full sm:h-auto md:w-1/3 overflow-hidden">
                        <a href="">
                            <img src="{{ asset('assets/img/bg-header.jpg') }}" alt="nyenye"
                                class="object-cover w-40 h-20  sm:h-48 sm:w-96 shadow-md">
                        </a>
                    </figure>

                    <div class="w-full md:w-2/3 px-4">
                        <div class="mb-4">
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-semibold">
                                <a href="" class="hover:text-danger-300">
                                    Jasa Pembuatan PT Murah dan Cepat
                                </a>
                            </h3>
                            <div class="text-sm text-gray-500">
                                <span class="mr-2 inline-flex items-center">
                                    <svg class="w-4 h-4 " fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    <span class="ml-1">Agustus 5, 2024</span>
                                </span>
                                <span class="mr-2 inline-flex items-center group">
                                    <svg class="w-4 h-4 group-hover:text-danger-300" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                    <a href="" class="group-hover:text-danger-300 ml-1">Tim Fast Legal</a>
                                </span>
                                <span class="inline-flex items-center group">
                                    <svg class="w-4 h-4 group-hover:text-danger-300" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z" />
                                    </svg>
                                    <a href="" class="group-hover:text-danger-300 ml-1">0</a>
                                </span>
                            </div>
                        </div>
                        <div class="hidden sm:block">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fuga hic error autem
                                quae. Consectetur saepe, esse maiores inventore, qui, officia atque dolor molestiae quaerat
                                magni sapiente. <a href="" class="text-danger-300 hover:underline">[…]
                                </a>
                            </p>
                        </div>
                    </div>
                </article>

                <hr class="border-b border-gray-200 my-4 md:mr-10">

                <nav class="flex mt-8" aria-label="Pos">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <span aria-current="page"
                                class="px-3 py-2 border border-gray-300 bg-gray-200 text-gray-500">1</span>
                        </li>
                        <li>
                            <a class="px-3 py-2 border border-gray-300 bg-white hover:bg-gray-100 text-gray-500"
                                href="">2</a>
                        </li>
                        <li>
                            <span class="px-3 py-2 border border-gray-300 bg-white text-gray-500">…</span>
                        </li>
                        <li>
                            <a class="px-3 py-2 border border-gray-300 bg-white hover:bg-gray-100 text-gray-500"
                                href="">57</a>
                        </li>
                        <li>
                            <a class="px-3 py-2 border border-gray-300 bg-white hover:bg-gray-100 text-gray-500"
                                href="">»</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <aside class="w-full md:w-1/3 lg:w-1/4">
                <div class="mb-6">
                    <form class="flex mt-10 md:mt-0 md:items-center md:max-w-sm md:mx-auto">
                        <label for="simple-search" class="sr-only">Cari</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M168 80c-13.3 0-24 10.7-24 24l0 304c0 8.4-1.4 16.5-4.1 24L440 432c13.3 0 24-10.7 24-24l0-304c0-13.3-10.7-24-24-24L168 80zM72 480c-39.8 0-72-32.2-72-72L0 112C0 98.7 10.7 88 24 88s24 10.7 24 24l0 296c0 13.3 10.7 24 24 24s24-10.7 24-24l0-304c0-39.8 32.2-72 72-72l272 0c39.8 0 72 32.2 72 72l0 304c0 39.8-32.2 72-72 72L72 480zM176 136c0-13.3 10.7-24 24-24l96 0c13.3 0 24 10.7 24 24l0 80c0 13.3-10.7 24-24 24l-96 0c-13.3 0-24-10.7-24-24l0-80zm200-24l32 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-32 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80l32 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-32 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zM200 272l208 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-208 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80l208 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-208 0c-13.3 0-24-10.7-24-24s10.7-24 24-24z" />
                                </svg>

                            </div>
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-danger-300 focus:border-danger-300 block w-full ps-10 p-2.5 "
                                placeholder="Cari..." required />
                        </div>
                        <button type="submit"
                            class="p-2.5 ms-2 text-sm font-medium text-white bg-danger-300 rounded-lg border border-danger-300 hover:bg-danger-500 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Cari</span>
                        </button>
                    </form>

                </div>

                <div class="mb-6">
                    <h4 class="text-lg font-semibold mb-4">
                        <a href="" class="hover:underline">Artikel Lainnya</a>
                    </h4>
                    <ul>
                        <li class="mb-2">
                            <div class="flex items-start ">
                                <a href="#" class="inline-block mr-3">
                                    <div class="w-20 h-20 bg-cover bg-center">
                                        <img src="{{ asset('assets/img/bg-header.jpg') }}" alt="shesshh">
                                    </div>
                                </a>
                                <div class="text-sm">
                                    <a href="#"
                                        class="text-gray-900 font-medium hover:text-danger-300 leading-none">
                                        Cristiano Ronaldo of Juventus FC looks dejected during the...
                                    </a>
                                    <div class="text-xs md:text-sm text-gray-500">
                                        <span class="mr-2 inline-flex items-center">
                                            <svg class="w-3 h-3 " fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                            </svg>
                                            <span class="ml-1">Agustus 5, 2024</span>
                                        </span>
                                        <span class="hidden items-center group lg:inline-flex">
                                            <svg class="w-3 h-3 group-hover:text-danger-300" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                <path
                                                    d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z" />
                                            </svg>
                                            <a href="" class="group-hover:text-danger-300 ml-1">0</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="mb-2">
                            <div class="flex items-start ">
                                <a href="#" class="inline-block mr-3">
                                    <div class="w-20 h-20 bg-cover bg-center">
                                        <img src="{{ asset('assets/img/bg-header.jpg') }}" alt="shesshh">
                                    </div>
                                </a>
                                <div class="text-sm">
                                    <a href="#"
                                        class="text-gray-900 font-medium hover:text-danger-300 leading-none">
                                        Cristiano Ronaldo of Juventus FC looks dejected during the...
                                    </a>
                                    <div class="text-xs md:text-sm text-gray-500">
                                        <span class="mr-2 inline-flex items-center">
                                            <svg class="w-3 h-3 " fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                            </svg>
                                            <span class="ml-1">Agustus 5, 2024</span>
                                        </span>

                                        <span class="hidden items-center group lg:inline-flex">
                                            <svg class="w-3 h-3 group-hover:text-danger-300" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                <path
                                                    d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z" />
                                            </svg>
                                            <a href="" class="group-hover:text-danger-300 ml-1">0</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="mb-2">
                            <div class="flex items-start ">
                                <a href="#" class="inline-block mr-3">
                                    <div class="w-20 h-20 bg-cover bg-center">
                                        <img src="{{ asset('assets/img/bg-header.jpg') }}" alt="shesshh">
                                    </div>
                                </a>
                                <div class="text-sm">
                                    <a href="#"
                                        class="text-gray-900 font-medium hover:text-danger-300 leading-none">
                                        Cristiano Ronaldo of Juventus FC looks dejected during the...
                                    </a>
                                    <div class="text-xs md:text-sm text-gray-500">
                                        <span class="mr-2 inline-flex items-center">
                                            <svg class="w-3 h-3 " fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                            </svg>
                                            <span class="ml-1">Agustus 5, 2024</span>
                                        </span>

                                        <span class="hidden items-center group lg:inline-flex">
                                            <svg class="w-3 h-3 group-hover:text-danger-300" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                <path
                                                    d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z" />
                                            </svg>
                                            <a href="" class="group-hover:text-danger-300 ml-1">0</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </aside>
        </section>


        @include('components.hubungi-component')
    </main>
@endsection
