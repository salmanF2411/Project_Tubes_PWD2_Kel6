@extends('layouts.layoutAdminPanel')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-900">
        <i class="fa-solid fa-box text-blue-600 mr-2"></i>Daftar Produk
    </h1>
    <p class="text-slate-500 text-sm mt-1">Kelola semua produk mini market</p>
</div>

<!-- Daftar Produk -->
<div class="bg-white rounded-lg border border-slate-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
        <h2 class="font-bold text-slate-900">Daftar Produk</h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="border-b border-slate-200">
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Kode</th>
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Nama Produk</th>
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Gambar</th>
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Kategori</th>
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Harga</th>
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Stok</th>
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Aksi</th>
                </tr>
            </thead>

            <tbody>

                <!-- Produk 1 -->
                <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-900">PRD-001</td>
                    <td class="px-6 py-4 text-slate-700">Minyak Goreng 2L</td>

                    <td class="px-6 py-4">
                        <div class="w-14 h-14 rounded-lg overflow-hidden border border-slate-200 bg-slate-50">
                            <img src="{{ asset('img/minyak.jpg') }}" class="w-full h-full object-cover">
                        </div>
                    </td>

                    <td class="px-6 py-4 text-slate-600">Minyak & Lemak</td>
                    <td class="px-6 py-4 text-green-600 font-medium">Rp 28.000</td>

                    <td class="px-6 py-4">
                        <x-badge type="danger">Habis</x-badge>
                    </td>

                    <td class="px-6 py-4 flex items-center gap-2">
                        <button class="text-blue-600 hover:text-blue-700"><i class="fa-solid fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>

                <!-- Produk 2 -->
                <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-900">PRD-002</td>
                    <td class="px-6 py-4 text-slate-700">Gula Pasir 1kg</td>

                    <td class="px-6 py-4">
                        <div class="w-14 h-14 rounded-lg overflow-hidden border border-slate-200 bg-slate-50">
                            <img src="{{ asset('img/gula.jpg') }}" class="w-full h-full object-cover">
                        </div>
                    </td>

                    <td class="px-6 py-4 text-slate-600">Bahan Pokok</td>
                    <td class="px-6 py-4 text-green-600 font-medium">Rp 12.500</td>

                    <td class="px-6 py-4">
                        <x-badge type="warning">10 unit</x-badge>
                    </td>

                    <td class="px-6 py-4 flex items-center gap-2">
                        <button class="text-blue-600 hover:text-blue-700"><i class="fa-solid fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>

                <!-- Produk 3 -->
                <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-900">PRD-003</td>
                    <td class="px-6 py-4 text-slate-700">Beras Putih 5kg</td>

                    <td class="px-6 py-4">
                        <div class="w-14 h-14 rounded-lg overflow-hidden border border-slate-200 bg-slate-50">
                            <img src="{{ asset('img/beras.jpg') }}" class="w-full h-full object-cover">
                        </div>
                    </td>

                    <td class="px-6 py-4 text-slate-600">Bahan Pokok</td>
                    <td class="px-6 py-4 text-green-600 font-medium">Rp 52.000</td>

                    <td class="px-6 py-4">
                        <x-badge type="danger">Habis</x-badge>
                    </td>

                    <td class="px-6 py-4 flex items-center gap-2">
                        <button class="text-blue-600 hover:text-blue-700"><i class="fa-solid fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>

                <!-- Produk 4 -->
                <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-900">PRD-004</td>
                    <td class="px-6 py-4 text-slate-700">Telur 30 Butir</td>

                    <td class="px-6 py-4">
                        <div class="w-14 h-14 rounded-lg overflow-hidden border border-slate-200 bg-slate-50">
                            <img src="{{ asset('img/telur.jpg') }}" class="w-full h-full object-cover">
                        </div>
                    </td>

                    <td class="px-6 py-4 text-slate-600">Protein</td>
                    <td class="px-6 py-4 text-green-600 font-medium">Rp 45.000</td>

                    <td class="px-6 py-4">
                        <x-badge type="warning">12 unit</x-badge>
                    </td>

                    <td class="px-6 py-4 flex items-center gap-2">
                        <button class="text-blue-600 hover:text-blue-700"><i class="fa-solid fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>

                <!-- Produk 5 -->
                <tr class="hover:bg-blue-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-900">PRD-005</td>
                    <td class="px-6 py-4 text-slate-700">Roti Tawar</td>

                    <td class="px-6 py-4">
                        <div class="w-14 h-14 rounded-lg overflow-hidden border border-slate-200 bg-slate-50">
                            <img src="{{ asset('img/roti.jpg') }}" class="w-full h-full object-cover">
                        </div>
                    </td>

                    <td class="px-6 py-4 text-slate-600">Roti & Bakery</td>
                    <td class="px-6 py-4 text-green-600 font-medium">Rp 8.500</td>

                    <td class="px-6 py-4">
                        <x-badge type="success">20 unit</x-badge>
                    </td>

                    <td class="px-6 py-4 flex items-center gap-2">
                        <button class="text-blue-600 hover:text-blue-700"><i class="fa-solid fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection