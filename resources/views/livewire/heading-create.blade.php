<div>
    @if (session('success'))
        <div class="fixed top-[5rem] right-4 z-[999999] " wire:key="{{ rand() }}" x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 7000)">
            <div x-show="show" id="alert-2"
                class="flex items-center p-4 mb-4 text-green-800 border border-green-500 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div class="ml-2">
                    {{ session('success') }}
                </div>
                <button type="button" @click="show = false"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    @if (session()->has('error'))
        {{-- @dd(session()->has('error')) --}}
        <div class="fixed top-[5rem] right-4 z-[999999] " wire:key="{{ rand() }}" x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 7000)">
            <div x-show="show" id="alert-2"
                class="flex items-center p-4 mb-4 text-red-800 border border-red-500 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div class="ml-2">
                    @foreach (session('error') as $error)
                        <div class="text-sm font-medium ms-3">
                            - {{ $error }}
                        </div>
                    @endforeach

                    {{ session()->forget('errors') }}



                </div>
                <button type="button" @click="show = false"
                    class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <form class="w-full" action="{{ route('admin.items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid mb-5 lg:grid-cols-2 lg:gap-6">
            <!-- Start Name -->
            <div class="col-span-2">
                <x-input-label for="name" :value="__('messages.title')" /><span class="text-red-500">*</span>
                <x-text-input id="name" class="block w-full mt-1" type="text" name="name" wire:model='name'
                    required autofocus placeholder="Title" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            {{-- <div>
                <x-input-label for="order_index" :value="__('messages.orderIndex')" />
                <x-text-input id="order_index" class="block w-full mt-1" type="number" name="order_index" wire:model='order_index'
                    required autofocus placeholder="Order Index" />
                <x-input-error :messages="$errors->get('order_index')" class="mt-2" />
            </div> --}}
            <!-- End Name -->
        </div>

        <div class="grid lg:grid-cols-1 lg:gap-6">
            {{-- Start position Select --}}
            <div class="relative w-full mb-5 group">
                <x-input-label for="position" :value="__('messages.position')" />
                <div class="flex flex-1 gap-1 mt-1">
                    <div class="flex justify-start flex-1">
                        <x-select-option wire:model.live='position' id="position"
                            name="position" class="uppercase position-select">
                            <option wire:key='position' value="">Select Position...</option>
                            @forelse ($positions as $position)
                                <option wire:key='{{ $position->name }}' value="{{ $position->name }}">
                                    {{ $position->name }}
                                </option>
                            @empty
                                <option wire:key='noPosition' value=""> --No position--</option>
                            @endforelse
                        </x-select-option>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('position')" class="mt-2" />
            </div>
            {{-- End position Select --}}
        </div>

        <div>
            <x-input-label for="short_description" :value="__('messages.shortDescription')" />
            <textarea id="short_description" class="block w-full p-2 mt-1 mb-4 border rounded-lg bg-gray-50" name="short_description" wire:model='short_description'> {{ $short_description }}</textarea>
            <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
        </div>
        <div>
            <x-outline-button wire:ignore href="{{ URL::previous() }}">
                {{__('messages.goBack')}}
            </x-outline-button>
            <button wire:loading.class="cursor-not-allowed" wire:click.prevent="save" wire:target="save, image, file" wire:loading.attr="disabled"
                class = 'text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>
                {{__('messages.submit')}}
            </button>
            <span wire:target="save" wire:loading>
                <img class="inline w-6 h-6 text-white me-2 animate-spin"
                    src="{{ asset('assets/images/reload.png') }}" alt="reload-icon">
                Saving
            </span>
            <span wire:target="file,image"  wire:loading class="dark:text-white">
                <img class="inline w-6 h-6 text-white me-2 animate-spin"
                    src="{{ asset('assets/images/reload.png') }}" alt="reload-icon">
                On Uploading File...
            </span>
        </div>
    </form>

</div>

@script
    <script>
        function initSelect2() {
            $(document).ready(function() {
                $('.position-select').select2();
                $('.position-select').on('change', function(event) {
                    let data = $(this).val();
                    @this.set('position', data);
                });
            });
        }
        initSelect2();

        $(document).ready(function() {
            document.addEventListener('livewire:updated', event => {
                console.log('updated'); // Logs 'Livewire component updated' to browser console
                initSelect2();
                initFlowbite();
            });
        });


    </script>
@endscript
