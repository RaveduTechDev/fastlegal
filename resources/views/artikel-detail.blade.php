@extends('components.layout')

@section('content')
    <main>
        <section class="flex flex-wrap max-w-screen-xl mx-auto pt-[100px] pb-6 px-6 mb-10 antialiased">
            <div class="w-full md:w-2/3 lg:w-3/4">
                <div class="pt-8 pb-16 lg:pt-16 lg:pb-24">
                    <article class="mx-auto md:px-6">
                        <h1 class=" text-2xl md:text-4xl font-bold mb-4">{{ $article->title }}</h1>

                        <div class="block xs:flex xs:items-center mb-8 text-xs md:text-base">
                            <a href="{{ url('/artikel?author=' . $article->user->username) }}"
                                class="inline-flex items-center mr-4 hover:text-danger-300">
                                @if ($article->user->profile_photo_path == null || $article->user->profile_photo_path == '')
                                    <img src="{{ $article->user->defaultProfilePhotoUrl() }}" alt="{{ $article->user->name }}"
                                        class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover mr-2">
                                @else
                                    <img src="{{ asset('storage/' . $article->user->profile_photo_path) }}"
                                        alt="{{ $article->user->name }}"
                                        class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover mr-2">
                                @endif
                                <span> {{ $article->user->name }}</span>
                            </a>

                            <span class="mr-4 inline-flex items-center">
                                <svg class="w-4 h-4 " fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                </svg>
                                <span class="ml-1">{{ $article->created_at->format('j M Y') }}</span>
                            </span>
                            <a href="{{ url('/artikel?category=' . $article->category->slug) }}"
                                class="mr-4 inline-flex items-center hover:text-danger-300">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M64 464c-10.6 0-20.5-5.3-26.5-14.1s-7.2-20-3.2-29.8l64-160C103.1 248 114.9 240 128 240l400 0c10.6 0 20.5 5.3 26.5 14.1s7.2 20 3.2 29.8l-64 160C488.9 456 477.1 464 464 464l-80 0L64 464zm320 16l80 0c19.6 0 37.3-11.9 44.6-30.2l64-160c5.9-14.8 4.1-31.5-4.8-44.7S543.9 224 528 224l-400 0c-19.6 0-37.3 11.9-44.6 30.2l-64 160c-1.3 3.2-2.2 6.5-2.8 9.8c-.4-2.6-.7-5.3-.7-8L16 96c0-26.5 21.5-48 48-48l117.5 0c12.7 0 24.9 5.1 33.9 14.1l26.5 26.5c15 15 35.4 23.4 56.6 23.4L416 112c26.5 0 48 21.5 48 48l0 32 16 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0z" />
                                </svg>
                                <span> {{ $article->category->name }}</span>
                            </a>
                            <span class="hidden items-center group lg:inline-flex">
                                <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 512">
                                    <path
                                        d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z" />
                                </svg>
                                <a href="" class="ml-1">0</a>
                            </span>
                        </div>

                        <figure class=" rounded-lg overflow-hidden">
                            @if ($article->getFirstMediaUrl() != null)
                                <img src="{{ $article->getFirstMediaUrl() }}" alt="{{ $article->title }}" class="w-full">
                            @else
                                <img src="{{ asset('assets/img/blank-image.jpg') }}" alt="{{ $article->title }}">
                            @endif
                            {{-- <figcaption>Digital art by Anonymous</figcaption> --}}
                        </figure>

                        <p class="mt-6">{{ $article->description }}</p>

                        @if ($article->content === null || $article->content === '')
                            <section class="my-10 prose content-article"></section>
                        @else
                            <section class="my-10 prose content-article">{!! tiptap_converter()->asHtml($article->content, maxDepth: 3) !!}</section>
                        @endif

                        <div class="">
                            {{-- {{ $paginationDetailArticle->links('vendor.pagination.tailwind') }} --}}
                        </div>


                        {{-- komentar --}}
                        {{-- <section class="comment mt-10">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">
                                    Discussion (20)
                                </h2>
                            </div>
                            <form class="mb-6" action="{{ url('/login') }}">
                                <div
                                    class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 focus:border-2">
                                    <label for="comment" class="sr-only pb-10 text-black">Your comment</label>
                                    <textarea id="comment" rows="6"
                                        class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                        placeholder="Tulis Komentar..." required></textarea>
                                </div>
                                <button type="submit"
                                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-danger-300 rounded-lg focus:ring-4 focus:ring-danger-300 hover:bg-danger-500">
                                    Post comment
                                </button>
                            </form>

                            <article
                                class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <footer class="flex justify-between items-center mb-2">
                                    <div class="flex items-center">
                                        <p
                                            class="inline-flex items-center mr-3 font-semibold text-sm text-gray-900 dark:text-white">
                                            <img class="mr-2 w-6 h-6 rounded-full"
                                                src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                alt="Helene Engels">Helene Engels
                                        </p>
                                        <p class="text-sm text-gray-600 ">
                                            <time pubdate datetime="2022-06-23" title="June 23rd, 2022">Jun. 23,
                                                2022</time>
                                        </p>
                                    </div>
                                    <button id="dropdownComment4Button" data-dropdown-toggle="dropdownComment4"
                                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50  dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                        type="button">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 16 3">
                                            <path
                                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownComment4"
                                        class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdownMenuIconHorizontalButton">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                            </li>
                                        </ul>
                                    </div>
                                </footer>
                                <p>Thanks for sharing this. I do came from the Backend development and explored some of
                                    the
                                    tools to design my Side Projects.</p>
                                <div class="flex items-center mt-4 space-x-4">
                                    <button type="button"
                                        class="flex items-center font-medium text-sm text-gray-500 hover:underline ">
                                        <svg class="mr-1.5 w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 18">
                                            <path
                                                d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                        </svg>
                                        Reply
                                    </button>
                                </div>
                            </article>
                        </section> --}}
                    </article>
                </div>
            </div>

            <aside class="w-full md:w-1/3 lg:w-1/4">
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
                                                <img src="{{ $article->getFirstMediaUrl() }}" alt="{{ $article->title }}">
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
