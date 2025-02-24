<x-page-layout>
    @include('layouts.navbar')

    <section class="bg-white pt-24">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Kontak Kami</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 sm:text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, amet?</p>
            <form action="#" class="space-y-8 pb-8 max-w-screen-lg mx-auto">
                <div>
                    <label for="name" class="block mb-2 text-lg font-medium text-gray-900">Nama Lengkap</label>
                    <input type="text" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-4" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-lg font-medium text-gray-900">Email</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-4" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-lg font-medium text-gray-900">Subjek</label>
                    <input type="text" id="subject" class="block p-4 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-lg font-medium text-gray-900">Pesan</label>
                    <textarea id="message" rows="6" class="block p-4 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500"></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-gray-50 rounded-lg bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Kirim Pesan</button>
            </form>

            <h2 class="my-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Sekretariat Hima Ilkom</h2>
            <p class="mb-8 font-light text-center text-gray-500 sm:text-xl">Gedung PKM FMIPA, Kampus Sekaran, Universitas Negeri Semarang, Gunungpati, Kota Semarang 50229</p>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d901.9517426296651!2d110.39381905943051!3d-7.051075932047729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708bdbb1512c33%3A0x2c62649d51c1add5!2sPKM%20FMIPA!5e1!3m2!1sid!2sid!4v1740302058414!5m2!1sid!2sid" class="w-full" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    
    @include('layouts.footer')
</x-page-layout>