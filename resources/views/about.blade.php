<x-page-layout>
    @include('layouts.navbar')

    <section class="bg-white pt-24">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <figure class="max-w-screen-xl mx-auto">
                <svg class="h-12 mx-auto mb-3 text-gray-400" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                </svg> 
                <blockquote>
                    <p class="text-lg lg:text-2xl font-medium text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, quis molestiae. Vero quia autem amet illo dignissimos, cupiditate temporibus quos exercitationem atque doloremque sint odio sapiente laboriosam ducimus beatae minus.</p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3">
                    <div class="flex items-center divide-x-2 divide-gray-500">
                        <div class="pr-3 text-xs lg:text-lg font-medium text-gray-900">Devi Ajeng Efrilianda, S.Kom., M.Kom.</div>
                        <div class="pl-3 text-xs lg:text-lg font-light text-gray-500">Pendamping Hima Ilkom 2025</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">Visi</h2>
                <p class="mb-8 font-light sm:text-xl text-gray-400">Mewujudkan Himpunan Mahasiswa Ilmu Komputer UNNES sebagai ruang kolaborasi aktif yang mendukung pengembangan potensi dan prestasi mahasiswa melalui sinergi, inovasi, dan semangat kebersamaan</p>
            </div> 
            <div class="mx-auto max-w-screen-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">Misi</h2>
                <p class="mb-8 font-light sm:text-xl text-gray-400">Mewujudkan Himpunan Mahasiswa Ilmu Komputer UNNES sebagai ruang kolaborasi aktif yang mendukung pengembangan potensi dan prestasi mahasiswa melalui sinergi, inovasi, dan semangat kebersamaan</p>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</x-page-layout>