<?php

use Livewire\Volt\Component;
use App\Livewire\Actions\Logout;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>
 @vite('resources/css/style.css')

<div class="ml-auto items-start gap-9 flex sm:flex md:gap-6 lg:flex-row xl:flex-row">
    <a class="rounded-xl bg-white px-4 py-2 flex items-center justify-center font-bold my-auto gap-2" href="{{route('login')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
        </svg>
        +91 7889327313
    </a>
    <a class="rounded-xl bg-white px-4 py-2 flex items-center justify-center font-bold my-auto gap-2" href="mailto:example@example.com">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2 0v8h12V4H2zm12 1.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v6a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-6z"/>
        </svg>
        alnahdahacademy@gmail.com
    </a>
</div>

<nav x-data="{ open: false }" class=" fixed top-0 left-0 w-full z-10 sm:sticky top-0 left-0 right-0 w-full"style="background-color:#113946; border-color: #113946;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center ">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                         <svg version="1.0" xmlns="http://www.w3.org/2000/svg"  width="97.000000pt" height="56.000000pt" viewBox="0 0 97.000000 96.000000"  preserveAspectRatio="xMidYMid meet">  <g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none"> <path d="M597 830 c-5 -25 0 -39 29 -77 78 -103 128 -235 122 -323 -5 -66 -40 -122 -112 -177 -51 -39 -138 -83 -163 -83 -11 0 -28 -7 -39 -15 -17 -13 -14 -14 36 -9 97 10 144 30 197 87 66 71 93 116 102 178 16 98 -29 234 -126 387 l-40 63 -6 -31z"/> <path d="M550 763 c0 -17 28 -84 65 -157 72 -143 86 -201 62 -250 l-16 -31 0 31 c-1 36 -18 61 -46 66 -11 2 -25 14 -31 26 l-12 23 -10 -30 c-12 -35 -53 -51 -77 -31 -19 16 -19 30 1 44 18 14 22 80 5 100 -6 7 -29 21 -51 31 -22 10 -40 24 -40 32 0 7 -4 13 -9 13 -5 0 -16 3 -25 6 -12 5 -16 -1 -16 -22 -1 -16 -7 -40 -15 -54 -17 -30 -19 -76 -4 -86 7 -4 2 -16 -14 -33 -14 -14 -28 -39 -32 -56 -6 -28 -5 -29 9 -11 8 10 17 22 18 25 2 4 17 17 34 28 41 30 104 22 104 -12 0 -27 29 -55 58 -55 12 0 29 11 38 25 14 21 19 23 31 13 8 -7 25 -17 37 -23 17 -9 21 -20 20 -53 0 -23 2 -42 5 -42 14 0 60 84 66 119 10 59 -11 126 -81 260 -36 69 -68 128 -70 130 -2 2 -4 -9 -4 -26z m-155 -228 c0 -25 -4 -30 -25 -30 -28 0 -39 27 -19 51 20 24 44 13 44 -21z m95 -32 c0 -9 -14 -13 -41 -13 -33 0 -40 3 -35 16 3 9 6 21 6 29 0 10 8 9 35 -3 19 -9 35 -22 35 -29z"/> <path d="M430 685 c0 -8 9 -19 19 -25 11 -5 23 -19 26 -30 10 -33 25 -23 24 18 0 26 -3 32 -8 18 -7 -17 -9 -16 -24 8 -19 29 -37 34 -37 11z"/> <path d="M282 548 c-8 -32 -9 -33 -21 -10 -6 12 -18 22 -26 22 -23 0 -18 -16 10 -34 14 -9 25 -24 26 -34 1 -9 7 1 14 23 7 22 18 39 25 37 15 -3 8 20 -8 26 -6 2 -15 -12 -20 -30z"/> <path d="M543 524 c-5 -14 11 -33 28 -34 14 0 19 34 7 42 -19 12 -28 10 -35 -8z"/> <path d="M212 463 c-9 -15 -12 -15 -27 -3 -14 12 -18 12 -26 -1 -13 -21 -11 -27 10 -38 14 -8 20 -7 25 4 4 11 13 14 29 10 31 -8 45 20 17 35 -15 8 -21 6 -28 -7z"/> <path d="M190 373 c0 -21 -7 -36 -19 -42 -28 -16 -55 -79 -41 -96 10 -13 16 -12 41 1 16 8 29 19 29 24 0 6 5 10 10 10 6 0 10 -8 10 -18 0 -23 40 -62 63 -62 10 0 29 8 43 17 22 14 27 14 35 2 5 -8 6 -23 3 -34 -5 -16 -4 -18 7 -8 7 7 29 13 48 13 53 0 120 37 139 76 15 33 15 35 -8 59 -33 36 -66 32 -110 -12 -20 -21 -42 -47 -48 -58 -11 -19 -13 -19 -25 -3 -12 15 -16 16 -33 3 -29 -22 -71 -19 -88 8 -24 36 -31 101 -12 116 9 7 16 19 16 25 0 6 -7 2 -15 -8 -15 -20 -15 -20 -30 0 -14 18 -14 17 -15 -13z m-1 -94 c-24 -19 -49 -25 -49 -12 0 4 12 20 27 35 24 25 28 26 36 12 7 -13 4 -21 -14 -35z m349 9 c6 -6 12 -14 12 -19 0 -12 -68 -45 -107 -52 -50 -10 -51 11 -4 55 42 40 64 43 99 16z"/> <path d="M377 345 c-17 -23 -17 -25 4 -35 17 -10 24 -8 42 11 20 21 20 22 2 35 -25 18 -27 18 -48 -11z"/> <path d="M297 318 c-5 -18 -8 -19 -22 -8 -24 20 -29 4 -6 -19 26 -26 31 -26 31 -1 0 11 7 23 15 26 8 4 12 10 9 15 -9 15 -21 10 -27 -13z"/> </g> </svg> 
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-6 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('welcome')" :active="request()->routeIs('welcome')" wire:navigate>
                        {{ __('Home') }}
                    </x-nav-link>

                    
                    <div class="relative group mt-5 z-10">

                       <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                          {{ __('About') }}
                           <svg class=" mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </x-nav-link>
                       <div class="absolute left-0 hidden mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-20 group-hover:block sm:w-48 md:w-56">
                         <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Introduction</a>
                         <a href="{{ route('frontendpages.vision&mission') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Vision & Mission</a>
                       </div>
                    </div>
                    <div class="relative group mt-5">
                       <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                          {{ __('Academics') }}
                           <svg class=" mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </x-nav-link>
                       <div class="absolute left-0 hidden mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-20 group-hover:block sm:w-48 md:w-56">
                         <a href="{{ route('frontendpages.Admissionform') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Admission</a>
                         <a href="{{ route('frontendpages.courses') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Courses</a>
                         <a href="{{ route('frontendpages.examination') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Examinations</a>
                         <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Results</a>

                       </div>
                    </div>
                   <div class="relative group mt-5">
                        <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                            {{ __('Media') }}
                            <svg class=" mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </x-nav-link>
                            <div class="absolute left-0 hidden mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-[2px] group-hover:block sm:w-48 md:w-56">
                            <a href="{{ route('frontendpages.images') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Images</a>
                            <a href="{{ route('frontendpages.vedioes') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Vedioes</a>
                            <a href="{{ route('frontendpages.books') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Books</a>
                    
                            </div>
                    </div>
                    <div class="relative group mt-5">
                       <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                          {{ __('Services') }}
                           <svg class=" mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </x-nav-link>
                        <div class="absolute left-0 hidden mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-[2px] group-hover:block sm:w-48 md:w-56">
                                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Careers</a>
                                <a href="{{ route('frontendpages.counselling') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Personality Development</a>
                                <a href="{{ route('frontendpages.counselling') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Counselling</a>
                        </div>
                   </div>
                   <div class="relative group mt-5">
                       <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('frontendpages.feedback')" :active="request()->routeIs('frontendpages.feedback')" wire:navigate>
                          {{ __('Contact') }}
                           <svg class=" mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </x-nav-link>
                        <div class="absolute left-0 hidden mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-[2px] group-hover:block sm:w-48 md:w-56">
                         <a href="{{ route('frontendpages.feedback') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Feedback</a>
                         <a href="{{ route('frontendpages.feedback') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Complaints</a>
                         <a href="{{ route('frontendpages.feedback') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Suggestions</a>
                        </div>
                   </div>
                   <!-- <div class="relative group mt-5">
                       <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                          {{ __('Events') }}
                           <svg class=" mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </x-nav-link>
                        <div class="absolute left-0 hidden mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-[2px] group-hover:block sm:w-48 md:w-56">
                         <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Webinar</a>
                         <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Seminar</a>
                         <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Book Fair</a>
                   
                        </div>
                   </div>   -->
                   <div class="relative group mt-5">
                       <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('frontendpages.zakaat')" :active="request()->routeIs('dashboard')" wire:navigate>
                          {{ __('Donate') }}
                           <svg class=" mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </x-nav-link>
                        <div class="absolute left-0 hidden mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl group-hover:block w-30">

                         <a href="{{ route('frontendpages.zakaat') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Zakaat</a>
                        </div>
                   </div>
                   <div class="relative group mt-5">
                       <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('frontendpages.fatwa')" :active="request()->routeIs('dashboard')" wire:navigate>
                          {{ __('fatwa') }}
                         
                        </x-nav-link>
                   </div>
                   <div class="relative group mt-5">
                       <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                          {{ __('Account') }}
                           <svg class=" mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </x-nav-link>
                        <div class="absolute left-0 hidden mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl group-hover:block w-auto">

                         <a href="{{ route('login') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Login</a>
                         <a href="{{ route('register') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Register</a>

                        </div>
                   </div>

                </div>
            </div>
            <!-- <div class="ml-auto items-center gap-9 hidden lg:flex">
                    <button class="font-bold text-white text-xl">
                        Register
                    </button>
                  <a class="rounded-xl bg-white px-4 py-2 flex items-center justify-center font-bold my-auto" href="{{route('login')}}">
                    login
                  </a>
           </div> -->

            <!-- Settings Dropdown -->
          
            <!-- Hamburger -->
            <div class="-me-2 mt-4 flex items-center sm:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
           </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">      

        <!-- Responsive Settings Options -->
        <div class="mt-3 space-y-1 flex flex-col gap-5 p-2 pt-2 pb-3">
         
                   <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Home') }}
                    </x-nav-link>
                <div x-data="{ openAbout: false, openAcademics: false, openMedia: false, openServices: false, openContact: false, openEvents: false, openDonate: false, openAccount: false }">

                         
                  <div class="relative group mt-5">
                      <x-nav-link class="text-xl font-bold text-white hover:text-white/95" wire:navigate @click="openAbout = !openAbout">
                                {{ __('About') }}
                                <svg class=" mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                       </x-nav-link>
                        <div x-show="openAbout" x-transition class="absolute left-0 mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-20 sm:w-48 md:w-56">
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Introduction</a>
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Vision & Mission</a>
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Achievements</a>
                       </div>
                 
                       <div class="relative group mt-5">
                                <x-nav-link class="text-xl font-bold text-white hover:text-white/95" wire:navigate @click="openAcademics = !openAcademics">
                                    {{ __('Academics') }}
                                    <svg class="mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </x-nav-link>
                                <div x-show="openAcademics" x-transition class="absolute left-0 mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-40 sm:w-48 md:w-56">
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Admission</a>
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Courses</a>
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Examinations</a>
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Results</a>
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Affliate Trust</a>
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Affliate Academy</a>
                                </div>
                     </div>
                <!-- Media Section -->
    <div class="relative group mt-5">
        <x-nav-link class="text-xl font-bold text-white hover:text-white/95" wire:navigate @click="openMedia = !openMedia">
            {{ __('Media') }}
            <svg class="mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </x-nav-link>
        <div x-show="openMedia" x-transition class="absolute left-0 mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-40 sm:w-48 md:w-56">
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Images</a>
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Videos</a>
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Books</a>
        </div>
    </div>

    <!-- Services Section -->
    <div class="relative group mt-5">
        <x-nav-link class="text-xl font-bold text-white hover:text-white/95" wire:navigate @click="openServices = !openServices">
            {{ __('Services') }}
            <svg class="mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </x-nav-link>
        <div x-show="openServices" x-transition class="absolute left-0 mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-50 sm:w-48 md:w-56">
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Careers</a>
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Personality Development</a>
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Counselling</a>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="relative group mt-5">
        <x-nav-link class="text-xl font-bold text-white hover:text-white/95" wire:navigate @click="openContact = !openContact">
            {{ __('Contact') }}
            <svg class="mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </x-nav-link>
        <div x-show="openContact" x-transition class="absolute left-0 mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-40 sm:w-48 md:w-56">
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Feedback</a>
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Complaints</a>
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Suggestions</a>
        </div>
    </div>

    <!-- Events Section -->
    <div class="relative group mt-5">
        <x-nav-link class="text-xl font-bold text-white hover:text-white/95" wire:navigate @click="openEvents = !openEvents">
            {{ __('Events') }}
            <svg class="mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </x-nav-link>
        <div x-show="openEvents" x-transition class="absolute left-0 mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-40 sm:w-48 md:w-56">
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Webinar</a>
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Seminar</a>
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Book Fair</a>
        </div>
    </div>

    <!-- Donate Section -->
    <div class="relative group mt-5">
        <x-nav-link class="text-xl font-bold text-white hover:text-white/95" wire:navigate @click="openDonate = !openDonate">
            {{ __('Donate') }}
            <svg class="mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </x-nav-link>
        <div x-show="openDonate" x-transition class="absolute left-0 mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-30">
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Zakaat</a>
        </div>
    </div>

    <!-- Fatwa Section -->
    <div class="relative group mt-5">
        <x-nav-link class="text-xl font-bold text-white hover:text-white/95" wire:navigate @click="openFatwa = !openFatwa">
            {{ __('Fatwa') }}
        </x-nav-link>
    </div>

    <!-- Account Section -->
    <div class="relative group mt-5">
        <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate @click="openAccount = !openAccount">
            {{ __('Account') }}
            <svg class="mt-1 w-4 h-4 inline-block text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </x-nav-link>
        <div x-show="openAccount" x-transition class="absolute left-0 mt-2 space-y-2 bg-white text-black shadow-lg rounded-xl w-auto">
            <a href="{{ route('login') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Login</a>
            <a href="{{ route('register') }}" class="block px-4 py-2 text-sm hover:border-b-2 hover:border-[#113946]">Register</a>
        </div>
    </div>

</div>

                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
</nav>
