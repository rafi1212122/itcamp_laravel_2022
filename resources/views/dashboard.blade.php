@extends('layouts.app')

@section('header')
<div class="bg-orange-100">
    <div style="font-family: 'Libre Baskerville', serif;" class="flex flex-col container justify-center items-center h-[calc(100vh_-_3.5rem)]">
        <h2 style="font-size: 12vh;z-index: 10">Kevin</h2>
        <h1 style="font-size: 18vh;transform: translateY(-9vh);color: rgba(137, 106, 33, 0.5)" class="h-0">&</h1>
        <h2 style="font-size: 12vh;z-index: 10">Julie</h2>

        <a href="{{ route('reservation') }}" style="background:rgba(137, 106, 33, 0.5);padding:1rem;margin-top:1rem;color:white;font-family:sans-serif;border-radius:0.25rem;text-decoration:none">Make A Reservation</a>
    </div>
</div>
@endsection

@section('content')
@endsection
