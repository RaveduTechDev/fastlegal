<section class="max-w-screen-xl mx-auto p-6 mt-8 md:mt-20 mb-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h4 class="mb-4 text-2xl md:text-3xl font-bold text-center text-gray-900">HUBUNGI KAMI</h4>
            <p class="text-center mb-8 text-gray-700">
                Jika Anda ingin menyampaikan pertanyaan tentang perizinan dan pembuatan Perusahaan, saran
                atau komplain, jangan ragu untuk menghubungi kami. Kami akan sangat senang melayani
                permintaan Anda sesegera mungkin.
                <br>
                <span class="text-sm text-gray-500">*syarat dan ketentuan berlaku</span>
            </p>
            <form class="whatsapp-form">
                <div class="mb-4">
                    <input
                        class="block w-full px-4 py-2 border-2 focus:outline-0 focus:outline-transparent focus:ring-0  border-gray-300 rounded focus:outline-none focus:border-danger-300"
                        id="wa_name" name="name" type="text" placeholder="Nama Lengkap *" required>
                </div>
                <div class="mb-4">
                    <input
                        class="block w-full px-4 py-2 border-2 focus:outline-0 focus:outline-transparent focus:ring-0  border-gray-300 rounded focus:outline-none focus:border-danger-300"
                        id="wa_email" name="email" type="email" placeholder="Alamat Email *" required>
                </div>
                <div class="mb-4">
                    <input
                        class="block w-full px-4 py-2 border-2 focus:outline-0 focus:outline-transparent focus:ring-0  border-gray-300 rounded focus:outline-none focus:border-danger-300"
                        id="wa_number" name="phone" type="text" placeholder="Nomor Telepon / Whatsapp *" required>
                </div>
                <div class="mb-4">
                    <input
                        class="block w-full px-4 py-2 border-2 focus:outline-0 focus:outline-transparent focus:ring-0  border-gray-300 rounded focus:outline-none focus:border-danger-300"
                        id="wa_usaha" name="business" type="text" placeholder="Bidang Usaha">
                </div>
                <div class="mb-4">
                    <textarea
                        class="block w-full px-4 py-2 border-2 focus:outline-0 focus:outline-transparent focus:ring-0  border-gray-300 rounded focus:outline-none focus:border-danger-300"
                        id="wa_textarea" name="message" rows="4" placeholder="Message" maxlength="5000"></textarea>
                </div>
                <button class="w-full py-2 bg-danger-300 text-white rounded transition hover:bg-danger-700"
                    type="submit">Kirim</button>
            </form>
        </div>

        <div class="w-full h-full flex items-center border-2 rounded border-gray-400">
            {{-- <iframe class="w-full h-full rounded"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.718212279407!2d107.14481847732831!3d-6.300708927414482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699b27a5cbb513%3A0xd134f97daf174010!2sRuko%20Metro%20Boulevard%2C%20Jl.%20Niaga%20Raya%2C%20Pasirsari%2C%20Cikarang%20Sel.%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat%2017530!5e0!3m2!1sen!2sid!4v1720444689685!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="820" height="560" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Jalan+Niaga+Raya+Ruko+Metro+Boulevard+No.+12+B+Jababeka+2+Desa+Pasirsari+Kecamatan+Cikarang+Selatan%2C+Bekasi+%E2%80%93+17530&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://www.analarmclock.com"></a><br><a href="https://www.onclock.net"></a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 560px;
                            width: 820px;
                        }
                    </style><a href="https://www.ongooglemaps.com">google map net</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 560px;
                            width: 820px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
</section>
