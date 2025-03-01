<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengelolaan Organisasi') }}
        </h2>
    </x-slot>

    <div class="py-12 pt-48">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900"> 
                    <form action="{{ route('organization.update') }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                            <div class="sm:col-span-2">
                                <x-input-label for="nama" :value="__('Nama Organisasi')" />
                                <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" :value="old('nama', $organization->nama)" required autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                            </div>
                            <div class="w-full">
                                <x-input-label for="kabinet" :value="__('Nama Kabinet')" />
                                <x-text-input id="kabinet" name="kabinet" type="text" class="mt-1 block w-full" :value="old('kabinet', $organization->kabinet)" required autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('kabinet')" />
                            </div>
                            <div class="w-full">
                                <x-input-label for="periode" :value="__('Periode')" />
                                <x-text-input id="periode" name="periode" type="text" class="mt-1 block w-full" :value="old('periode', $organization->periode)" required autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('periode')" />
                            </div>
                            <div class="sm:col-span-2">
                                <x-input-label for="slogan" :value="__('Slogan')" />
                                <x-text-input id="slogan" name="slogan" type="text" class="mt-1 block w-full" :value="old('slogan', $organization->slogan)" required autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('slogan')" />
                            </div>
                            <div class="sm:col-span-2">
                                <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                                <x-text-input id="deskripsi" name="deskripsi" type="text" class="mt-1 block w-full" :value="old('deskripsi', $organization->deskripsi)" required autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
                            </div>
                            <div class="sm:col-span-2">
                                <x-input-label for="sambutan" :value="__('Sambutan')" />
                                <x-text-input id="sambutan" name="sambutan" type="text" class="mt-1 block w-full" :value="old('sambutan', $organization->sambutan)" required autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('sambutan')" />
                            </div>
                            <div class="sm:col-span-2">
                                <x-input-label for="pendamping" :value="__('Pendamping Himpunan')" />
                                <x-text-input id="pendamping" name="pendamping" type="text" class="mt-1 block w-full" :value="old('pendamping', $organization->pendamping)" required autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('pendamping')" />
                            </div>
                            <div class="sm:col-span-2">
                                <x-input-label for="visi" :value="__('Visi Himpunan')" />
                                <x-text-input id="visi" name="visi" type="text" class="mt-1 block w-full" :value="old('visi', $organization->visi)" required autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('visi')" />
                            </div>
                            <div class="sm:col-span-2">
                                <x-input-label for="misi" :value="__('Misi Himpunan')" />
                                <x-text-input id="misi" name="misi" type="text" class="mt-1 block w-full" :value="old('misi', $organization->misi)" required autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('misi')" />
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <x-primary-button>{{ __('Update') }}</x-primary-button>

                            @if (session('status') === 'organization-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
