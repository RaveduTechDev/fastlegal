<nav class="bg-white border-gray-200 dark:bg-gray-900 fixed w-full z-40 top-0 start-0" id="navigation">
    <div class="max-w-screen-xl m-h-screen justify-between flex flex-wrap items-center mx-auto py-2 px-4">
        <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/img/logo.jpeg') }}" class="h-16" alt="Logo FASTLEGAL" />
        </a>

        <div class="flex items-center mt-2 lg:order-2 space-x-1 lg:space-x-0 rtl:space-x-reverse">
            {{-- <button type="button"
                class="hidden lg:inline-flex mr-[4px] items-center font-semibold justify-center px-2 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer bg-gray-100 hover:bg-gray-100  dark:hover:text-white">
                <img src="{{ asset('assets/lang/id.svg') }}" class="h-4 mr-1 border border-gray-900" alt="INDONESIA">
                ID
            </button>

            <button type="button"
                class="hidden lg:inline-flex items-center font-semibold justify-center px-2 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100  dark:hover:text-white">
                <img src="{{ asset('assets/lang/uk.svg') }}" class="h-4 mr-1" alt="ENGLAND">
                EN
            </button>

            <div class="lg:border-r-2 lg:border-gray-200">&nbsp;</div> --}}

            <ul class="font-semibold hidden lg:inline-flex text-sm ">
                <li>
                    <a href="{{ url('/hubungi-kami') }}"
                        class="ml-[10px] block px-2 py-2 rounded-md bg-danger-300 hover:bg-danger-700 text-white transition ease-in">
                        HUBUNGI KAMI
                    </a>
                </li>
            </ul>

            {{-- <ul class="font-semibold text-sm">
                <li>
                    <a href=""
                        class="ml-[10px] block px-2 py-2 rounded-md border-2 bg-transparent hover:bg-danger-300  border-danger-300 text-danger-300 hover:text-red-50 transition ease-in">
                        TRACK PERIZINAN
                    </a>
                </li>
            </ul> --}}

            <button type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400  dark:focus:ring-gray-600"
                data-drawer-target="drawer-nav" data-drawer-show="drawer-nav" data-drawer-placement="right"
                aria-controls="drawer-nav" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        {{-- navbar --}}
        <div class="md:lg:pl-4 lg:mt-2 grow-0 lg:grow hidden w-full lg:flex lg:w-auto lg:order-1">
            <ul
                class="flex flex-col font-medium p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:space-x-7 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-white dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    {{-- aria-current="page" --}}
                    <a href="{{ url('/') }}"
                        class="block py-2 px-2 rounded bg-transparent text-sm {{ request()->is('/') ? 'text-danger-300' : 'text-gray-900' }} hover:text-danger-300 duration-300 lg:p-0">BERANDA</a>
                </li>

                @php
                    $layananRoutes = [
                        'pendirian-perusahaan',
                        'pendirian-pt',
                        'pendirian-cv',
                        'pendirian-firma',
                        'pendirian-koperasi',
                        'pendirian-yayasan',
                        'pendirian-perkumpulan',
                        'pendirian-persekutuan-perdata',
                        'fasthalal',
                        'fastkontruksi',
                        'fastproperti',
                        'fasttax',
                        'layanan-lainnya',
                    ];
                    $isLayananRoute = false;
                    foreach ($layananRoutes as $layananRoute) {
                        if (request()->is($layananRoute)) {
                            $isLayananRoute = true;
                            break;
                        }
                    }
                @endphp

                <li>
                    <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown"
                        class="flex py-2 px-2 lg:p-0 {{ $isLayananRoute ? 'text-danger-300' : 'text-gray-900' }} font-semibold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:text-sm lg:hover:text-danger-300 duration-300">
                        LAYANAN
                        <svg id="icon-megamenu-dropdown" class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                </li>
                <li>
                    <a href="{{ url('/tentang-kami') }}"
                        class="block py-2 px-2 lg:p-0 {{ request()->is('tentang-kami') ? 'text-danger-300' : 'text-gray-900' }} rounded hover:bg-gray-100 lg:hover:bg-transparent lg:text-sm lg:hover:text-danger-300 duration-300 dark:text-white lg:dark:hover:text-blue-500  dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                        TENTANG KAMI
                    </a>
                </li>
                <li>
                    <a href="{{ url('/partner-client') }}"
                        class="block py-2 px-2 lg:p-0 {{ request()->is('partner-client') ? 'text-danger-300' : 'text-gray-900' }} rounded hover:bg-gray-100 lg:hover:bg-transparent lg:text-sm lg:hover:text-danger-300 duration-300 dark:text-white lg:dark:hover:text-blue-500  dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                        PARTNER & CLIENT
                    </a>
                </li>
                <li>
                    <a href="{{ url('/artikel') }}"
                        class="block py-2 px-2 lg:p-0 {{ request()->is('artikel') ? 'text-danger-300' : 'text-gray-900' }} rounded hover:bg-gray-100 lg:hover:bg-transparent lg:text-sm lg:hover:text-danger-300 duration-300 dark:text-white lg:dark:hover:text-blue-500  dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                        ARTIKEL
                    </a>
                </li>
            </ul>
        </div>

        {{-- sidebar di drawer --}}
        <aside id="drawer-nav"
            class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto lg:hidden transition-transform duration-500 translate-x-full bg-white w-80 dark:bg-gray-800"
            tabindex="-1" aria-labelledby="drawer-right-label">

            <button type="button" data-drawer-hide="drawer-nav" aria-controls="drawer-nav"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-10 h-10 absolute top-3.5 end-3.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>

            <ul
                class="flex flex-col font-semibold p-4 mt-10 rounded-lg lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-white">
                <li>
                    <a href="{{ url('/') }}"
                        class="block py-2 px-3  
                        {{ request()->is('/') ? 'text-danger-300' : 'text-gray-900 hover:bg-gray-200' }} rounded duration-300"
                        aria-current="page">
                        BERANDA
                    </a>
                </li>
                <li class="overflow-hidden">
                    <button type="button" id="btn-layanan-mobile"
                        class="flex items-center w-full py-2 text-base {{ $isLayananRoute ? 'text-danger-300 ' : 'text-gray-900 ' }} hover:bg-gray-200 transition duration-75 rounded group"
                        aria-controls="dropdown-layanan-mobile" data-collapse-toggle="dropdown-layanan-mobile">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">LAYANAN</span>
                        <svg class="mr-4 w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <ul id="dropdown-layanan-mobile"
                        class="hidden rounded-md bg-gray-50 transition-height duration-300 ease overflow-hidden">
                        <li>
                            <a href="{{ url('/pendirian-perusahaan') }}"
                                class="flex items-center border-y border-white w-full hover:bg-gray-100 py-2 pl-10 text-gray-900 transition duration-75 ">
                                PENDIRIAN PERUSAHAAN
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/fasthalal') }}"
                                class="flex items-center border-y border-white w-full hover:bg-gray-100 py-2 pl-10 text-gray-900 transition duration-75 ">
                                FASTHALAL
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/fastkontruksi') }}"
                                class="flex items-center border-y border-white w-full hover:bg-gray-100 py-2 pl-10 text-gray-900 transition duration-75">
                                FASTKONTRUKSI
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/fastproperti') }}"
                                class="flex items-center border-y border-white w-full hover:bg-gray-100 py-2 pl-10 text-gray-900 transition duration-75">
                                FASTPROPERTI
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/fasttax') }}"
                                class="flex items-center border-y border-white w-full hover:bg-gray-100 py-2 pl-10 text-gray-900 transition duration-75">
                                FASTTAX
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/layanan-lainnya') }}"
                                class="flex items-center border-y border-white w-full hover:bg-gray-100 py-2 pl-10 text-gray-900 transition duration-75">
                                LAYANAN LAINNYA
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/tentang-kami') }}"
                        class="block py-2 px-3  
                        {{ request()->is('tentang-kami') ? 'text-danger-300' : 'text-gray-900 hover:bg-gray-200' }} rounded duration-300"
                        aria-current="page">
                        TENTANG KAMI
                    </a>
                </li>
                <li>
                    <a href="{{ url('/partner-client') }}"
                        class="block py-2 px-3  
                        {{ request()->is('partner-client') ? 'text-danger-300' : 'text-gray-900 hover:bg-gray-200' }} rounded duration-300"
                        aria-current="page">
                        PARTNER & CLIENT
                    </a>
                </li>
                <li>
                    <a href="{{ url('/artikel') }}"
                        class="block py-2 px-3  
                        {{ request()->is('artikel') ? 'text-danger-300' : 'text-gray-900 hover:bg-gray-200' }} rounded duration-300"
                        aria-current="page">
                        ARTIKEL
                    </a>
                </li>

                <li>
                    <a href="{{ url('/hubungi-kami') }}"
                        class="block py-2 px-3 text-white bg-danger-300 hover:bg-danger-700 rounded duration-300"
                        aria-current="page">
                        HUBUNGI KAMI
                    </a>
                </li>

                {{-- <div class="grid grid-cols-2 gap-4 mt-4">
                    <button type="button"
                        class="inline-flex mr-[4px] items-center font-semibold justify-center px-2 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer bg-gray-100 hover:bg-gray-100  dark:hover:text-white">
                        <img src="{{ asset('assets/lang/id.svg') }}" class="h-4 mr-1 border border-gray-900"
                            alt="INDONESIA">
                        ID
                    </button>

                    <button type="button"
                        class="inline-flex items-center font-semibold justify-center px-2 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100  dark:hover:text-white">
                        <img src="{{ asset('assets/lang/uk.svg') }}" class="h-4 mr-1" alt="ENGLAND">
                        EN
                    </button>
                </div> --}}

            </ul>
        </aside>
    </div>
