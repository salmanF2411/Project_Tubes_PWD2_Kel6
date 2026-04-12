@extends('layouts.layoutAdminPanel')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-900">
        <i class="fa-solid fa-file-lines text-blue-600 mr-2"></i>Laporan Transaksi
    </h1>
    <p class="text-slate-500 text-sm mt-1">Laporan rincian penjualan di semua cabang</p>
</div>
<!-- Laporan Transaksi -->
<div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mb-6">
    <h2 class="text-lg font-semibold text-slate-800 mb-4">Filter Laporan</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <label for="cabang" class="block text-sm font-medium text-slate-700 mb-2">Cabang</label>
            <select id="cabang" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="">Semua Cabang</option>
                <option value="1">Cabang Jakarta</option>
                <option value="2">Cabang Bandung</option>
                <option value="3">Cabang Surabaya</option>
                <option value="4">Cabang Semarang</option>
                <option value="5">Cabang Yogyakarta</option>
            </select>
        </div>
        <div>
            <label for="tanggal_mulai" class="block text-sm font-medium text-slate-700 mb-2">Tanggal Mulai</label>
            <input type="date" id="tanggal_mulai" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div>
            <label for="tanggal_akhir" class="block text-sm font-medium text-slate-700 mb-2">Tanggal Akhir</label>
            <input type="date" id="tanggal_akhir" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="flex items-end">
            <x-button type="primary" href="#" icon="fa-solid fa-search">
                Filter
            </x-button>
        </div>
    </div>
</div>

<div class="flex justify-between items-center mb-6">
    <div class="text-sm text-slate-600">
        Menampilkan <span class="font-semibold">50</span> produk dari total <span class="font-semibold">150</span> produk
    </div>
    <div class="flex gap-3">
        <x-button type="secondary" href="#" icon="fa-solid fa-file-excel">
            Export Excel
        </x-button>
        <x-button type="danger" href="#" icon="fa-solid fa-file-pdf">
            Export PDF
        </x-button>
        <x-button type="primary" href="#" icon="fa-solid fa-print">
            Cetak
        </x-button>
    </div>
</div>

<!-- Data Transaksi -->
<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-200">
        <h3 class="text-lg font-semibold text-slate-800">Data Laporan Transaksi</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">ID Transaksi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Kasir</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Cabang</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Total</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Pembayaran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Status</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-slate-200">

                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm">1</td>
                    <td class="px-6 py-4 font-medium">TRX-001</td>
                    <td class="px-6 py-4">Andi</td>
                    <td class="px-6 py-4">Jakarta</td>
                    <td class="px-6 py-4">2026-04-11</td>
                    <td class="px-6 py-4 font-semibold text-green-600">Rp 250.000</td>
                    <td class="px-6 py-4">Cash</td>
                    <td class="px-6 py-4">
                        <x-badge type="success">Selesai</x-badge>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm">2</td>
                    <td class="px-6 py-4 font-medium">TRX-002</td>
                    <td class="px-6 py-4">Budi</td>
                    <td class="px-6 py-4">Bandung</td>
                    <td class="px-6 py-4">2026-04-11</td>
                    <td class="px-6 py-4 font-semibold text-green-600">Rp 180.000</td>
                    <td class="px-6 py-4">QRIS</td>
                    <td class="px-6 py-4">
                        <x-badge type="success">Selesai</x-badge>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm">3</td>
                    <td class="px-6 py-4 font-medium">TRX-003</td>
                    <td class="px-6 py-4">Rina</td>
                    <td class="px-6 py-4">Surabaya</td>
                    <td class="px-6 py-4">2026-04-11</td>
                    <td class="px-6 py-4 font-semibold text-green-600">Rp 95.000</td>
                    <td class="px-6 py-4">Cash</td>
                    <td class="px-6 py-4">
                        <x-badge type="success">Selesai</x-badge>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm">4</td>
                    <td class="px-6 py-4 font-medium">TRX-004</td>
                    <td class="px-6 py-4">Dewi</td>
                    <td class="px-6 py-4">Jakarta</td>
                    <td class="px-6 py-4">2026-04-11</td>
                    <td class="px-6 py-4 font-semibold text-green-600">Rp 320.000</td>
                    <td class="px-6 py-4">Transfer</td>
                    <td class="px-6 py-4">
                        <x-badge type="success">Selesai</x-badge>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4 text-sm">5</td>
                    <td class="px-6 py-4 font-medium">TRX-005</td>
                    <td class="px-6 py-4">Siti</td>
                    <td class="px-6 py-4">Yogyakarta</td>
                    <td class="px-6 py-4">2026-04-11</td>
                    <td class="px-6 py-4 font-semibold text-green-600">Rp 150.000</td>
                    <td class="px-6 py-4">QRIS</td>
                    <td class="px-6 py-4">
                        <x-badge type="success">Selesai</x-badge>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="px-6 py-4 border-t border-slate-200 bg-slate-50">
        <div class="flex items-center justify-between">
            <div class="text-sm text-slate-700">
                Menampilkan 1 sampai 5 dari 150 hasil
            </div>
            <div class="flex space-x-1">
                <button class="px-3 py-1 text-sm font-medium text-slate-500 bg-white border border-slate-300 rounded-md hover:bg-slate-50 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                    <i class="fa-solid fa-chevron-left"></i> Previous
                </button>
                <button class="px-3 py-1 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700">1</button>
                <button class="px-3 py-1 text-sm font-medium text-slate-500 bg-white border border-slate-300 rounded-md hover:bg-slate-50">2</button>
                <button class="px-3 py-1 text-sm font-medium text-slate-500 bg-white border border-slate-300 rounded-md hover:bg-slate-50">3</button>
                <span class="px-2 py-1 text-sm text-slate-500">...</span>
                <button class="px-3 py-1 text-sm font-medium text-slate-500 bg-white border border-slate-300 rounded-md hover:bg-slate-50">30</button>
                <button class="px-3 py-1 text-sm font-medium text-slate-500 bg-white border border-slate-300 rounded-md hover:bg-slate-50">
                    Next <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection