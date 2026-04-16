@extends('layouts.admin')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Manajemen Kategori</h1>

        <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
            + Tambah Kategori
        </button>
    </div>

    <div class="bg-white rounded-xl shadow p-6">

        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="py-3">No</th>
                    <th>Nama Kategori</th>
                    <th class="text-right">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-b">
                    <td class="py-3">1</td>
                    <td>Seminar</td>
                    <td class="text-right space-x-2">
                        <button class="bg-yellow-400 px-3 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                    </td>
                </tr>

                <tr class="border-b">
                    <td class="py-3">2</td>
                    <td>Konser</td>
                    <td class="text-right space-x-2">
                        <button class="bg-yellow-400 px-3 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                    </td>
                </tr>

                <tr>
                    <td class="py-3">3</td>
                    <td>Workshop</td>
                    <td class="text-right space-x-2">
                        <button class="bg-yellow-400 px-3 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</div>

@endsection