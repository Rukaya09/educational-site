@extends('layouts.app')

@section('content')
<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.5s ease-out;
    }

    .custom-input {
        border: none; 
        border-bottom: 2px solid #113946; /
        outline: none;
        padding: 0.5rem; 
        width: 100%;
        background-color: transparent; 
        transition: border-color 0.3s; 
    }

    .custom-input:focus {
        border-bottom-color: #113946; 
    }

    .submit-btn {
        transition: transform 0.3s, background-color 0.3s; 
    }

    .submit-btn {
        background-color: #113946; 
        transform: scale(1.05); 
    }


   
</style>

<div class="flex justify-center my-8">
    <div class="w-full max-w-6xl bg-gray-100 p-4 rounded-lg shadow-lg">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Left Column: Image and Text -->
            <div class="w-full  bg-[#113946]  p-8 rounded-lg shadow-lg space-y-4">
            <div class=" z-0">
             <svg version="1.0" xmlns="http://www.w3.org/2000/svg"  width="97.000000pt" height="76.000000pt" viewBox="0 0 97.000000 96.000000"  preserveAspectRatio="xMidYMid meet">  <g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none"> <path d="M597 830 c-5 -25 0 -39 29 -77 78 -103 128 -235 122 -323 -5 -66 -40 -122 -112 -177 -51 -39 -138 -83 -163 -83 -11 0 -28 -7 -39 -15 -17 -13 -14 -14 36 -9 97 10 144 30 197 87 66 71 93 116 102 178 16 98 -29 234 -126 387 l-40 63 -6 -31z"/> <path d="M550 763 c0 -17 28 -84 65 -157 72 -143 86 -201 62 -250 l-16 -31 0 31 c-1 36 -18 61 -46 66 -11 2 -25 14 -31 26 l-12 23 -10 -30 c-12 -35 -53 -51 -77 -31 -19 16 -19 30 1 44 18 14 22 80 5 100 -6 7 -29 21 -51 31 -22 10 -40 24 -40 32 0 7 -4 13 -9 13 -5 0 -16 3 -25 6 -12 5 -16 -1 -16 -22 -1 -16 -7 -40 -15 -54 -17 -30 -19 -76 -4 -86 7 -4 2 -16 -14 -33 -14 -14 -28 -39 -32 -56 -6 -28 -5 -29 9 -11 8 10 17 22 18 25 2 4 17 17 34 28 41 30 104 22 104 -12 0 -27 29 -55 58 -55 12 0 29 11 38 25 14 21 19 23 31 13 8 -7 25 -17 37 -23 17 -9 21 -20 20 -53 0 -23 2 -42 5 -42 14 0 60 84 66 119 10 59 -11 126 -81 260 -36 69 -68 128 -70 130 -2 2 -4 -9 -4 -26z m-155 -228 c0 -25 -4 -30 -25 -30 -28 0 -39 27 -19 51 20 24 44 13 44 -21z m95 -32 c0 -9 -14 -13 -41 -13 -33 0 -40 3 -35 16 3 9 6 21 6 29 0 10 8 9 35 -3 19 -9 35 -22 35 -29z"/> <path d="M430 685 c0 -8 9 -19 19 -25 11 -5 23 -19 26 -30 10 -33 25 -23 24 18 0 26 -3 32 -8 18 -7 -17 -9 -16 -24 8 -19 29 -37 34 -37 11z"/> <path d="M282 548 c-8 -32 -9 -33 -21 -10 -6 12 -18 22 -26 22 -23 0 -18 -16 10 -34 14 -9 25 -24 26 -34 1 -9 7 1 14 23 7 22 18 39 25 37 15 -3 8 20 -8 26 -6 2 -15 -12 -20 -30z"/> <path d="M543 524 c-5 -14 11 -33 28 -34 14 0 19 34 7 42 -19 12 -28 10 -35 -8z"/> <path d="M212 463 c-9 -15 -12 -15 -27 -3 -14 12 -18 12 -26 -1 -13 -21 -11 -27 10 -38 14 -8 20 -7 25 4 4 11 13 14 29 10 31 -8 45 20 17 35 -15 8 -21 6 -28 -7z"/> <path d="M190 373 c0 -21 -7 -36 -19 -42 -28 -16 -55 -79 -41 -96 10 -13 16 -12 41 1 16 8 29 19 29 24 0 6 5 10 10 10 6 0 10 -8 10 -18 0 -23 40 -62 63 -62 10 0 29 8 43 17 22 14 27 14 35 2 5 -8 6 -23 3 -34 -5 -16 -4 -18 7 -8 7 7 29 13 48 13 53 0 120 37 139 76 15 33 15 35 -8 59 -33 36 -66 32 -110 -12 -20 -21 -42 -47 -48 -58 -11 -19 -13 -19 -25 -3 -12 15 -16 16 -33 3 -29 -22 -71 -19 -88 8 -24 36 -31 101 -12 116 9 7 16 19 16 25 0 6 -7 2 -15 -8 -15 -20 -15 -20 -30 0 -14 18 -14 17 -15 -13z m-1 -94 c-24 -19 -49 -25 -49 -12 0 4 12 20 27 35 24 25 28 26 36 12 7 -13 4 -21 -14 -35z m349 9 c6 -6 12 -14 12 -19 0 -12 -68 -45 -107 -52 -50 -10 -51 11 -4 55 42 40 64 43 99 16z"/> <path d="M377 345 c-17 -23 -17 -25 4 -35 17 -10 24 -8 42 11 20 21 20 22 2 35 -25 18 -27 18 -48 -11z"/> <path d="M297 318 c-5 -18 -8 -19 -22 -8 -24 20 -29 4 -6 -19 26 -26 31 -26 31 -1 0 11 7 23 15 26 8 4 12 10 9 15 -9 15 -21 10 -27 -13z"/> </g> 
            </svg> 

            </div>
              <strong> 
                <h1 class="text-xl text-white font-bolder mb-2">Get In Touch</h1>
             </strong>
              <p class="text-white mt-3">Address</p>
             <p class="text-white ">
               Jehangir Chowk, Shaheed Gunj, Srinagar, Jammu and Kashmir 190009
              </p>
             <p class="text-white mt-3">E-mail</p>
             <p class="text-white"> alnahdahacademy@gmail.com</p>
             <p class="text-white mt-3">Phone</p> 
             <p class="text-white "> +91 7889327313</p>   
            </div>

            <!-- Right Column: Form with Background Image -->
            <div class="w-full bg-opacity-50 backdrop-blur-lg p-8 rounded-lg shadow-lg space-y-4 bg-image">
                <h2 class="text-3xl font-semibold text-#113946-800">Contact Us</h2>
                <p class="text-lg text-gray-700">
                    Please fill out the form below, and we'll get back to you as soon as possible.
                </p>

                <!-- Form -->
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-lg font-medium">Name</label>
                        <input type="text" id="name" name="name" class="custom-input" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-lg font-medium">Email</label>
                        <input type="email" id="email" name="email" class="custom-input" required>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 text-lg font-medium">Message</label>
                        <textarea id="message" name="message" class="custom-input" rows="4" required></textarea>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="submit-btn px-8 py-3 bg-blue-500 text-white font-semibold rounded-md">Submit</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

@include('livewire.layout.footer')
@endsection