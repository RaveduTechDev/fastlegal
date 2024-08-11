@extends('components.layout')

@section('content')
    <header>
        <section class="relative bg-hero3 bg-fixed flex s-center pt-[120px] pb-[40px]">
            <div class="overlay absolute inset-0"></div>
            <div class="relative grid grid-cols-1 lg:grid-cols-2 max-w-screen-xl mx-auto p-6 text-white">
                <div>
                    <h1 class="text-2xl md:text-4xl font-bold mb-8 font-jakartaEuy">
                        LAYANAN LAINNYA
                    </h1>
                    <p class="text-base md:text-lg mb-16">
                        Layanan lainnya yang sering dibutuhkan untuk kebutuhan bisnis. Kami siap membantu dalam
                        proses pengurusan
                    </p>
                </div>
            </div>
        </section>
    </header>

    <main>
        <section class="relative max-w-screen-xl -mt-24 mx-auto p-6">
            <div class="bg-white shadow-custom2 rounded-lg p-2 xs:p-6">
                <h2 class="text-xl md:text-2xl font-semibold font-jakartaEuy mb-4">Layanan Lainnya</h2>
                <table class="divide-y divide-gray-200 min-w-full">
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="border-y ">
                            <td class="py-2 text-xs xs:text-base">PIRT (Pangan Industri Rumah Tangga)</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>

                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">PKRT (Perbekalan Kesehatan Rumah Tangga)
                            </td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>

                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">Pendaftaran Merek HKI</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">Perpanjangan Merek HKI</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">BPOM</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">SLHS (Sertifikat Laik Higiene Sehat)
                            </td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">Sertifikasi ISO (The International
                                Organization for Standardization)</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">Sertifikat TKDN (Tingkat Komponen Dalam
                                Negeri)</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">SLO (SERTIFIKAT LAIK OPERASI)</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">Izin TDPSE (Tanda Daftar
                                Penyelenggaraan Sistem Elektronik)</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">PBG (Persetujuan Bangunan Gedung)</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">SLF (Sertifikat Laik Fungsi)</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">Izin Lingkungan (UKL – UPL, RKL – RPL,
                                AMDAL)</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">Izin Logistik</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">Izin Outsourching</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">Izin Klinik</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="py-2 text-xs xs:text-base">VISA dan KITAS</td>
                            <td class="py-2 whitespace-nowrap text-right">
                                <a href="{{ url('https://api.whatsapp.com/send?phone=6282225288269&text=Halo,%20saya%20ingin%20bertanya%20mengenai%20layanan%20FASTLEGAL') }}"
                                    class="inline-flex items-center px-2 xs:px-4 py-2 border border-transparent transition text-xs md:text-sm font-medium rounded-md text-white bg-danger-300 hover:bg-danger-700"
                                    target="_blank">
                                    <svg class="w-6 h-6text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                    </svg> Pesan Sekarang
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>

        @include('components.hubungi-component')
    </main>
@endsection
