<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hotel Grand Paradise')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .navbar-link {
            transition: all 0.3s ease;
        }
        .navbar-link:hover {
            color: #3B82F6;
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                        Hotel Grand Paradise
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="navbar-link px-3 py-2 rounded-md text-gray-700 hover:text-blue-600 font-medium">
                        Home
                    </a>
                    <a href="{{ route('products') }}" class="navbar-link px-3 py-2 rounded-md text-gray-700 hover:text-blue-600 font-medium">
                        Produk
                    </a>
                    <a href="{{ route('prices') }}" class="navbar-link px-3 py-2 rounded-md text-gray-700 hover:text-blue-600 font-medium">
                        Daftar Harga
                    </a>
                    <a href="{{ route('about') }}" class="navbar-link px-3 py-2 rounded-md text-gray-700 hover:text-blue-600 font-medium">
                        Tentang Kami
                    </a>
                    <a href="{{ route('booking.form') }}" class="navbar-link px-4 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 font-medium">
                        Pesan Kamar
                    </a>
                    <a href="{{ route('booking.list') }}" class="navbar-link px-3 py-2 rounded-md text-gray-700 hover:text-blue-600 font-medium">
                        Daftar Pesanan
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center">
                <p>&copy; 2025 Hotel Grand Paradise. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>