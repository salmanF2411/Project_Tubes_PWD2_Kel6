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
            <div class="hidden md:flex flex-col items-end">
                <span class="text-sm font-medium">Pak Jayusman</span>
                <span class="text-xs text-slate-500 font-bold">Selamat datang 👋</span>
            </div>

            <div class="relative">
                <button
                    class="w-10 h-10 rounded-full flex items-center justify-center 
                           hover:shadow-lg transition cursor-pointer border-2 border-white/40 overflow-hidden">
                    <!-- fotosaya hanya sebagai contoh, nanti menyesuaikan -->
                    <img src="{{ asset('img/fotosaya.jpg') }}" alt="Profile" class="w-full h-full object-cover">
                </button>

                <!-- Menu Dropdown -->
                <div
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