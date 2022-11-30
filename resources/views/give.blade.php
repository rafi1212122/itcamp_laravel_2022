@extends('layouts.app')

@section('header')
<div class="bg-orange-100">
    <div class="flex flex-col container justify-center items-center h-[calc(100vh_-_3.5rem)]">
        <div class="accordion w-full" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <b>Kirim Hadiah Fisik</b>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show visible" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Untuk mengirim hadiah fisik bisa dikirim ke alamat: <b>Jl. M. Bakri, Cibodas, Kec. Jonggol, Kabupaten Bogor, Jawa Barat 16830</b>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <b>Kirim Hadiah Digital</b>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse visible" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Untuk mengirim hadiah digital bisa dikirimkan dibawah ini: </p>
                  <form action="{{ route('give.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div>
                        <x-label for="file" :value="__('File')" />
                        <x-input id="file" class="block mt-1 w-full focus:outline-none file:mr-4 file:py-2 file:px-4 file:border-0 border border-gray-300" type="file" name="file" />
                        <x-label for="file" class="text-red-400" :value="$errors->first('file')" />
                    </div>
                    
                    <div class="mt-4">
                        <x-label for="pesan" :value="__('Pesan')" />
                        <textarea name="pesan" id="pesan" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                      <x-button class="ml-3">
                          {{ __('Kirim') }}
                      </x-button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection