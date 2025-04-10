@extends('layouts.app')
@section('content')
<body class="bg-gray-50">
    <div class="container mx-auto p-8">
        <!-- Two-column layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-transparent p-6 rounded-lg shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">Book Cover</h2>
                <img src="/assets/images/bookcover.jpeg" alt="Book Cover" class="w-full h-15 rounded-lg">
                <div class="mt-4">
                    <a href="/assets/books/subheading.pdf" download="subheading.pdf" class="bg-[#113946] text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                        Download PDF
                    </a>
    
                </div>
            </div>

            <!-- Column 2: Book Description -->
            <div class="bg-transparent p-6 rounded-lg shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">Book Description</h2>
                <p class="text-gray-700">
                    This is a fascinating book about the wonders of the universe. It covers topics ranging from the Big Bang to the mysteries of black holes. Written by a renowned astrophysicist, this book is perfect for anyone interested in space and science.
                </p>
                <ul class="mt-4 text-gray-600">
                    <li><strong>Author:</strong> John Doe</li>
                    <li><strong>Published:</strong> 2023</li>
                    <li><strong>Pages:</strong> 300</li>
                    <li><strong>Genre:</strong> Science, Non-Fiction</li>
                </ul>
                <div class="mt-6">
                    <a href="#" class="bg-[#113946] text-white px-4 py-2 rounded-lg hover:bg-[#113946] transition duration-300">
                        Buy Now
                    </a>
                </div>
            </div>
        </div>
    </div>

@include('livewire.layout.footer')
@endsection