@extends('layouts.app')

@section('content')

<section class="max-w-5xl mx-auto px-6 py-20">

    <img src="{{ asset('assets/concert.png') }}" class="rounded-3xl mb-8 w-full">

    <h1 class="text-4xl font-bold mb-4">Jazz Night 2024</h1>

    <p class="text-gray-500 mb-6">
        Nikmati malam penuh musik jazz dengan suasana yang elegan dan santai.
    </p>

    <div class="mb-6">
        <p><b>Tanggal:</b> 16 November 2024</p>
        <p><b>Waktu:</b> 19:30 WIB</p>
        <p><b>Lokasi:</b> Auditorium Amikom</p>
    </div>

    <div class="flex justify-between items-center">
        <span class="text-2xl font-bold text-indigo-600">Rp 150.000</span>

        <a href="{{ url('/checkout') }}"
           class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold">
            Beli Tiket
        </a>
    </div>

</section>

@endsection