@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<nav class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <!-- Left: Logo -->
            <div class="shrink-0 text-xl font-bold">
                <a href="/admin/dashboard">Dashbord</a>
            </div>

            <!-- Desktop Menu -->
            <div class="flex justify-between items-center space-x-4">
                <div class="hidden md:flex space-x-6">
                    <a href="/admin/dashboard" class="hover:text-gray-300">Categories</a>
                    <a href="/admin/users" class="hover:text-gray-300">Quizs</a>
                    <span>Welcome, {{ $name }}</span>
                </div>

                <!-- Right: Profile + Logout -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/admin/logout" class="px-3 py-1 border border-gray-400 rounded hover:bg-gray-700">
                        Logout
                    </a>
                </div>
            </div>

            <!-- Mobile Button -->
            <div class="md:hidden">
                <button id="mobileMenuBtn" class="text-gray-300 hover:text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 space-y-3">
        <a href="/admin/dashboard" class="block text-gray-300 hover:text-white">Dashboard</a>
        <a href="/admin/users" class="block text-gray-300 hover:text-white">Users</a>
        <a href="/admin/quizzes" class="block text-gray-300 hover:text-white">Quizzes</a>
        <a href="/admin/results" class="block text-gray-300 hover:text-white">Results</a>

        <div class="border-t border-gray-700 pt-3">
            <span class="block text-gray-400">Welcome, {{ $name }}</span>
            <a href="/admin/logout" class="block mt-2 text-gray-300 hover:text-white">Logout</a>
        </div>
    </div>
</nav>
@endsection
<script>
    const btn = document.getElementById('mobileMenuBtn');
    const menu = document.getElementById('mobileMenu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>