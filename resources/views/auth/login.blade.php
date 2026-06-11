<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mini Market Pak Jayusman</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md px-4">
            <!-- Card -->
            <div class="bg-white rounded-lg shadow-lg p-8 border border-slate-200">
            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">
                    <i class="fa-solid fa-store text-blue-600 mr-2"></i>
                    Mini Market System
                </h2>
                <p class="text-slate-600 text-sm">
                    Sistem Manajemen Toko Mini Market Pak Jayusman
                </p>
            </div>

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-2">
                        Email
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror"
                        placeholder="Masukkan email Anda"
                        value="{{ old('email') }}"
                        required
                    >
                    @error('email')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-2">
                        Password
                    </label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('password') border-red-500 @enderror"
                        placeholder="Masukkan password Anda"
                        required
                    >
                    @error('password')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input
                        type="checkbox"
                        name="remember"
                        id="remember"
                        class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-500"
                    >
                    <label for="remember" class="ml-2 text-sm text-slate-700">
                        Ingat saya
                    </label>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200"
                >
                    <i class="fa-solid fa-sign-in-alt mr-2"></i>
                    Login
                </button>
            </form>

            <!-- Demo Credentials -->
            <div class="mt-8 pt-6 border-t border-slate-200">
                <p class="text-sm font-semibold text-slate-700 mb-3">
                    <i class="fa-solid fa-info-circle text-blue-600 mr-2"></i>
                    Demo Credentials:
                </p>
                <div class="space-y-2 text-xs text-slate-600 bg-slate-50 p-3 rounded-lg">
                    <p><strong>Owner:</strong> owner@minimarket.test / password</p>
                    <p><strong>Manajer Toko:</strong> manager@minimarket.test / password</p>
                    <p><strong>Supervisor:</strong> supervisor@minimarket.test / password</p>
                    <p><strong>Kasir:</strong> cashier@minimarket.test / password</p>
                    <p><strong>Gudang:</strong> warehouse@minimarket.test / password</p>
                </div>
            </div>
            </div>

            <!-- Footer -->
            <p class="text-center text-slate-600 text-xs mt-4">
                &copy; 2026 Mini Market Management System. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
