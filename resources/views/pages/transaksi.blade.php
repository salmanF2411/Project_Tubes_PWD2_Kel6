@extends('layouts.layoutAdminPanel')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-900">
        <i class="fa-solid fa-receipt text-blue-600 mr-2"></i>Transaksi Kasir
    </h1>
    <p class="text-slate-500 text-sm mt-1">Lakukan transaksi penjualan dengan cepat dan mudah untuk pelanggan</p>
</div>

<div class="grid lg:grid-cols-4 gap-6">
    <div class="lg:col-span-3 space-y-6">
        <div class="flex-1 max-w-2xl">
            <div class="relative">
                <input
                    type="text"
                    placeholder="Cari produk (minyak, gula, beras...)"
                    class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-200 pl-12 text-sm">
                <i class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
            </div>
        </div>
        <div class="bg-white rounded-lg border border-slate-200 overflow-hidden">
            <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
                <h2 class="font-bold text-slate-900 flex items-center gap-2">
                    <i class="fa-solid fa-boxes-stacked text-blue-600"></i>Daftar Produk Tersedia
                </h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-slate-200">
                            <th class="px-6 py-3 text-left font-semibold text-slate-600">Gambar</th>
                            <th class="px-6 py-3 text-left font-semibold text-slate-600">Produk</th>
                            <th class="px-6 py-3 text-left font-semibold text-slate-600">Harga</th>
                            <th class="px-6 py-3 text-left font-semibold text-slate-600">Stok</th>
                            <th class="px-6 py-3 text-left font-semibold text-slate-600">Qty</th>
                            <th class="px-6 py-3 text-left font-semibold text-slate-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="w-14 h-14 rounded-lg overflow-hidden border border-slate-200 bg-slate-50">
                                    <img src="{{ asset('img/minyak.jpg') }}" alt="Minyak" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-900">Minyak Goreng 2L</td>
                            <td class="px-6 py-4 text-green-600 font-medium">Rp 28.000</td>
                            <td class="px-6 py-4">
                                <x-badge type="danger">Habis</x-badge>
                            </td>
                            <td class="px-6 py-4">
                                <input type="number" min="0" value="0" class="w-20 px-2 py-1 border border-slate-200 rounded text-sm focus:outline-none focus:border-blue-400">
                            </td>
                            <td class="px-6 py-4">
                                <x-button type="primary" href="#" icon="fa-solid fa-plus">
                                    Tambah
                                </x-button>
                            </td>
                        </tr>
                        <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="w-14 h-14 rounded-lg overflow-hidden border border-slate-200 bg-slate-50">
                                    <img src="{{ asset('img/gula.jpg') }}" alt="Gula" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-900">Gula Pasir 1kg</td>
                            <td class="px-6 py-4 text-green-600 font-medium">Rp 12.500</td>
                            <td class="px-6 py-4">
                                <x-badge type="warning">10</x-badge>
                            </td>
                            <td class="px-6 py-4">
                                <input type="number" min="0" value="0" class="w-20 px-2 py-1 border border-slate-200 rounded text-sm focus:outline-none focus:border-blue-400">
                            </td>
                            <td class="px-6 py-4">
                                <x-button type="primary" href="#" icon="fa-solid fa-plus">
                                    Tambah
                                </x-button>
                            </td>
                        </tr>
                        <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="w-14 h-14 rounded-lg overflow-hidden border border-slate-200 bg-slate-50">
                                    <img src="{{ asset('img/beras.jpg') }}" alt="Beras" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-900">Beras Putih 5kg</td>
                            <td class="px-6 py-4 text-green-600 font-medium">Rp 52.000</td>
                            <td class="px-6 py-4">
                                <x-badge type="danger">Habis</x-badge>
                            </td>
                            <td class="px-6 py-4">
                                <input type="number" min="0" value="0" class="w-20 px-2 py-1 border border-slate-200 rounded text-sm focus:outline-none focus:border-blue-400">
                            </td>
                            <td class="px-6 py-4">
                                <x-button type="primary" href="#" icon="fa-solid fa-plus">
                                    Tambah
                                </x-button>
                            </td>
                        </tr>
                        <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="w-14 h-14 rounded-lg overflow-hidden border border-slate-200 bg-slate-50">
                                    <img src="{{ asset('img/telur.jpg') }}" alt="Telur" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-900">Telur 30 Butir</td>
                            <td class="px-6 py-4 text-green-600 font-medium">Rp 45.000</td>
                            <td class="px-6 py-4">
                                <x-badge type="warning">12</x-badge>
                            </td>
                            <td class="px-6 py-4">
                                <input type="number" min="0" value="0" class="w-20 px-2 py-1 border border-slate-200 rounded text-sm focus:outline-none focus:border-blue-400">
                            </td>
                            <td class="px-6 py-4">
                                <x-button type="primary" href="#" icon="fa-solid fa-plus">
                                    Tambah
                                </x-button>
                            </td>
                        </tr>
                        <tr class="hover:bg-blue-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="w-14 h-14 rounded-lg overflow-hidden border border-slate-200 bg-slate-50">
                                    <img src="{{ asset('img/roti.jpg') }}" alt="Roti" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-900">Roti Tawar</td>
                            <td class="px-6 py-4 text-green-600 font-medium">Rp 8.500</td>
                            <td class="px-6 py-4">
                                <x-badge type="success">20</x-badge>
                            </td>
                            <td class="px-6 py-4">
                                <input type="number" min="0" value="0" class="w-20 px-2 py-1 border border-slate-200 rounded text-sm focus:outline-none focus:border-blue-400">
                            </td>
                            <td class="px-6 py-4">
                                <x-button type="primary" href="#" icon="fa-solid fa-plus">
                                    Tambah
                                </x-button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection