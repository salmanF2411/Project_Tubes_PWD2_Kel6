@extends('layouts.layoutAdminPanel')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-900">
        <i class="fa-solid fa-users text-blue-600 mr-2"></i>Kelola User
    </h1>
    <p class="text-slate-500 text-sm mt-1">Manajemen pengguna sistem mini market</p>
</div>
    <div class="bg-white rounded-lg border border-slate-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
        <h2 class="font-bold text-slate-900">Daftar User</h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="border-b border-slate-200">
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Nama</th>
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Email</th>
                    <th class="px-12 py-3 text-left font-semibold text-slate-600">Role</th>
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Cabang</th>
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Status</th>
                    <th class="px-6 py-3 text-left font-semibold text-slate-600">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-900">Pak Jayusman</td>
                    <td class="px-6 py-4 text-slate-600">jayusman@minimarket.com</td>
                    <td class="px-6 py-4">
                        <span class="px-6 py-4 text-slate-600">Admin</span>
                    </td>
                    <td class="px-6 py-4 text-slate-600">Pusat</td>
                    <td class="px-6 py-4">
                        <x-badge type="success">Aktif</x-badge>
                    </td>
                    <td class="px-6 py-4 flex items-center gap-2">
                        <button class="text-blue-600 hover:text-blue-700"><i class="fa-solid fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-900">Budi Santoso</td>
                    <td class="px-6 py-4 text-slate-600">budi@minimarket.com</td>
                    <td class="px-6 py-4">
                        <span class="px-6 py-4 text-slate-600">Manager</span>
                    </td>
                    <td class="px-6 py-4 text-slate-600">Jakarta Pusat</td>
                    <td class="px-6 py-4">
                        <x-badge type="success">Aktif</x-badge>
                    </td>
                    <td class="px-6 py-4 flex items-center gap-2">
                        <button class="text-blue-600 hover:text-blue-700"><i class="fa-solid fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-900">Siti Nurhaliza</td>
                    <td class="px-6 py-4 text-slate-600">siti@minimarket.com</td>
                    <td class="px-6 py-4">
                        <span class="px-6 py-4 text-slate-600">Kasir</span>
                    </td>
                    <td class="px-6 py-4 text-slate-600">Bandung</td>
                    <td class="px-6 py-4">
                        <x-badge type="success">Aktif</x-badge>
                    </td>
                    <td class="px-6 py-4 flex items-center gap-2">
                        <button class="text-blue-600 hover:text-blue-700"><i class="fa-solid fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b border-slate-100 hover:bg-blue-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-900">Ahmad Wijaya</td>
                    <td class="px-6 py-4 text-slate-600">ahmad@minimarket.com</td>
                    <td class="px-6 py-4">
                        <span class="px-6 py-4 text-slate-600">Gudang</span>
                    </td>
                    <td class="px-6 py-4 text-slate-600">Jakarta Selatan</td>
                    <td class="px-6 py-4">
                        <x-badge type="success">Aktif</x-badge>
                    </td>
                    <td class="px-6 py-4 flex items-center gap-2">
                        <button class="text-blue-600 hover:text-blue-700"><i class="fa-solid fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="hover:bg-blue-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-900">Dewi Lestari</td>
                    <td class="px-6 py-4 text-slate-600">dewi@minimarket.com</td>
                    <td class="px-6 py-4">
                        <span class="px-6 py-4 text-slate-600">Kasir</span>
                    </td>
                    <td class="px-6 py-4 text-slate-600">Jakarta Pusat</td>
                    <td class="px-6 py-4">
                        <x-badge type="danger">Nonaktif</x-badge>
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