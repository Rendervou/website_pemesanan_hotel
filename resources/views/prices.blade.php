@extends('layouts.app')

@section('title', 'Daftar Harga - Hotel Grand Paradise')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-bold mb-8 text-center">Daftar Harga Kamar</h1>
    
    <!-- Tabel Harga -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-600">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                        No
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Tipe Kamar
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Harga per Malam
                    </th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-gray-50">