</nav>

{{-- mega menu --}}
<section id="mega-menu-full-dropdown"
    class="nol:hidden md:hidden overflow-y-auto lg:hidden fixed inset-x-0 top-[80px] bg-white z-20 dark:bg-gray-800 dark:border-gray-600">
    <h2 class="px-8 pt-4 container mt-2 max-w-screen-xl mx-auto text-2xl">
        Layanan Kami
        <hr class="mt-2">
    </h2>

    <nav
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 pt-2 px-6 h-screen overflow-y-auto max-w-screen-xl mx-auto text-gray-900 dark:text-white">
        <ul aria-labelledby="mega-menu-full-dropdown-button">
            <li>
                <a href="{{ url('/pendirian-perusahaan') }}"
                    class="flex items-start p-3 rounded-lg hover:bg-white hover:shadow-custom ">
                    <img class="w-10" src="{{ asset('assets/img/commercial-complex-icon.svg') }}"
                        alt="icon company">

                    <div class="ml-4">
                        <h3 class="font-semibold">Pendirian Perusahaan</h3>
                        <p class="text-sm text-gray-500 ">
                            Pendirian PT
                        </p>
                        <p class="text-sm text-gray-500 ">
                            Pendirian CV
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ url('/fasthalal') }}"
                    class="flex items-start p-3 rounded-lg hover:bg-white hover:shadow-custom ">
                    <svg class="mx-1 w-14 text-danger-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path
                            d="M0 256C0 114.6 114.6 0 256 0c33 0 64.6 6.3 93.6 17.7c7.4 2.9 11.5 10.7 9.8 18.4s-8.8 13-16.7 12.4c-4.8-.3-9.7-.5-14.6-.5c-114.9 0-208 93.1-208 208s93.1 208 208 208c4.9 0 9.8-.2 14.6-.5c7.9-.5 15 4.7 16.7 12.4s-2.4 15.5-9.8 18.4C320.6 505.7 289 512 256 512C114.6 512 0 397.4 0 256zM375.4 137.4c3.5-7.1 13.7-7.1 17.2 0l31.5 63.8c1.4 2.8 4.1 4.8 7.2 5.3l70.4 10.2c7.9 1.1 11 10.8 5.3 16.4l-50.9 49.6c-2.3 2.2-3.3 5.4-2.8 8.5l12 70.1c1.3 7.8-6.9 13.8-13.9 10.1l-63-33.1c-2.8-1.5-6.1-1.5-8.9 0l-63 33.1c-7 3.7-15.3-2.3-13.9-10.1l12-70.1c.5-3.1-.5-6.3-2.8-8.5L261 233.1c-5.7-5.6-2.6-15.2 5.3-16.4l70.4-10.2c3.1-.5 5.8-2.4 7.2-5.3l31.5-63.8z" />
                    </svg>
                    <div class="ml-4">
                        <h3 class="font-semibold">FASTHALAL</h3>
                        <p class="text-sm text-gray-500 ">
                            Layanan sertifikasi halal untuk berbagai jenis produk dan layanan.
                        </p>
                    </div>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="{{ url('/fastkontruksi') }}"
                    class="flex items-start p-3 rounded-lg hover:bg-white hover:shadow-custom ">
                    <svg class="mr-1 w-16 text-danger-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512">
                        <path
                            d="M256 32c-17.7 0-32 14.3-32 32v2.3 99.6c0 5.6-4.5 10.1-10.1 10.1c-3.6 0-7-1.9-8.8-5.1L157.1 87C83 123.5 32 199.8 32 288v64H544l0-66.4c-.9-87.2-51.7-162.4-125.1-198.6l-48 83.9c-1.8 3.2-5.2 5.1-8.8 5.1c-5.6 0-10.1-4.5-10.1-10.1V66.3 64c0-17.7-14.3-32-32-32H256zM16.6 384C7.4 384 0 391.4 0 400.6c0 4.7 2 9.2 5.8 11.9C27.5 428.4 111.8 480 288 480s260.5-51.6 282.2-67.5c3.8-2.8 5.8-7.2 5.8-11.9c0-9.2-7.4-16.6-16.6-16.6H16.6z" />
                    </svg>

                    <div class="ml-4">
                        <h3 class="font-semibold">FASTKONTRUKSI</h3>
                        <p class="text-sm text-gray-500 ">
                            Layanan ijin usaha dalam persyaratan tender pemerintah / swasta.
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ url('/fastproperti') }}"
                    class="flex items-start p-3 rounded-lg hover:bg-white hover:shadow-custom ">

                    <svg class="w-16 text-danger-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512">
                        <path
                            d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h89.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zM576 272a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM352 477.1c0 19.3 15.6 34.9 34.9 34.9H605.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H445.1c-51.4 0-93.1 41.7-93.1 93.1z" />
                    </svg>

                    <div class="ml-4">
                        <h3 class="font-semibold">FASTPROPERTI</h3>
                        <p class="text-sm text-gray-500 ">
                            Layanan pengurusan surat–surat seputar tanah dan properti.
                        </p>
                    </div>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="{{ url('/fasttax') }}"
                    class="flex items-start p-3 rounded-lg hover:bg-white hover:shadow-custom ">
                    <svg class="mx-1 w-12 text-danger-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 384 512">
                        <path
                            d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 80c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm128 72c8.8 0 16 7.2 16 16v17.3c8.5 1.2 16.7 3.1 24.1 5.1c8.5 2.3 13.6 11 11.3 19.6s-11 13.6-19.6 11.3c-11.1-3-22-5.2-32.1-5.3c-8.4-.1-17.4 1.8-23.6 5.5c-5.7 3.4-8.1 7.3-8.1 12.8c0 3.7 1.3 6.5 7.3 10.1c6.9 4.1 16.6 7.1 29.2 10.9l.5 .1 0 0 0 0c11.3 3.4 25.3 7.6 36.3 14.6c12.1 7.6 22.4 19.7 22.7 38.2c.3 19.3-9.6 33.3-22.9 41.6c-7.7 4.8-16.4 7.6-25.1 9.1V440c0 8.8-7.2 16-16 16s-16-7.2-16-16V422.2c-11.2-2.1-21.7-5.7-30.9-8.9l0 0 0 0c-2.1-.7-4.2-1.4-6.2-2.1c-8.4-2.8-12.9-11.9-10.1-20.2s11.9-12.9 20.2-10.1c2.5 .8 4.8 1.6 7.1 2.4l0 0 0 0 0 0c13.6 4.6 24.6 8.4 36.3 8.7c9.1 .3 17.9-1.7 23.7-5.3c5.1-3.2 7.9-7.3 7.8-14c-.1-4.6-1.8-7.8-7.7-11.6c-6.8-4.3-16.5-7.4-29-11.2l-1.6-.5 0 0c-11-3.3-24.3-7.3-34.8-13.7c-12-7.2-22.6-18.9-22.7-37.3c-.1-19.4 10.8-32.8 23.8-40.5c7.5-4.4 15.8-7.2 24.1-8.7V232c0-8.8 7.2-16 16-16z" />
                    </svg>
                    <div class="ml-4">
                        <h3 class="font-semibold">FASTTAX</h3>
                        <p class="text-sm text-gray-500 ">
                            Layanan perencanaan pajak yang efektif, inovatif, dan patuh peraturan.
                        </p>
                    </div>

                </a>
            </li>
            <li>
                <a href="{{ url('/layanan-lainnya') }}"
                    class="flex items-start p-3 rounded-lg hover:bg-white hover:shadow-custom ">
                    <svg class="w-16 text-danger-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5" />
                    </svg>

                    <div class="ml-4">
                        <h3 class="font-semibold">Layanan Lainnya</h3>
                        <p class="text-sm text-gray-500 ">
                            Layanan lainnya yang sering dibutuhkan untuk kebutuhan bisnis
                        </p>
                    </div>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#" class="block p-3 rounded-lg hover:bg-white hover:shadow-custom ">
                    <div class="font-semibold">Lorem ipsum dolor</div>
                    <span class="text-sm text-gray-500 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, sint!
                    </span>
                </a>
            </li>
            <li>
                <a href="#" class="block p-3 rounded-lg hover:bg-white hover:shadow-custom ">
                    <div class="font-semibold">Tralala Trilili</div>
                    <span class="text-sm text-gray-500 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, voluptatibus?
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</section>
