<header class="bg-white text-slate-800 shadow-md border-b border-slate-200">
    <div class="px-6 py-4 flex justify-between items-center">
        <div class="flex items-center gap-4">
            <!-- Logo indomaret hanya sementara/contoh -->
            <img src="{{ asset('img/indomaret.jpg') }}" alt="Indomaret" class="w-12 h-12 rounded-lg object-cover shadow-lg ring-2 ring-slate-200">
            <div>
                <h1 class="text-2xl font-bold tracking-tight">Mini Market Pak Jayusman (Kelompok 6)</h1>
                <p class="text-xs text-slate-400 font-bold">Management System</p>
            </div>
        </div>

        <div class="flex items-center gap-6">
            <!-- Search Bar -->
            <div class="hidden lg:flex items-center bg-slate-50 rounded-lg px-4 py-2 border border-slate-200 hover:border-blue-400 transition-colors max-w-xs">
                <input
                    type="text"
                    placeholder="Cari produk, kategori..."
                    class="bg-transparent outline-none text-sm text-slate-700 placeholder-slate-400 w-full focus:ring-0">
                <i class="fa-solid fa-search text-slate-400 ml-2"></i>
            </div>

            <!-- Icon Notif-->
            <div class="relative" x-data="{ notifOpen: false }">
                <button
                    @click="notifOpen = !notifOpen"
                    class="relative p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors cursor-pointer">
                    <i class="fa-solid fa-bell text-xl"></i>
                    <span class="absolute top-1 right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center font-bold">3</span>
                </button>

                <!-- Notif Dropdown -->
                <div
                    x-show="notifOpen"
                    x-cloak
                    x-transition
                    @click.outside="notifOpen = false"
                    class="absolute right-0 mt-2 w-80 bg-white rounded-xl shadow-2xl border border-slate-200 z-50 max-h-96 overflow-y-auto">
                    <div class="px-4 py-3 border-b border-slate-100 bg-gradient-to-r from-blue-50 to-blue-100 flex items-center gap-2">
                        <i class="fa-solid fa-bell text-sm"></i>
                        <p class="font-semibold text-slate-800"> Notifikasi</p>
                    </div>

                    <div class="px-4 py-3 border-b border-slate-100 hover:bg-slate-100 transition cursor-pointer">
                        <div class="flex gap-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-1.5 flex-shrink-0"></div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-slate-800">Stok Produk Terbatas</p>
                                <p class="text-xs text-slate-600">Minyak goreng premium tinggal 5 unit</p>
                                <p class="text-xs text-slate-400 mt-1">5 menit yang lalu</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-b border-slate-100 hover:bg-slate-100 transition cursor-pointer">
                        <div class="flex gap-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-1.5 flex-shrink-0"></div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-slate-800">Transaksi Berhasil</p>
                                <p class="text-xs text-slate-600">Transaksi Rp 150.000 berhasil diproses</p>
                                <p class="text-xs text-slate-400 mt-1">15 menit yang lalu</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-b border-slate-100 hover:bg-slate-100 transition cursor-pointer">
                        <div class="flex gap-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-1.5 flex-shrink-0"></div>
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-slate-800">Transaksi Berhasil</p>
                                <p class="text-xs text-slate-600">Transaksi Rp 100.000 berhasil diproses</p>
                                <p class="text-xs text-slate-400 mt-1">20 menit yang lalu</p>
                            </div>
                        </div>
                    </div>

                    <div class="px-4 py-2 border-t border-slate-100 bg-slate-50 text-center">
                        <a href="#" class="text-xs text-blue-600 hover:text-blue-700 font-semibold">Lihat semua notifikasi →</a>
                    </div>
                </div>
            </div>

            <div class="hidden md:flex flex-col items-end">
                <span class="text-sm font-medium">Pak Jayusman</span>
                <span class="text-xs text-slate-500 font-bold">Selamat datang 👋</span>
            </div>

            <!-- drop down profile -->
            <div class="relative" x-data="{ open: false }">
                <button
                    @click="open = !open"
                    class=" w-10 h-10 rounded-full flex items-center justify-center
                    hover:shadow-lg transition cursor-pointer border-2 border-white/40 overflow-hidden">
                    <!-- fotosaya hanya sebagai contoh, nanti menyesuaikan -->
                    <img src="{{ asset('img/fotosaya.jpg') }}" alt="Profile" class="w-full h-full object-cover">
                </button>

                <!-- Menu Dropdown -->
                <div
                    x-show="open"
                    x-cloak
                    x-transition
                    @click.outside="open = false"
                    class="absolute right-0 mt-3 w-45 bg-white text-slate-800 rounded-xl shadow-2xl py-2 z-50 border border-blue-200">

                    <div class="px-4 py-3 border-b border-slate-100 bg-slate-50">
                        <p class="font-semibold text-slate-800">Admin Jayusman</p>
                        <p class="text-xs text-slate-500">admin@minimarket.com</p>
                    </div>

                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2 hover:bg-slate-100 transition cursor-pointer">
                        <i class="fa-solid fa-user text-slate-600 w-4"></i>
                        <span>Profile</span>
                    </a>
                    <button
                        class="w-full text-left flex items-center gap-3 px-4 py-2 hover:bg-red-50 transition text-red-600 cursor-pointer border-t border-slate-100 mt-1">
                        <i class="fa-solid fa-sign-out-alt w-4"></i>
                        <span>Logout</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>