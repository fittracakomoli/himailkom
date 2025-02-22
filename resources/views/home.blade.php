<x-page-layout>
    @include('layouts.navbar')

    <section style="background-image: url('img/IMG_5460.jpg')" class="bg-cover bg-center pt-24 bg-no-repeat bg-gray-400 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Bergerak bersama, Tumbuh lebih baik</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Kenal lebih dekat
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-secondary-900 focus:ring-4 focus:ring-gray-400">
                    Jelajahi event
                </a>  
            </div>
        </div>
    </section>

    <section class="bg-white">
    <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
        <h2 class="mb-8 mx-auto w-fit px-4 py-2 lg:mb-16 text-2xl font-bold bg-secondary-900 leading-tight text-center text-gray-800 md:text-3xl">Kolaborasi aktif bersama</h2>
        <div class="flex gap-8 flex-wrap justify-center items-center text-gray-500 sm:justify-between">
            <a href="#" class="flex justify-center items-center">
                <img class="h-24 w-auto" src="img/I-SECRET.png" alt="I-SECRET">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img class="h-24 w-auto" src="img/AL-HUSNA.png" alt="AL-HUSNA">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img class="h-24" src="img/SCREENSHOT.png" alt="SCREENSHOT">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img class="h-24 w-auto" src="img/bso-kwu.png" alt="BSO-KWU">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img class="h-24 w-auto" src="img/PALATIKOM.png" alt="PALATIKOM">
            </a>
        </div>
    </div>
</section>


    @include('layouts.footer')
</x-page-layout>