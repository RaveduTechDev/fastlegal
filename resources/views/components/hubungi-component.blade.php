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
            <form class="whatsapp-form" method="POST" action="">
                @csrf

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
            <iframe class="w-full h-full rounded"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.893297075334!2d107.1777285!3d-6.277757200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698508851170ab%3A0x605f75f88f189094!2sGreen%20Market%20Jababeka!5e0!3m2!1sid!2sid!4v1722965656266!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
