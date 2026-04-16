@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center gap-12">

    <div class="flex-1 space-y-8">
        <span class="inline-block px-4 py-1.5 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-wider">
            #1 Event Platform
        </span>

        <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
            Temukan & Pesan <span class="text-indigo-600">Tiket Event</span> Impianmu.
        </h1>

        <p class="text-lg text-slate-500 max-w-lg leading-relaxed">
            Dari konser musik hingga workshop teknologi, semua ada di genggamanmu.
        </p>

        <div class="flex gap-4">
            <a href="#events" class="px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg shadow-xl hover:scale-105 transition">
                Mulai Jelajah
            </a>
        </div>
    </div>

    <div class="flex-1">
        <img src="{{ asset('assets/concert.png') }}" class="rounded-3xl shadow-2xl">
    </div>

</section>

<!-- Events -->
<section id="events" class="max-w-7xl mx-auto px-6 py-20">

    <h2 class="text-3xl font-extrabold mb-10">Event Terdekat</h2>

    <div class="grid md:grid-cols-3 gap-8">

        <!-- Card 1 -->
        <div class="bg-white rounded-3xl shadow p-6">
            <img src="{{ asset('assets/concert.png') }}" class="rounded-xl mb-4">

            <h3 class="font-bold text-xl">Jazz Night 2024</h3>
            <p class="text-sm text-gray-500">16 November 2024</p>

            <div class="flex justify-between mt-4">
                <span class="text-indigo-600 font-bold">Rp 150rb</span>
                <a href="{{ url('/event/1') }}" class="text-indigo-600 font-bold">
                    Detail
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-3xl shadow p-6">
            <img src="{{ asset('assets/workshop.png') }}" class="rounded-xl mb-4">

            <h3 class="font-bold text-xl">AI & Future</h3>
            <p class="text-sm text-gray-500">26 October 2024</p>

            <div class="flex justify-between mt-4">
                <span class="text-indigo-600 font-bold">Rp 50rb</span>
                <a href="{{ url('/event/1') }}" class="text-indigo-600 font-bold">
                    Detail
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-3xl shadow p-6">
            <img src="{{ asset('assets/hackathon.png') }}" class="rounded-xl mb-4">

            <h3 class="font-bold text-xl">Hackathon 2024</h3>
            <p class="text-sm text-gray-500">18-20 October</p>

            <div class="flex justify-between mt-4">
                <span class="text-indigo-600 font-bold">Gratis</span>
                <a href="{{ url('/event/1') }}" class="text-indigo-600 font-bold">
                    Detail
                </a>
            </div>
        </div>

    </div>

</section>

@endsection