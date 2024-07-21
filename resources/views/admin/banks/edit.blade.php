<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Bank') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg">

                <form method="POST" action="{{ route('admin.package_banks.update', $packageBank) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="bank_name" :value="__('Bank Name')" />
                        <x-text-input id="bank_name" class="block w-full mt-1" type="text" name="bank_name" value="{{ $packageBank->bank_name }}" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('bank_name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="bank_account_name"  :value="__('Bank Account Name')" />
                        <x-text-input id="bank_account_name" class="block w-full mt-1" type="text" name="bank_account_name" value="{{ $packageBank->bank_account_name }}" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('bank_account_name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="bank_account_number" :value="__('Bank Account Number')" />
                        <x-text-input id="bank_account_number" class="block w-full mt-1" type="number" name="bank_account_number" value="{{ $packageBank->bank_account_number }}" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('bank_account_number')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="logo" :value="__('Logo')" />
                        <img src="{{ Storage::url($packageBank->logo) }}" alt="" class="rounded-2xl object-cover w-[90px] h-[90px]">
                        <x-text-input id="logo" class="block w-full mt-1" type="file" name="logo" autofocus autocomplete="logo" />
                        <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <button type="submit" class="px-6 py-4 font-bold text-white bg-[#3684BC] rounded-full">
                            Update Bank
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
