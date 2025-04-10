@extends('layouts.app')

@section('content')
@vite('resources/css/cards.css')

<style>
    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }

    .animate-marquee {
        animation: marquee 10s linear infinite;
    }

    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }

    .animate-blink {
        animation: blink 1s infinite;
        color: #113946;
    }
</style>

<div class="bg-cover bg-center min-h-[250px] relative p-6 sm:p-8 md:p-12" style="background-image: url('/assets/images/banner1.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Dark overlay -->
    <div class="relative z-10 h-full">
        <h2 class="text-white text text-4xl sm:text-5xl md:text-6xl font-bold">Al-Nahdah Academy Of Islamic Sciences</h2> <!-- Increased font size -->
        <div class="text-white text text-lg sm:text-xl mt- md:text-2xl">Al Nahdah's Courses</div> <!-- Increased font size -->
    </div>
</div>

<div class="vision-background bg-gray-100 py-12">
    <div class="text-center">
        <h2 class="text-4xl bg-[#113946] font-semibold text-white">Admissions</h2>
    </div>

    <!-- Marquee Section for Announcement -->
    <div class="blinks-course my-6 flex items-center border border-gray-300 p-2 rounded">
        <span class="blink-course text-xl font-bold mr-4 animate-blink">New</span>
        <div class="marquee-container overflow-hidden whitespace-nowrap flex-1">
            <div class="marquee-text inline-block animate-marquee">
                Admissions Closed at AlNahdah Academy of Islamic Sciences
            </div>
        </div>
    </div>

    <!-- Swiper Section for Courses -->
    <div class="container-admission swiper-container my-12">
        <div class="swiper-wrapper">
            <!-- Course 1 -->
            <div class="swiper-slide">
                <h3 class="text-xl font-semibold">Course</h3>
                <div class="text-black text-lg mt-4">Islamic Fiqh</div>
                <div class="mt-4">
                <button><a href="{{route('frontendpages.Admissionform')}}">Apply</a></button>

                </div>
            </div>

            <!-- Course 2 -->
            <div class="swiper-slide">
                <h3 class="text-xl font-semibold">Course</h3>
                <div class="text-black text-lg mt-4">Tajwid Al Quran</div>
                <div class="mt-4">
                   <button><a href="{{route('frontendpages.Admissionform')}}">Apply</a></button>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="swiper-slide">
                <h3 class="text-xl font-semibold">Course</h3>
                <div class="text-black text-lg mt-4">Arabic Grammar and Language</div>
                <div class="mt-4">
                    <button><a href="{{route('frontendpages.Admissionform')}}">Apply</a></button>
                </div>
            </div>

            <!-- Course 4 -->
            <div class="swiper-slide">
                <h3 class="text-xl font-semibold">Course</h3>
                <div class="text-black text-lg mt-4">Seerah</div>
                <div class="mt-4">
                   <button><a href="{{route('frontendpages.Admissionform')}}">Apply</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Courses Section -->
<div class="admission-divisions-more mt-1">
    <div class="admission-navbar text-center text-lg italic mb-6 p-5 text-white" style="background-color: #113946">
        <i>Explore Al-Nahdah's  Upcoming Courses</i>
    </div>

    <!-- Swiper Container for Additional Courses -->
    <div class="container-admission swiper-container my-12">
        <div class="swiper-wrapper">
            <!-- Course 1 -->
            <div class="swiper-slide">
                <div class="p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Hadith</h3>
                    <p class="text-gray-600 mt-2">Dive deep into the teachings of the Prophet Muhammad (PBUH).</p>
                    <div class="mt-4">
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
                            <a href="{{route('frontendpages.Admissionform')}}">Apply</a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Course 2 -->
            <div class="swiper-slide">
                <div class="p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Principles of Hadith</h3>
                    <p class="text-gray-600 mt-2">Learn the methodology behind Hadith sciences.</p>
                    <div class="mt-4">
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
                         <a href="{{route('frontendpages.Admissionform')}}">Apply</a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="swiper-slide">
                <div class="p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Principles of Fiqh</h3>
                    <p class="text-gray-600 mt-2">Understand the foundations of Islamic jurisprudence.</p>
                    <div class="mt-4">
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
                        <a href="{{route('frontendpages.Admissionform')}}">Apply</a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Course 4 -->
            <div class="swiper-slide">
                <div class="p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Principles of Tafsīr</h3>
                    <p class="text-gray-600 mt-2">Explore the science of Quranic exegesis.</p>
                    <div class="mt-4">
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
                            <a href="{{route('frontendpages.Admissionform')}}">Apply</a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Course 5 -->
            <div class="swiper-slide">
                <div class="p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Nazira Quran</h3>
                    <p class="text-gray-600 mt-2">Learn to read the Quran fluently with proper pronunciation.</p>
                    <div class="mt-4">
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
                            <a href="{{route('frontendpages.Admissionform')}}">Apply</a>

                        </button>
                    </div>
                </div>
            </div>

            <!-- Course 6 -->
            <div class="swiper-slide">
                <div class="p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Islamic History</h3>
                    <p class="text-gray-600 mt-2">Discover the rich history of Islamic civilization.</p>
                    <div class="mt-4">
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
                            <a href="{{route('frontendpages.Admissionform')}}">Apply</a>

                        </button>
                    </div>
                </div>
            </div>

            <!-- Course 7 -->
            <div class="swiper-slide">
                <div class="p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Islamic Creed</h3>
                    <p class="text-gray-600 mt-2">Study the core beliefs of Islam.</p>
                    <div class="mt-4">
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
                            <a href="{{route('frontendpages.Admissionform')}}">Apply</a>

                        </button>
                    </div>
                </div>
            </div>

            <!-- Course 8 -->
            <div class="swiper-slide">
                <div class="p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Arabic Grammar</h3>
                    <p class="text-gray-600 mt-2">Master the rules of Arabic language and grammar.</p>
                    <div class="mt-4">
                        <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
                        <a href="{{route('frontendpages.Admissionform')}}">Apply</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Swiper.js Library CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                }
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            }
        });
    });
</script>

@include('livewire.layout.footer')
@endsection