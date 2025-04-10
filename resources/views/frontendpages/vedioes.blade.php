@extends('layouts.app')

@section('content')
    <div class="flex justify-center my-8">
        <div class="w-full max-w-6xl bg-gray-100 p-4 rounded-lg shadow-lg">
            <!-- Two-Column Layout with 50% Width for Both -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Left Column: Video with 50% Width -->
                <div class="relative w-full h-0 pb-[56.25%] overflow-hidden rounded-lg">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                            src="https://www.youtube.com/embed/C21VWxClQlE" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                
                </div>
                

                <!-- Right Column: Text with Glassmorphism and 50% Width -->
                <div class="w-full bg-white bg-opacity-50 backdrop-blur-lg p-8 rounded-lg shadow-lg space-y-4">
                    <h2 class="text-3xl font-semibold text-gray-800">Al-Nahdah Academy Of Islamic Sciences</h2>
                    <p class="text-lg text-gray-700">
                     Provides a range of exceptional courses, including the Fiqh Course (Islamic Jurisprudence), Arabic Syntax & Grammar Course (Arabic Language), and numerous forthcoming offerings via live Zoom classes and YouTube.
                    
                </div>

            </div>
        </div>
    </div>

    @include('livewire.layout.footer')
@endsection
