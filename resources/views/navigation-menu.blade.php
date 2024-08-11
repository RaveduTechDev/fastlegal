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
        'fastkonstruksi',
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

    $ArtikelRoutes = ['artikel', 'artikel/*', 'comment/*', 'user/*', 'kategori/*'];
    $isArtikelRoute = false;
    foreach ($ArtikelRoutes as $ArtikelRoute) {
        if (request()->is($ArtikelRoute)) {
            $isArtikelRoute = true;
            break;
        }
    }

    $otherRoutes = ['artikel', 'artikel/*', 'comment/*', 'user/*', 'kategori/*', 'partner-client'];
    $isOtherRoute = false;
    foreach ($otherRoutes as $otherRoute) {
        if (request()->is($otherRoute)) {
            $isOtherRoute = true;
            if ($otherRoute === 'user/profile') {
                $isOtherRoute = true;
            }
            break;
        }
    }
@endphp

<nav x-data="{ open: false }" class="bg-white border-gray-200 fixed w-full z-40 top-0 start-0" id="navigation">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}">
                        <x-application-mark class="block h-16 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 lg:flex">
                    <x-nav-link href="{{ url('/') }}" :active="request()->is('/')">
                        {{ __('BERANDA') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('DASHBOARD') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ms-3 hidden relative lg:inline-flex items-center">
                    <p class="px-2 font-semibold">{{ Auth::user()->name }}</p>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm items-center group rounded-full transition">
                                    <img class="h-8 w-8 rounded-full object-cover group-focus:outline-none border-2 border-transparent group-focus:border-danger-300"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />

                                    <svg class="w-2.5 h-2.5 ms-1 group-focus:rotate-180 transition" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-danger-500 bg-white hover:text-danger-700 focus:outline-none focus:bg-danger-50 active:bg-danger-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Kelola Akun') }}
                            </div>

                            <a href="{{ route('profile.show') }}"
                                class="block text-xs px-4 py-2 font-medium hover:text-danger-300">
                                {{ __('PROFILE') }}
                            </a>

                            @if (Auth::user()->role !== 'user')
                                <a href="{{ url('/admin') }}"
                                    class="block text-xs px-4 py-2 mb-2 font-medium hover:text-danger-300">
                                    {{ __('ADMIN') }}
                                </a>
                            @endif

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                    class="block px-4 py-2 text-sm text-danger-300 font-medium">
                                    {{ __('LOG OUT') }}
                                </a>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center lg:hidden">
                <button type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
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

            {{-- sidebar di drawer --}}
            <aside id="drawer-nav"
                class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto lg:hidden transition-transform duration-500 translate-x-full bg-white w-80"
                tabindex="-1" aria-labelledby="drawer-right-label">

                <button type="button" data-drawer-hide="drawer-nav" aria-controls="drawer-nav"
                    class="text-gray-400 mt-2 mr-2 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-10 h-10 absolute top-3.5 end-3.5 inline-flex items-center justify-center">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>

                @auth
                    <a href="{{ route('profile.show') }}"
                        class="ms-3 mt-3 md:hidden relative inline-flex items-center overflow-hidden">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        @endif
                        <p class="px-2 font-semibold">{{ Str::limit(Auth::user()->name, 20) }}</p>
                    </a>
                @endauth

                <ul
                    class="flex flex-col font-semibold p-4 @guest{{ 'mt-12' }} @endguest @auth{{ 'mt-0' }} @endauth rounded-lg lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-white">

                    @auth
                        <!-- Account Management -->
                        <div class="block py-2 text-xs text-gray-400 mt-4">
                            {{ __('KELOLA AKUN') }}
                        </div>

                        <li>
                            <a href="{{ route('profile.show') }}"
                                class="block py-2 px-3 text-gray-900 hover:bg-gray-200 rounded duration-300"
                                aria-current="page">
                                PROFILE
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="block py-2 px-3 text-gray-900 hover:bg-gray-200 rounded duration-300"
                                aria-current="page">
                                DASHBOARD
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="{{ url('/admin') }}"
                                class="block py-2 px-3 text-gray-900 hover:bg-gray-200 rounded duration-300"
                                aria-current="page">
                                ADMIN
                            </a>
                        </li>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                        @endif

                        <div class="border-t border-gray-200"></div>

                        <div class="block py-2 text-xs text-gray-400 mt-4">
                            {{ __('MENU') }}
                        </div>
                    @endauth

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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
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
                                <a href="{{ url('/fastkonstruksi') }}"
                                    class="flex items-center border-y border-white w-full hover:bg-gray-100 py-2 pl-10 text-gray-900 transition duration-75">
                                    FASTKONSTRUKSI
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
                            class="block py-2 px-3 {{ request()->is('tentang-kami') ? 'text-danger-300' : 'text-gray-900 hover:bg-gray-200' }} rounded duration-300"
                            aria-current="page">
                            TENTANG KAMI
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/partner-client') }}"
                            class="block py-2 px-3 {{ request()->is('partner-client') ? 'text-danger-300' : 'text-gray-900 hover:bg-gray-200' }} rounded duration-300"
                            aria-current="page">
                            PARTNER & CLIENT
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/artikel') }}"
                            class="block py-2 px-3 {{ $isArtikelRoute ? 'text-danger-300' : 'text-gray-900 hover:bg-gray-200' }} rounded duration-300"
                            aria-current="page">
                            ARTIKEL
                        </a>
                    </li>

                    @auth<div class="border-t border-gray-200 mt-2"></div>@endauth
                    <div class="grid grid-cols-2 gap-2 mt-10">
                        @auth
                            @if (Auth::user()->role !== 'admin')
                                <li>
                                    <a href="{{ url('/hubungi-kami') }}"
                                        class="block py-2 px-1 bg-transparent text-sm border-2 border-danger-300 hover:bg-danger-300 text-danger-300 text-center hover:text-white transition ease-in rounded duration-300 "
                                        aria-current="page">
                                        HUBUNGI KAMI
                                    </a>
                                </li>
                            @endif

                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('LOGOUT') }}
                                </x-dropdown-link>
                            </form>
                        @endauth
                        @guest
                            <li>
                                <a href="{{ url('/hubungi-kami') }}"
                                    class="block py-2 px-1 bg-transparent text-sm border-2 border-danger-300 hover:bg-danger-300 text-danger-300 text-center hover:text-white transition ease-in rounded duration-300 "
                                    aria-current="page">
                                    HUBUNGI KAMI
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/login') }}"
                                    class="block py-2 px-3 text-sm border-2 border-danger-300 hover:border-danger-700 bg-danger-300 hover:bg-danger-700 text-center text-white transition ease-in rounded duration-300 "
                                    aria-current="page">
                                    LOGIN
                                </a>
                            </li>
                        @endguest
                    </div>
                    {{-- <div class="grid grid-cols-2 gap-4 mt-4">
                    <button type="button"
                        class="inline-flex mr-[4px] items-center font-semibold justify-center px-2 py-2 text-sm text-gray-900 rounded-lg cursor-pointer bg-gray-100 hover:bg-gray-100 ">
                        <img src="{{ asset('assets/lang/id.svg') }}" class="h-4 mr-1 border border-gray-900"
                            alt="INDONESIA">
                        ID
                    </button>

                    <button type="button"
                        class="inline-flex items-center font-semibold justify-center px-2 py-2 text-sm text-gray-900 rounded-lg cursor-pointer hover:bg-gray-100 ">
                        <img src="{{ asset('assets/lang/uk.svg') }}" class="h-4 mr-1" alt="ENGLAND">
                        EN
                    </button>
                </div> --}}

                </ul>
            </aside>

        </div>
    </div>
</nav>
