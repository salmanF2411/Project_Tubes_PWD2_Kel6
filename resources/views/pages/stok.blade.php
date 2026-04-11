@extends('layouts.layoutAdminPanel')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-900">
        <i class="fa-solid fa-warehouse text-blue-600 mr-2"></i>Manajemen Stok
    </h1>
    <p class="text-slate-500 text-sm mt-1">Kelola stok barang di semua cabang</p>
</div>

<!-- Data Keseluruhan -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-lg p-6 border border-slate-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-slate-600 text-sm font-medium">Total Stok Semua Cabang</p>
                <p class="text-2xl font-bold text-slate-900 mt-1">5,234</p>
                <p class="text-xs text-slate-500 mt-2">Unit barang</p>
            </div>
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                <i class="fa-solid fa-boxes-stacked text-blue-600 text-lg"></i>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg p-6 border border-slate-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-slate-600 text-sm font-medium">Pengiriman Masuk</p>
                <p class="text-2xl font-bold text-slate-900 mt-1">3</p>
                <p class="text-xs text-slate-500 mt-2">Menunggu konfirmasi</p>
            </div>
            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                <i class="fa-solid fa-truck text-green-600 text-lg"></i>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg p-6 border border-slate-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-slate-600 text-sm font-medium">Pengiriman Keluar</p>
                <p class="text-2xl font-bold text-slate-900 mt-1">1</p>
                <p class="text-xs text-slate-500 mt-2">Dalam proses</p>
            </div>
            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                <i class="fa-solid fa-truck-loading text-orange-600 text-lg"></i>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg p-6 border border-slate-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-slate-600 text-sm font-medium">Stok Rendah</p>
                <p class="text-2xl font-bold text-orange-900 mt-1">4</p>
                <p class="text-xs text-slate-500 mt-2">Produk kritis</p>
            </div>
            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                <i class="fa-solid fa-exclamation-triangle text-red-600 text-lg"></i>
            </div>
        </div>
    </div>
</div>

<!-- Filters -->
<div class="bg-white rounded-lg border border-slate-200 p-6 mb-8">
    <div class="flex flex-col md:flex-row gap-4 items-start md:items-center">
        <div class="flex-1">
            <label class="block text-sm font-medium text-slate-700 mb-2">Cabang</label>
            <select class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-200">
                <option>Semua Cabang</option>
                <option>Cabang Jakarta Pusat</option>
                <option>Cabang Bandung</option>
                <option>Cabang Surabaya</option>
                <option>Cabang Medan</option>
                <option>Cabang Makassar</option>
            </select>
        </div>
        <div class="flex-1">
            <label class="block text-sm font-medium text-slate-700 mb-2">Periode</label>
            <div class="flex gap-2">
                <input type="date" class="flex-1 px-3 py-2 border border-slate-200 rounded-lg focus:outline-none focus:border-blue-400">
                <span class="px-3 py-2 text-slate-400">-</span>
                <input type="date" class="flex-1 px-3 py-2 border border-slate-200 rounded-lg focus:outline-none focus:border-blue-400">
            </div>
        </div>
        <x-button type="primary" href="#" icon="fa-solid fa-search">
            Filter
        </x-button>
    </div>
</div>

