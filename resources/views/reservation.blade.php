@php
use App\Models\Reservation;
$reservation = Reservation::all();
@endphp

@extends('layouts.app')

@section('header')
<div class="bg-orange-100">
    <div class="flex flex-col container justify-center items-center h-[calc(100vh_-_3.5rem)]">
        <form class="w-full" method="POST" action="{{ route('reservation.store') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="tel" :value="__('Telepon')" />
                <x-input id="tel" class="block mt-1 w-full" type="tel" name="tel" required autofocus />
                <x-label for="tel" class="text-red-400" :value="$errors->first('tel')" />
            </div>
            
            <div class="mt-4">
                <x-label for="alamat" :value="__('Alamat')" />
                <textarea name="alamat" id="alamat" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
            </div>

            <div class="flex flex-col gap-3 mt-4">
                <span>Acara yang didatangi:</span>
                <label for="akad" class="inline-flex items-center">
                    <input id="akad" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="akad">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Akad Nikah') }}</span>
                </label>
                <label for="resepsi" class="inline-flex items-center">
                    <input id="resepsi" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="resepsi">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Resepsi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Kirim') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('content')
<div style="background: rgba(137, 106, 33, 0.5)">
    <div class="flex flex-col container justify-center items-center h-[calc(100vh_-_3.5rem)]">
        <div class="w-full bg-white shadow-md rounded-lg px-3 max-h-[calc(100vh_-_5rem)] overflow-x-scroll">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Acara</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservation as $index=>$item)
                    <tr>
                        <th scope="row">{{ $index+1 }}</th>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->tel }}</td>
                        <td class="max-w-[40vw] text-truncate">{{ $item->alamat }}</td>
                        <td class="min-w-[7rem]">
                            @if ($item->akad) <li>Akad</li> @endif
                            @if ($item->resepsi) <li>Resepsi</li> @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection