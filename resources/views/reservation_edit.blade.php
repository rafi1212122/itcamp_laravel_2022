@extends('layouts.app')

@section('header')
<div class="bg-orange-100">
    <div class="flex flex-col container justify-center items-center h-[calc(100vh_-_3.5rem)]">
        <form class="w-full" method="POST" action="{{ route('reservation.update', ['reservation' => $reservation->id]) }}">
            @csrf
            @method('put')

            <!-- Email Address -->
            <div>
                <x-label for="tel" :value="__('Telepon')" />
                <x-input value='{{ $reservation->tel }}' id="tel" class="block mt-1 w-full" type="tel" name="tel" required autofocus />
                <x-label for="tel" class="text-red-400" :value="$errors->first('tel')" />
            </div>
            
            <div class="mt-4">
                <x-label for="alamat" :value="__('Alamat')" />
                <textarea name="alamat" id="alamat" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ $reservation->alamat }}</textarea>
            </div>

            <div class="flex flex-col gap-3 mt-4">
                <span>Acara yang didatangi:</span>
                <label for="akad" class="inline-flex items-center">
                    <input {{ $reservation->akad?'checked':'' }} id="akad" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="akad">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Akad Nikah') }}</span>
                </label>
                <label for="resepsi" class="inline-flex items-center">
                    <input {{ $reservation->resepsi?'checked':'' }} id="resepsi" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="resepsi">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Resepsi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
@endsection