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

    <!-- Keranjang dan Pembayaran -->
    <div class="lg:sticky lg:top-8 lg:h-fit space-y-4">
        <div class="bg-white rounded-lg border border-slate-200 p-6">
            <h3 class="font-bold text-slate-900 text-lg mb-4 flex items-center gap-2">
                <i class="fa-solid fa-shopping-cart text-blue-600"></i>Keranjang (1)
            </h3>

            <!-- Tampilan kalo keranjang kosong -->
            <!-- <div class="text-center py-12 text-slate-500">
                <i class="fa-solid fa-cart-shopping text-4xl mb-4 opacity-50"></i>
                <p class="text-sm">Belum ada item di keranjang</p>
                <p class="text-xs mt-1">Tambahkan produk dari daftar di atas</p>
            </div> -->

            <!-- Tampilan kalo ada produk di keranjang -->
            <div class="space-y-3 mb-6">
                <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-lg">
                    <div class="w-12 h-12 rounded-lg overflow-hidden bg-slate-100">
                        <img src="{{ asset('img/gula.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-slate-900 text-sm">Gula Pasir 1kg</p>
                        <p class="text-xs text-slate-500">Rp 12.500 x 2</p>
                    </div>
                    <div class="text-right">
                        <p class="font-medium text-slate-900">Rp 25.000</p>
                        <button class="text-red-500 hover:text-red-600 text-xs mt-1">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="space-y-3 pt-4 border-t border-slate-200">
                <div class="flex justify-between text-sm text-slate-700">
                    <span>Subtotal:</span>
                    <span>Rp 0</span>
                </div>
                <div class="flex justify-between text-sm text-slate-700">
                    <span>Diskon:</span>
                    <span>- Rp 0</span>
                </div>
                <div class="flex justify-between font-bold text-lg text-slate-900 pt-2">
                    <span>Total:</span>
                    <span>Rp 0</span>
                </div>
            </div>
        </div>

        <!-- Pembayaran -->
        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border border-green-200 p-6">
            <h4 class="font-bold text-green-800 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-credit-card text-green-600"></i>Pembayaran
            </h4>
            <div class="space-y-3">
                <div>
                    <label class="block text-xs font-medium text-slate-700 mb-1">Bayar</label>
                    <input type="number" placeholder="0" class="w-full px-3 py-2 border border-slate-200 rounded-lg focus:outline-none focus:border-green-400 focus:ring-1 focus:ring-green-200 text-sm">
                </div>
                <div class="grid grid-cols-2 gap-2 text-xs">
                    <button class="px-3 py-2 bg-slate-100 hover:bg-slate-200 rounded-lg transition font-medium">Non-Tunai</button>
                    <button class="px-3 py-2 bg-emerald-100 hover:bg-emerald-200 rounded-lg transition font-medium">Tunai</button>
                </div>
                <div class="text-right pt-2 border-t border-green-200">
                    <span class="text-sm text-slate-600">Kembali: </span>
                    <span class="font-bold text-lg text-green-600">Rp 0</span>
                </div>
            </div>

            <button class="w-full mt-6 px-4 py-3 bg-green-600 text-white rounded-lg font-bold text-sm hover:bg-green-700 transition flex items-center justify-center gap-2 shadow-lg">
                <i class="fa-solid fa-check"></i>
                Selesaikan Transaksi
            </button>
        </div>
    </div>
</div>
@endsection