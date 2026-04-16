@extends('layouts.app')

@section('content')

<section class="max-w-3xl mx-auto px-6 py-20">

    <h1 class="text-3xl font-bold mb-6">Checkout</h1>

    <div class="bg-white p-6 rounded-2xl shadow space-y-4">

        <p><b>Event:</b> Jazz Night 2024</p>
        <p><b>Harga:</b> Rp 150.000</p>

        <input type="text" placeholder="Nama Lengkap"
               class="w-full border p-3 rounded-xl">

        <input type="email" placeholder="Email"
               class="w-full border p-3 rounded-xl">

        <a href="{{ url('/ticket') }}"
           class="block text-center bg-indigo-600 text-white py-3 rounded-xl font-bold">
            Bayar Sekarang
        </a>

    </div>

</section>

@endsection