<!-- Data Stok -->
<div class="space-y-8">
    <div class="bg-white rounded-lg border border-slate-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
            <h2 class="font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-list-check text-blue-600"></i>Stok Saat Ini per Cabang
            </h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-slate-200">
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Produk</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Jakarta</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Bandung</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Surabaya</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Medan</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Makassar</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-slate-100 hover:bg-blue-50">
                        <td class="px-6 py-4 font-medium text-slate-900">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg overflow-hidden border">
                                    <img src="{{ asset('img/minyak.jpg') }}" alt="Minyak" class="w-full h-full object-cover">
                                </div>
                                Minyak Goreng 2L
                            </div>
                        </td>
                        <td class="px-6 py-4"><x-badge type="warning">15</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="danger">0</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="success">45</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="warning">8</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="success">30</x-badge></td>
                        <td class="px-6 py-4 font-bold text-slate-900">98</td>
                    </tr>
                    <tr class="border-b border-slate-100 hover:bg-blue-50">
                        <td class="px-6 py-4 font-medium text-slate-900">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg overflow-hidden border">
                                    <img src="{{ asset('img/gula.jpg') }}" alt="Gula" class="w-full h-full object-cover">
                                </div>
                                Gula Pasir 1kg
                            </div>
                        </td>
                        <td class="px-6 py-4"><x-badge type="success">50</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="success">40</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="warning">12</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="success">35</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="danger">0</x-badge></td>
                        <td class="px-6 py-4 font-bold text-slate-900">137</td>
                    </tr>
                    <tr class="border-b border-slate-100 hover:bg-blue-50">
                        <td class="px-6 py-4 font-medium text-slate-900">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg overflow-hidden border">
                                    <img src="{{ asset('img/beras.jpg') }}" alt="Beras" class="w-full h-full object-cover">
                                </div>
                                Beras 5kg
                            </div>
                        </td>
                        <td class="px-6 py-4"><x-badge type="success">80</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="warning">20</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="success">60</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="danger">0</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="success">55</x-badge></td>
                        <td class="px-6 py-4 font-bold text-slate-900">215</td>
                    </tr>
                    <tr class="hover:bg-blue-50">
                        <td class="px-6 py-4 font-medium text-slate-900">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg overflow-hidden border">
                                    <img src="{{ asset('img/telur.jpg') }}" alt="Telur" class="w-full h-full object-cover">
                                </div>
                                Telur 30 Butir
                            </div>
                        </td>
                        <td class="px-6 py-4"><x-badge type="warning">25</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="success">42</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="warning">18</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="success">30</x-badge></td>
                        <td class="px-6 py-4"><x-badge type="danger">5</x-badge></td>
                        <td class="px-6 py-4 font-bold text-slate-900">120</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pengiriman Masuk -->
    <div class="bg-white rounded-lg border border-slate-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
            <h2 class="font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-truck text-green-600"></i>Pengiriman Masuk
            </h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-slate-200">
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">ID</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Dari Cabang</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Produk</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Qty</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Tanggal</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-slate-100 hover:bg-green-50">
                        <td class="px-6 py-4 font-medium text-slate-900">TRF-001</td>
                        <td class="px-6 py-4">Cabang Surabaya</td>
                        <td class="px-6 py-4">Minyak Goreng 2L</td>
                        <td class="px-6 py-4 font-bold text-green-600">50</td>
                        <td class="px-6 py-4">11-04-2026</td>
                        <td class="px-6 py-4">
                            <x-button type="success" href="#" size="sm" icon="fa-solid fa-check">Konfirmasi</x-button>
                        </td>
                    </tr>
                    <tr class="border-b border-slate-100 hover:bg-green-50">
                        <td class="px-6 py-4 font-medium text-slate-900">TRF-002</td>
                        <td class="px-6 py-4">Cabang Bandung</td>
                        <td class="px-6 py-4">Beras 5kg</td>
                        <td class="px-6 py-4 font-bold text-green-600">30</td>
                        <td class="px-6 py-4">05-04-2026</td>
                        <td class="px-6 py-4">
                            <x-button type="success" href="#" size="sm" icon="fa-solid fa-check">Konfirmasi</x-button>
                        </td>
                    </tr>
                    <tr class="hover:bg-green-50">
                        <td class="px-6 py-4 font-medium text-slate-900">TRF-003</td>
                        <td class="px-6 py-4">Cabang Medan</td>
                        <td class="px-6 py-4">Telur 30 Butir</td>
                        <td class="px-6 py-4 font-bold text-green-600">100</td>
                        <td class="px-6 py-4">25-03-2026</td>
                        <td class="px-6 py-4">
                            <x-button type="success" href="#" size="sm" icon="fa-solid fa-check">Konfirmasi</x-button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pengiriman Keluar -->
    <div class="bg-white rounded-lg border border-slate-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
            <h2 class="font-bold text-slate-900 flex items-center gap-2">
                <i class="fa-solid fa-truck-loading text-orange-600"></i>Pengiriman Keluar
            </h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-slate-200">
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">ID</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Ke Cabang</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Produk</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Qty</th>
                        <th class="px-6 py-3 text-left font-semibold text-slate-600">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-slate-100 hover:bg-orange-50">
                        <td class="px-6 py-4 font-medium text-slate-900">OUT-001</td>
                        <td class="px-6 py-4">Cabang Makassar</td>
                        <td class="px-6 py-4">Gula Pasir 1kg</td>
                        <td class="px-6 py-4 font-bold">25</td>
                        <td class="px-6 py-4">
                            <x-badge type="warning">Proses</x-badge>
                        </td>
                    </tr>
                    <tr class="hover:bg-orange-50">
                        <td class="px-6 py-4 font-medium text-slate-900">OUT-002</td>
                        <td class="px-6 py-4">Cabang Jakarta</td>
                        <td class="px-6 py-4">Roti Tawar</td>
                        <td class="px-6 py-4 font-bold">50</td>
                        <td class="px-6 py-4">
                            <x-badge type="success">Terkirim</x-badge>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Form Kirim Stok -->
    <div class="bg-white rounded-lg border border-slate-200 p-8">
        <h2 class="font-bold text-slate-900 text-xl mb-6 flex items-center gap-2">
            <i class="fa-solid fa-plus-circle text-green-600"></i>Kirim Stok
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Cabang Tujuan</label>
                <select class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:outline-none focus:border-blue-400">
                    <option>Cabang Jakarta Pusat</option>
                    <option>Cabang Bandung</option>
                    <option>Cabang Surabaya</option>
                    <option>Cabang Medan</option>
                    <option>Cabang Makassar</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Produk</label>
                <select class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:outline-none focus:border-blue-400">
                    <option>Minyak Goreng 2L</option>
                    <option>Gula Pasir 1kg</option>
                    <option>Beras 5kg</option>
                    <option>Telur 30 Butir</option>
                    <option>Roti Tawar</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Jumlah</label>
                <input type="number" min="1" class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:outline-none focus:border-green-400">
            </div>
        </div>
        <div class="mt-6">
            <label class="block text-sm font-medium text-slate-700 mb-2">Keterangan</label>
            <textarea rows="3" class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:outline-none focus:border-blue-400" placeholder="Alasan penambahan/pemindahan stok..."></textarea>
        </div>
        <div class="mt-6 flex gap-3">
            <x-button href="#" type="primary" icon="fa-solid fa-save">
                Kirim Stok
            </x-button>
            <x-button href="#" type="danger" icon="fa-solid fa-times">
                Batal
            </x-button>
        </div>
    </div>
</div>
@endsection