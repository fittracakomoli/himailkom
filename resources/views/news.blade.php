<x-page-layout>
    @include('layouts.navbar')

    <section class="bg-white pt-24">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-xl text-center mb-8 border-b border-gray-200">
                <h2 class="mb-2 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-800">Jelajahi Berita Terkini</h2>
                <p class="font-light text-gray-500 sm:text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, molestias!</p>
                
                <form class="max-w-screen-lg mx-auto py-12">
                    <div class="flex">
                        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">
                            All categories 
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdown-button">
                                <li>
                                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Mockups</button>
                                </li>
                                <li>
                                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Templates</button>
                                </li>
                                <li>
                                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Design</button>
                                </li>
                                <li>
                                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Logos</button>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full flex">
                            <input type="search" id="search-dropdown" class="p-2 lg:p-4 w-full text-sm text-gray-900 bg-gray-50 border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari berita terkini . . ." required />
                            <button type="submit" class="p-2 lg:p-4 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div> 

            <div class="grid gap-8 lg:grid-cols-2">
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                            Informasi
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><a href="#">Website Hima Ilkom UNNES Kini Hadir Untuk Memberikan Informasi</a></h2>
                    <p class="mb-5 font-light text-gray-500">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full" src="img/hima-ilkom.png" alt="Jese Leos avatar" />
                            <span class="font-mediume">
                                Hima Ilkom UNNES
                            </span>
                        </div>
                        <a href="#" class="inline-flex items-center font-medium text-primary-600 hover:underline">
                            Lebih banyak
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </article>            
            </div>  
        </div>
    </section>

    @include('layouts.footer')
</x-page-layout>