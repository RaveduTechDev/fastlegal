@extends('components.layout')

@section('content')
    <header class="max-w-screen-xl mx-auto pt-6 px-6 pb-2">
        <h1 class="text-3xl font-bold pt-[100px]">ARTIKEL KAMI</h1>
    </header>

    <main>
        <section class="flex flex-wrap max-w-screen-xl mx-auto pb-6 px-6 mb-10">
            <div id="post" class="w-full md:w-2/3 lg:w-3/4">
                @if (request('search') || request('category') || request('author'))
                    <h5 class="text-lg mb-6 inline-flex items-center">
                        @if (request('search'))
                            <svg class="w-4 h-4 text-bold" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        @elseif (request('category'))
                            <svg class="w-4 h-4 text-bold" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path
                                    d="M64 464c-10.6 0-20.5-5.3-26.5-14.1s-7.2-20-3.2-29.8l64-160C103.1 248 114.9 240 128 240l400 0c10.6 0 20.5 5.3 26.5 14.1s7.2 20 3.2 29.8l-64 160C488.9 456 477.1 464 464 464l-80 0L64 464zm320 16l80 0c19.6 0 37.3-11.9 44.6-30.2l64-160c5.9-14.8 4.1-31.5-4.8-44.7S543.9 224 528 224l-400 0c-19.6 0-37.3 11.9-44.6 30.2l-64 160c-1.3 3.2-2.2 6.5-2.8 9.8c-.4-2.6-.7-5.3-.7-8L16 96c0-26.5 21.5-48 48-48l117.5 0c12.7 0 24.9 5.1 33.9 14.1l26.5 26.5c15 15 35.4 23.4 56.6 23.4L416 112c26.5 0 48 21.5 48 48l0 32 16 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0z" />
                            </svg>
                        @elseif (request('author'))
                            <svg class="w-4 h-4 text-bold" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path
                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z" />
                            </svg>
                        @endif
                        <div class="ml-2">{!! $sub_title !!}</div>
                    </h5>
                @else
                    <p>{!! $sub_title !!}</p>
                @endif


                @forelse ($articles as $article)
                    <article class="flex items-start mb-4 py-2 mt-6">
                        <figure class="w-40 h-20 sm:w-full sm:h-auto md:w-1/3 overflow-hidden">
                            <a href="{{ url('/artikel/detail/' . $article->slug) }}">
                                @if ($article->getFirstMediaUrl() != null)
                                    <img src="{{ $article->getFirstMediaUrl() }}" alt="{{ $article->title }}"
                                        class="object-cover w-40 h-20  sm:h-48 sm:w-96 shadow-md">
                                @else
                                    <img src="{{ asset('assets/img/blank-image.jpg') }}" alt="{{ $article->title }}"
                                        class="object-cover w-40 h-20  sm:h-48 sm:w-96 shadow-md">
                                @endif
                            </a>
                        </figure>

                        <div class="w-full md:w-2/3 px-4">
                            <div class="mb-4">
                                <h3 class="text-lg sm:text-xl lg:text-2xl font-semibold">
                                    <a href="{{ url('/artikel/detail/' . $article->slug) }}" class="hover:text-danger-300">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                <div class="text-sm text-gray-500">
                                    <span class="mr-2 inline-flex items-center">
                                        <svg class="w-4 h-4 " fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                        </svg>
                                        <span class="ml-1">{{ $article->created_at->format('d M Y') }}</span>
                                    </span>
                                    <span class="mr-2 inline-flex items-center group">
                                        <svg class="w-4 h-4 group-hover:text-danger-300" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path
                                                d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z" />
                                        </svg>
                                        <a href="{{ url('/artikel?author=' . $article->user->username) }}"
                                            class="group-hover:text-danger-300 ml-1">
                                            {{ $article->user->name }}
                                        </a>
                                    </span>
                                    <span class="inline-flex items-center group">
                                        <svg class="w-4 h-4 group-hover:text-danger-300" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                            <path
                                                d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z" />
                                        </svg>
                                        <a class="group-hover:text-danger-300 ml-1"
                                            href="{{ url('/comment') }}">{{ 0 }}</a>
                                    </span>
                                </div>
                            </div>
                            <div class="hidden sm:block">
                                <p>
                                    {!! $article->contentDescription() !!}
                                </p>
                            </div>
                        </div>
                    </article>

                    <hr class="border-b border-gray-200 my-4 md:mr-10">
                @empty
                    <h3 class="text-2xl mt-4"><span class="text-danger-300">*</span> Artikel tidak ada yang ditampilkan</h3>
                    @if (request('search') || request('category') || request('author'))
                        <a class="text-danger-300 mt-4 hover:underline " href="{{ url('/artikel') }}">&LeftArrow; Kembali
                            ke
                            artikel</a>
                    @endif
                @endforelse
                <nav class="mt-8 lg:mr-4" aria-label="Article">
                    {{ $articles->onEachSide(1)->links('vendor.pagination.tailwind') }}
                </nav>
            </div>

            <aside class="w-full md:w-1/3 lg:w-1/4" x-data>
                <div class="mb-6">
                    @include('components.search-box')
                </div>

                <div class="mb-6">
                    <h4 class="text-lg font-semibold mb-4">
                        <a href="{{ url('/artikel') }}" class="hover:underline">Artikel Lainnya</a>
                    </h4>
                    <ul>
                        @foreach ($articleOther->shuffle() as $article)
                            <li class="mb-2">
                                <div class="flex items-start ">
                                    <a href="#" class="inline-block mr-3">
                                        <div class="w-20 h-20 bg-cover bg-center">
                                            @if ($article->getFirstMediaUrl() != null)
                                                <img src="{{ $article->getFirstMediaUrl('articles') }}"
                                                    alt="{{ $article->title }}">
                                            @else
                                                <img src="{{ asset('assets/img/blank-image.jpg') }}"
                                                    alt="{{ $article->title }}">
                                            @endif
                                        </div>
                                    </a>
                                    <div class="text-sm">
                                        <a href="{{ url('/artikel/detail/' . $article->slug) }}"
                                            class="text-gray-900 font-medium hover:text-danger-300 leading-none">
                                            {{ $article->title }}
                                        </a>
                                        <div class="text-xs md:text-sm text-gray-500">
                                            <span class="mr-2 inline-flex items-center">
                                                <svg class="w-3 h-3 " fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                                </svg>
                                                <span class="ml-1">{{ $article->created_at->format('j M Y') }}</span>
                                            </span>
                                            <span class="hidden items-center group lg:inline-flex">
                                                <svg class="w-3 h-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 640 512">
                                                    <path
                                                        d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z" />
                                                </svg>
                                                <a href="" class=ml-1">0</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </aside>
        </section>


        @include('components.hubungi-component')
    </main>
@endsection
