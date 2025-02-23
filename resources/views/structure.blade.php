<x-page-layout>
    @include('layouts.navbar')

    <section class="bg-white pt-24">
        <div class="max-w-screen-xl flex justify-between gap-4 lg:gap-8 flex-row px-4 py-8 mx-auto">        
            <div class="flex flex-col items-center w-full rounded-lg md:flex-row bg-gray-50">
                <img class="object-cover w-auto rounded-t-lg h-auto md:w-40 md:rounded-none md:rounded-s-lg" src="img/pasfoto.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="text-base lg:text-2xl font-bold tracking-tight text-gray-700">Muhammad Zharfan Tanuwijaya</h5>
                    <p class="mb-2 text-sm lg:text-lg tracking-tight text-gray-500">Ketua Himpunan</p>
                    <p class="mb-3 font-normal text-sm lg:text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, iste.</p>
                    <div class="flex gap-2">
                        <a href="#">
                            <svg class="w-6 h-6 text-instagram-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg class="w-6 h-6 text-linkedin-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                            </svg>
                        </a>
                    </div>
                </div>   
            </div>
            <div class="flex flex-col items-center w-full rounded-lg md:flex-row bg-gray-50">
                <img class="object-cover w-auto rounded-t-lg h-auto md:w-40 md:rounded-none md:rounded-s-lg" src="img/pasfoto.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="text-md lg:text-2xl font-bold tracking-tight text-gray-700">Muhammad Naufal Baihaqi</h5>
                    <p class="mb-2 text-sm lg:text-lg tracking-tight text-gray-500">Wakil Ketua Himpunan</p>
                    <p class="mb-3 font-normal text-sm lg:text-base text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, aliquid?</p>
                    <div class="flex gap-2">
                        <a href="#">
                            <svg class="w-6 h-6 text-instagram-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg class="w-6 h-6 text-linkedin-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="mb-4 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px text-sm lg:text-base font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="ph-tab" data-tabs-target="#ph" type="button" role="tab" aria-controls="ph" aria-selected="false">Pengurus Harian</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="psdo-tab" data-tabs-target="#psdo" type="button" role="tab" aria-controls="psdo" aria-selected="false">Biro PSDO</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="ekokre-tab" data-tabs-target="#ekokre" type="button" role="tab" aria-controls="ekokre" aria-selected="false">Divisi Ekokre</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="internal-tab" data-tabs-target="#internal" type="button" role="tab" aria-controls="internal" aria-selected="false">Divisi Internal</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="eksternal-tab" data-tabs-target="#eksternal" type="button" role="tab" aria-controls="eksternal" aria-selected="false">Divisi Eksternal</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="sosmas-tab" data-tabs-target="#sosmas" type="button" role="tab" aria-controls="sosmas" aria-selected="false">Divisi Sosmas</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="kominfo-tab" data-tabs-target="#kominfo" type="button" role="tab" aria-controls="kominfo" aria-selected="false">Divisi Kominfo</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden" id="ph" role="tabpanel" aria-labelledby="ph-tab">
                    <div class="p-4 rounded-lg bg-gray-50">
                        <p class="text-sm lg:text-base text-gray-500">Pengurus harian adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aperiam similique laborum facere maxime itaque minus. Nam vero obcaecati consequuntur!</p>
                    </div>
                    <div class="px-4 py-8 rounded-lg mt-4 bg-gray-50">
                        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div class="text-center text-gray-500">
                                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                                <h3 class="mb-1 text-lg font-bold leading-tight text-gray-700">
                                    Muhammad Daniel Aminuddin
                                </h3>
                                <p>Sekretaris I</p>
                                <ul class="flex justify-center mt-2 space-x-4">
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-instagram-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-linkedin-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="psdo" role="tabpanel" aria-labelledby="psdo-tab">
                    <div class="p-4 rounded-lg bg-gray-50">
                        <p class="text-sm lg:text-base text-gray-500">Biro PSDO adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, praesentium dolore. Excepturi non repudiandae a sequi dolores eaque vitae molestias!</p>
                    </div>
                    <div class="px-4 py-8 rounded-lg mt-4 bg-gray-50">
                        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div class="text-center text-gray-500">
                                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                                <h3 class="mb-1 text-lg font-bold leading-tight text-gray-700">
                                    Muhammad Raissa Akhdyan
                                </h3>
                                <p>Kepala Biro</p>
                                <ul class="flex justify-center mt-2 space-x-4">
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-instagram-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-linkedin-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="ekokre" role="tabpanel" aria-labelledby="ekokre-tab">
                    <div class="p-4 rounded-lg bg-gray-50">
                        <p class="text-sm lg:text-base text-gray-500">Divisi Ekokre adalah Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis excepturi ullam quod incidunt ut fuga dignissimos possimus. Ex, quibusdam molestiae?</p>
                    </div>
                    <div class="px-4 py-8 rounded-lg mt-4 bg-gray-50">
                        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div class="text-center text-gray-500">
                                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                                <h3 class="mb-1 text-lg font-bold leading-tight text-gray-700">
                                    Muhammad Fiqi Firmansyah
                                </h3>
                                <p>Kepala Divisi</p>
                                <ul class="flex justify-center mt-2 space-x-4">
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-instagram-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-linkedin-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="internal" role="tabpanel" aria-labelledby="internal-tab">
                    <div class="p-4 rounded-lg bg-gray-50">
                        <p class="text-sm lg:text-base text-gray-500">Divisi Internal adalah Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque perferendis cumque provident quidem aliquid soluta dignissimos atque obcaecati nihil ab?</p>
                    </div>
                    <div class="px-4 py-8 rounded-lg mt-4 bg-gray-50">
                        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div class="text-center text-gray-500">
                                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                                <h3 class="mb-1 text-lg font-bold leading-tight text-gray-700">
                                    Zoar Lewi Panjaitan
                                </h3>
                                <p>Kepala Divisi</p>
                                <ul class="flex justify-center mt-2 space-x-4">
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-instagram-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-linkedin-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="eksternal" role="tabpanel" aria-labelledby="eksternal-tab">
                    <div class="p-4 rounded-lg bg-gray-50">
                        <p class="text-sm lg:text-base text-gray-500">Divisi Eksternal adalah Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet quas quis fugit distinctio, numquam porro nam fugiat nostrum corrupti fuga?</p>
                    </div>
                    <div class="px-4 py-8 rounded-lg mt-4 bg-gray-50">
                        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div class="text-center text-gray-500">
                                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                                <h3 class="mb-1 text-lg font-bold leading-tight text-gray-700">
                                    Cahya Pramitha
                                </h3>
                                <p>Kepala Divisi</p>
                                <ul class="flex justify-center mt-2 space-x-4">
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-instagram-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-linkedin-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="sosmas" role="tabpanel" aria-labelledby="sosmas-tab">
                    <div class="p-4 rounded-lg bg-gray-50">
                        <p class="text-sm lg:text-base text-gray-500">Divisi Sosmas adalah Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam nostrum praesentium assumenda, doloremque iure atque voluptatum quia ad quam culpa.</p>
                    </div>
                    <div class="px-4 py-8 rounded-lg mt-4 bg-gray-50">
                        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div class="text-center text-gray-500">
                                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                                <h3 class="mb-1 text-lg font-bold leading-tight text-gray-700">
                                    Iqtada Nurol Fikri
                                </h3>
                                <p>Kepala Divisi</p>
                                <ul class="flex justify-center mt-2 space-x-4">
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-instagram-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-linkedin-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="kominfo" role="tabpanel" aria-labelledby="kominfo-tab">
                    <div class="p-4 rounded-lg bg-gray-50">
                        <p class="text-sm lg:text-base text-gray-500">Divisi Kominfo adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quia tempore earum! Suscipit deserunt velit cupiditate voluptatum, saepe labore dignissimos.</p>
                    </div>
                    <div class="px-4 py-8 rounded-lg mt-4 bg-gray-50">
                        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div class="text-center text-gray-500">
                                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                                <h3 class="mb-1 text-lg font-bold leading-tight text-gray-700">
                                    Bimo Saputra Mulyadi
                                </h3>
                                <p>Kepala Divisi</p>
                                <ul class="flex justify-center mt-2 space-x-4">
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-instagram-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="w-6 h-6 text-linkedin-900 hover:text-secondary-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</x-page-layout>