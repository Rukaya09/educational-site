<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @vite('resources/css/style.css')
        @livewireStyles

    </head>
    <body class="antialiased">
        <div class="relative min-h-screen bg-white/40">
            @if (Route::has('login'))
            @include('livewire.layout.navigation')

            @endif
            <div class="w-full bg-white-500 text-black border  border-[#113946]  p-4  h-[38px]">
              <div class="overflow-hidden">
                        <div class="whitespace-nowrap animate-marquee">
                           <p>This is a notification that will scroll horizontally across the screen. Stay tuned for more updates!</p>
                        </div>
              </div>
          </div>


 <div class="container max-w-full px-4">
  <div class="grid grid-cols-1 sm:grid-cols-2 ">
    <div class="bg-white mt-24 p-6">
      <h2 class="text-2xl font-semibold mb-4">
      Welcome to Al Nahdah Academy  </h2>
      <h2 class="text-2xl font-semibold mb-4 ml-4">
      of Islamic Sciences
      </h2>
      <div class="tagline">
            <p> Where Tradition meets innovotions</p>
        </div>
        <a href="your-link-here"  class="mt-4 ml-8 inline-block text-white px-6 py-2 rounded hover:bg-[#0c2f39] text-center" style="background-color: #113946;">
         Read More
       </a>


    </div>
    <div class="bg-white p-6">
       <img src="/assets/images/banner1.jpg" alt="Banner Image" class="w-full h-auto rounded-lg mb-4">

    </div>
  </div>
</div>

<div class="container max-w-full px-4">
  <div class="grid grid-cols-1 sm:grid-cols-2 ">
    
      <div class="bg-white p-6">
        <img src="/assets/images/boss.jpg" alt="Banner Image" class="w-full h-[500px] rounded-lg mb-4" style="border: 4px solid #113946;">
      </div>
    <div class="bg-white  p-6">
      <h2 class="text-2xl  bg-[#113946]  font-semibold mt-8 text-center text-white">
         Directorial's Insights
     </h2>
     <p class="text-start mt-4">It is with great pleasure and anticipation that I extend my heartfelt welcome to you at the Al Nahdah Academy of Islamic Sciences. As the Director, it is indeed an honour to be a part of an institution that thrives on the intricate tapestry of Islamic knowledge, seamlessly blending tradition with the contemporary. Nestled in the vibrant city of Srinagar, Jammu and Kashmir, India, our academy stands as a testament to the commitment of fostering profound understanding in Islamic sciences.</p>
     <h1 class="text-[#113946] mt-6"><strong>Abd Al Ali Aarif Nazir</strong></h1>
     <p class="mt-2">Director of Alnahdah Academy of Islamic Sciences
     </p>
    
        <a href="your-link-here"  class="mt-5 inline-block text-white px-6 py-2 rounded hover:bg-[#0c2f39] text-center" style="background-color: #113946;">
         Read More
       </a>


    </div>
  </div>
</div>

<div class="container mx-auto px-4">
<h5 class="text-xl ml-3 text-white font-semibold text-center my-8 px-4 py-2" style="background-color: #113946;">
     Catch Our Upcoming Events

</h5>

<!-- Card Section -->
 <!-- Card Section -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    <!-- Card 1 -->
    <div class="bg-white p-6 rounded-lg shadow-lg  hover:shadow-2xl hover:bg-[#113946] hover:text-white duration-300  justify-items-center">
    <img src="/assets/images/mic.jpg" alt="Banner Image" class="w-[126px] h-[126px] rounded-full mb-4 " style="border: 4px solid #113946;">

    <h3 class="text-xl text-center font-semibold mb-4">Seminar on personality development</h3>
        <p class="mt-3">Date:11 OCT 2025</p>
        <p class="mt-3">Timing: 9:30 AM (IST)</p>
        <p class="mt-3">Day:Monday</p>
        <p class="mt-3"> Jehangir Chowk Srinagar </p>
    </div>

    <!-- Card 2 -->
    <div class="bg-white p-6 rounded-lg shadow-lg  hover:shadow-2xl hover:bg-[#113946] hover:text-white duration-300  justify-items-center">
    <img src="/assets/images/boss.jpg" alt="Banner Image" class="w-[126px] h-[126px] rounded-full mb-4 " style="border: 4px solid #113946;">

    <h3 class="text-xl text-center font-semibold mb-4">Blood Donation</h3>
        <p class="mt-3">Date:11 OCT 2025</p>
        <p class="mt-3">Timing: 9:30 AM (IST)</p>
        <p class="mt-3">Day:Monday</p>
        <p class="mt-3"> Jehangir Chowk Srinagar </p>
    </div>

    <!-- Card 3 -->
    <div class="bg-white p-6 rounded-lg shadow-lg  hover:shadow-2xl  hover:bg-[#113946] hover:text-white duration-300  justify-items-center">
    <img src="/assets/images/boss.jpg" alt="Banner Image" class="w-[126px] h-[126px] rounded-full mb-4 " style="border: 4px solid #113946;">

    <h3 class="text-xl text-center font-semibold mb-4">Book Fair</h3>
        <p class="mt-3">Date:11 OCT 2025</p>
        <p class="mt-3">Timing: 9:30 AM (IST)</p>
        <p class="mt-3">Day:Monday</p>
        <p class="mt-3"> Jehangir Chowk Srinagar </p>
    </div>

    <!-- Card 4 -->
    <div class="bg-white p-6 rounded-lg shadow-lg  hover:scale-105 hover:shadow-2xl hover:bg-[#113946] hover:text-white duration-300  justify-items-center">
    <img src="/assets/images/boss.jpg" alt="Banner Image" class="w-[126px] h-[126px] rounded-full mb-4 " style="border: 4px solid #113946;">

    <h3 class="text-xl text-center font-semibold mb-4">Plantation Drive</h3>
        <p class="mt-3">Date:11 OCT 2025</p>
        <p class="mt-3">Timing: 9:30 AM (IST)</p>
        <p class="mt-3">Day:Monday</p>
        <p class="mt-3"> Jehangir Chowk Srinagar </p>
    </div>
</div>
</div>
<div class="max-w-full mx-auto p-6"style="background-color:#EEEEEE;">
  <!-- Centered Heading with Underline -->

  <h2 class="text-2xl font-semibold border-b-2 border-gray-300 pb-2 mb-6 text-center">Know About Islam: Exploring the Essence of a Profound Faith.
  </h2>
   <p class="mb-4"> Islam, a monotheistic religion that spans centuries, has shaped the lives of millions around the globe. Rooted in the teachings of Prophet Muhammad ﷺ and the Holy Quran, Islam is a comprehensive way of life that covers spiritual, social, and ethical dimensions. The Pillars of Islam: Islam is built upon the Five Pillars, which serve as the foundation of a Muslim's faith and practice. These pillars include:</p>
  <!-- Card container -->
  <div class="grid grid-cols-3 gap-6">
    <!-- Top Row of 3 Cards -->
    <div class="bg-white p-4 shadow-lg rounded-lg justify-items-center">
      <img src="/assets/images/shahada.jpeg" alt="Banner Image" class="w-[126px] h-[126px] mb-4 ">
      <h3 class="font-semibold text-xl">Shahada (Declaration of Faith):</h3>
      <p class="mt-2">The core tenet of Islam is bearing witness that there is no god but Allah, and Muhammad ﷺ is His final Messenger. This declaration signifies the oneness of God and the prophethood of Muhammad ﷺ.</p>
    </div>
    <div class="bg-white p-4 shadow-lg rounded-lg justify-items-center">
    <img src="/assets/images/salah.jpeg" alt="Banner Image" class="w-auto h-[126px] mb-4 ">
      <h3 class="font-semibold text-xl">Salah (Prayer)</h3>
      <p class="mt-2">Muslims engage in ritual prayers five times a day, fostering a connection with the divine and promoting discipline and mindfulness in daily life</p>
    </div>
    <div class="bg-white p-4 shadow-lg rounded-lg justify-items-center">
    <img src="/assets/images/zakat.jpeg" alt="Banner Image" class="w-auto h-[126px] mb-4 ">
    <h3 class="font-semibold text-xl">Zakat (Charity)</h3>
      <p class="mt-2">
      The obligation to give to those in need, zakat ensures the equitable distribution of wealth within the Muslim community, promoting compassion and social justice. Zakāt comprises of 2.5% of the yearly savings..</p>
    </div>
  </div>

  <!-- Bottom Row of 2 Cards centered -->
  <div class="flex justify-center gap-6 mt-6">

    <div class="bg-white p-4 shadow-lg rounded-lg w-96 justify-items-center">
      <img src="/assets/images/roza.jpg" alt="Banner Image" class="w-auto h-[126px] mb-4 ">
      <h3 class="font-semibold text-xl">Sawm (Fasting during Ramadan)</h3>
      <p class="mt-2">
      Muslims abstain from food, drink, and other physical needs during daylight hours throughout the holy month of Ramadan, cultivating self-discipline, empathy, and spiritual growth..</p>
    </div>
    <div class="bg-white p-4 shadow-lg rounded-lg w-96 justify-items-center">
    <img src="/assets/images/haj.jpeg" alt="Banner Image" class="w-auto h-[126px] mb-4 ">
      <h3 class="font-semibold text-xl">  Hajj (Pilgrimage to Mecca)</h3>
      <p class="mt-2">
    
      Performing the Hajj pilgrimage, if feasible, is a once-in-a-lifetime obligation for Muslims, fostering unity and equality among believers.</o>    </div>
  </div>
  <p class="mt-5">
    Understanding Islam goes beyond the surface, delving into the rich tapestry of its history, teachings, and values. At Al Nahdah Academy of Islamic Sciences, we strive to cultivate a deep appreciation for Islam, empowering our students to be ambassadors of peace, knowledge, and compassion in a global context. Join us on this enlightening journey as we explore the beauty and wisdom of Islam together.
  </p>
  <div class="flex justify-center items-center">
  <a href="your-link-here" class="inline-block text-white px-6 py-2 rounded hover:bg-[#0c2f39] text-center" style="background-color: #113946;">
    Read More
  </a>
</div>

</div>
<div class="text-center mb-6">
<h1 class="text-3xl font-semibold mt-6 inline-block border-b-2 border-[#113946] pb-2">Al-Nahdah Academy Of Islamic Sciences At Glance
</h1>

</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
  <div class="bg-white p-6 rounded-lg  flex flex-col justify-center items-center text-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="54" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
      <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
      <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
    </svg>
    <p class="text-xl font-semibold">10+</p>
    <p class="text-xl font-semibold">Departments</p>
  </div>
  <div class="bg-white p-6 rounded-lg  flex flex-col justify-center items-center text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
       </svg>
        <p class="text-xl font-semibold">1000+</p>
        <p class="text-xl font-semibold">Students</p>
  </div>
  <div class="bg-white p-6 rounded-lg flex flex-col justify-center items-center text-center">
  <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
  <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
</svg>
    <p class="text-xl font-semibold">10+</p>
    <p class="text-xl font-semibold">Affliations</p>
  </div>

  <div class="bg-white p-6 rounded-lg flex flex-col justify-center items-center text-center">
  <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
  </svg>
    <p class="text-xl font-semibold">5 Countries</p>
    <p class="text-xl font-semibold"> Worldwide Presence</p>
  </div>
  <div class="bg-white p-6 rounded-lg  flex flex-col justify-center items-center text-center">
  <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
  <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
</svg>
    <p class="text-xl font-semibold">2000+</p>
    <p class="text-xl font-semibold">People Connected On Social Media</p>
  </div>
  <div class="bg-white p-6 rounded-lg flex flex-col justify-center items-center text-center">
  <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
  <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z"/>
  <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31"/>
</svg>
    <p class="text-xl font-semibold"> 3+</p>
    <p class="text-xl font-semibold">Providing Comprehensive Education in Multiple Languages</p>
  </div>
</div>

<div class="bg-cover bg-center min-h-[500px]  relative p-6 sm:p-8 md:p-12" style="background-image: url('/assets/images/banner1.jpg');">
 
  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

  <!-- Cards Container -->
  <div class="flex flex justify-center items-center space-y-8 sm:space-y-0 sm:space-x-8 z-10">
    <!-- Card 1 -->
    <div class="bg-transparent border border-white rounded-lg p-6 w-64 sm:w-72 md:w-80 text-cente0r transition-transform transform hover:scale-105 hover:shadow-lg cursor-pointer">
        <h3 class="bg-white rounded-full text-xl mb-4 text-white text-lg sm:text-xl flex justify-center items-center" style="width: 70px; height: 70px;  border-radius: 50%; padding: 15px;">
         <svg version="1.0" xmlns="http://www.w3.org/2000/svg"  width="70" height="70" viewBox="0 0 300.000000 300.000000"  preserveAspectRatio="xMidYMid meet">  <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"> <path d="M1448 2534 c-121 -29 -221 -102 -260 -190 -46 -106 -106 -478 -93 -587 9 -86 49 -203 89 -267 20 -30 36 -58 36 -61 0 -4 -17 -18 -37 -31 -21 -14 -51 -38 -66 -54 -25 -25 -28 -34 -23 -67 5 -30 3 -38 -6 -35 -50 19 -58 19 -83 -6 -27 -27 -31 -55 -15 -87 16 -29 30 -23 30 15 0 38 15 55 45 50 30 -5 65 23 65 52 0 27 26 84 38 84 4 0 16 -16 27 -36 48 -89 138 -135 270 -140 l90 -3 -76 8 c-109 12 -171 35 -229 88 -62 56 -72 86 -37 113 42 33 42 52 -2 135 -22 41 -50 108 -62 148 -19 63 -21 87 -16 202 5 123 34 289 72 418 26 89 77 145 175 191 60 29 73 31 170 31 117 0 149 -10 232 -76 138 -108 208 -270 208 -482 0 -122 -50 -305 -109 -401 -17 -27 -19 -39 -11 -67 16 -54 12 -80 -17 -117 -20 -27 -24 -38 -15 -52 25 -40 -102 -196 -196 -241 -105 -49 -243 -33 -357 43 -49 32 -54 34 -25 9 19 -17 60 -43 90 -58 49 -25 66 -28 155 -28 86 0 106 3 144 24 64 34 145 114 177 175 20 38 33 52 44 49 59 -19 82 -47 95 -116 4 -21 15 -43 24 -50 29 -20 33 -48 14 -106 -14 -44 -31 -69 -80 -118 -66 -64 -206 -163 -258 -181 -16 -6 -24 -11 -17 -11 15 -1 105 38 112 49 3 4 25 20 50 35 25 15 52 35 62 44 9 9 39 38 66 64 48 46 74 92 86 149 6 25 8 26 36 17 42 -15 108 -91 141 -165 48 -106 80 -286 56 -317 -14 -18 -106 -38 -287 -63 -205 -28 -689 -25 -935 6 -197 24 -286 43 -295 61 -11 20 -5 121 11 194 27 121 117 253 201 296 20 10 39 19 40 19 2 0 25 -33 51 -73 27 -39 60 -81 75 -92 17 -12 8 2 -21 34 -26 30 -60 80 -75 112 -15 32 -32 59 -38 59 -18 0 -102 -58 -142 -99 -87 -90 -142 -246 -142 -406 l0 -91 134 -22 c263 -44 408 -55 701 -55 207 0 314 4 410 16 144 19 347 57 356 66 10 10 -8 192 -26 260 -38 148 -120 261 -221 308 -49 22 -54 28 -54 56 -1 43 -32 110 -61 131 -13 9 -39 16 -58 16 l-35 0 37 38 c41 42 46 71 22 129 -14 34 -14 38 4 57 19 21 58 112 88 206 25 79 33 184 23 288 -12 123 -39 212 -90 290 -120 186 -291 263 -482 216z"/> <path d="M1485 2370 c-16 -6 -36 -8 -44 -5 -27 10 -120 -63 -160 -125 -54 -84 -64 -129 -59 -267 6 -139 32 -226 99 -329 68 -105 143 -155 233 -156 64 -1 111 20 174 77 147 133 219 435 140 595 -40 80 -109 154 -174 186 -60 29 -157 40 -209 24z m-98 -50 c-31 -23 -62 -51 -68 -63 -7 -14 5 -7 32 19 64 61 102 77 194 82 75 4 84 2 145 -30 45 -23 76 -48 102 -83 21 -28 38 -53 38 -57 0 -5 -20 7 -44 26 -64 48 -136 71 -226 70 -41 0 -93 -6 -115 -12 -48 -14 -137 -71 -143 -92 -4 -12 -2 -12 14 1 37 32 123 68 186 79 88 14 164 -2 260 -53 66 -35 80 -46 94 -81 21 -52 21 -198 -1 -280 -52 -197 -199 -350 -319 -332 -114 17 -226 152 -271 327 -26 98 -17 255 18 333 29 62 30 90 2 37 -8 -17 -18 -31 -21 -31 -7 0 16 40 45 79 26 34 108 100 125 101 5 0 -16 -18 -47 -40z"/> <path d="M1801 2314 c151 -175 169 -388 54 -620 -79 -161 -173 -237 -295 -238 -51 0 -58 -1 -35 -8 102 -28 240 59 323 204 134 235 119 495 -39 659 l-51 54 43 -51z"/> <path d="M1269 1373 c26 -38 74 -69 121 -77 30 -6 28 -4 -14 13 -27 11 -67 37 -89 58 -39 37 -40 37 -18 6z"/> <path d="M1911 1185 c-1 -29 -54 -134 -89 -177 -71 -90 -191 -164 -308 -192 -33 -8 -48 -15 -33 -15 34 -1 123 26 180 54 74 38 148 103 189 166 41 64 75 151 67 172 -3 6 -6 3 -6 -8z"/> <path d="M1135 1090 c42 -75 144 -141 214 -139 l36 1 -44 9 c-68 13 -127 47 -173 97 -22 26 -37 40 -33 32z"/> <path d="M1150 901 c0 -14 129 -77 204 -100 38 -12 76 -27 84 -34 13 -11 14 -9 1 11 -8 12 -23 22 -34 22 -33 1 -151 46 -205 79 -27 17 -50 27 -50 22z"/> <path d="M1460 752 c0 -13 71 -52 92 -52 7 1 -3 8 -22 16 -19 8 -42 22 -52 31 -11 9 -18 11 -18 5z"/> </g> </svg> 
       </h3>
       <p class="text-white text-sm sm:text-base">
         i have tried from one source (a series on youtube of a renowned scholar), i couldn't continue with that because it felt more of cramming things up without understanding.
       </p>
      <p class="text-white">Muntaha Saleem</p>          
    </div>

    <!-- Card 2 -->
    <div class="bg-transparent border border-white rounded-lg p-6 w-64 sm:w-72 md:w-80 text-center transition-transform transform hover:scale-105 hover:shadow-lg cursor-pointer">
      <h3 class="bg-white rounded-full text-xl mb-4 text-white text-lg sm:text-xl flex justify-center items-center" style="width: 70px; height: 70px;  border-radius: 50%; padding: 15px;">
     <svg version="1.0" xmlns="http://www.w3.org/2000/svg"  width="225.000000pt" height="225.000000pt" viewBox="0 0 225.000000 225.000000"  preserveAspectRatio="xMidYMid meet">  <g transform="translate(0.000000,225.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"> <path d="M909 2130 c-163 -53 -265 -157 -299 -302 -18 -78 -11 -243 16 -391 6 -33 4 -39 -14 -44 -12 -3 -19 -10 -15 -19 5 -14 34 -20 32 -6 -3 19 2 25 11 12 6 -10 9 27 7 110 -2 144 8 173 80 224 l41 29 89 -36 c110 -44 218 -67 328 -68 47 0 83 -5 80 -9 -3 -4 4 -6 15 -3 29 8 35 23 10 23 -29 0 -59 16 -97 53 -39 37 -43 56 -7 33 40 -27 143 -57 216 -63 l67 -6 -42 46 c-23 25 -46 46 -51 46 -5 -1 -13 5 -17 13 -5 8 -9 9 -9 2 0 -6 6 -17 14 -23 8 -7 12 -20 9 -31 -4 -16 -9 -18 -24 -9 -11 5 -24 7 -29 4 -5 -3 -31 5 -58 18 -43 21 -64 24 -116 18 -4 -1 -6 -7 -3 -15 3 -8 1 -17 -6 -20 -7 -2 -5 -5 5 -5 9 -1 20 -5 23 -11 3 -5 0 -7 -8 -4 -8 3 -18 1 -21 -5 -4 -6 8 -15 26 -20 29 -9 27 -10 -17 -5 -60 6 -203 39 -242 56 -15 6 -50 19 -78 29 -32 11 -42 17 -27 18 12 1 22 5 22 10 0 5 43 17 96 26 76 14 125 16 233 11 176 -8 164 -7 178 -18 7 -6 25 -7 40 -4 19 4 23 4 14 -3 -10 -7 -5 -13 22 -26 105 -49 163 -141 173 -270 7 -106 12 -125 29 -125 19 0 19 9 1 29 -11 12 -12 28 -6 66 5 28 9 89 9 136 l1 87 -42 37 c-104 94 -283 141 -503 132 -175 -8 -290 -41 -400 -117 -26 -18 -48 -30 -50 -28 -10 10 20 77 39 87 18 9 19 10 2 8 -10 -1 -21 4 -24 12 -2 8 -1 12 4 9 5 -3 17 3 27 14 18 19 9 26 -11 6 -9 -9 -10 -4 -3 20 13 45 19 52 38 45 13 -5 15 -2 10 11 -7 17 15 61 25 51 2 -3 11 6 18 20 7 14 17 25 22 25 5 0 6 5 2 12 -5 8 -2 9 9 5 9 -3 19 -1 23 5 4 7 3 8 -4 4 -7 -4 -12 -5 -12 -3 0 11 88 54 145 72 33 11 64 23 70 27 16 14 -27 8 -86 -12z"/> <path d="M1624 1435 c1 -8 8 -21 14 -27 25 -25 1 -158 -29 -158 -5 0 -9 -5 -9 -12 0 -6 11 -1 25 12 14 13 25 29 25 37 0 7 5 13 10 13 6 0 9 3 9 8 -1 4 0 9 1 12 5 13 5 88 -1 84 -3 -2 -12 8 -19 21 -15 28 -29 33 -26 10z"/> <path d="M543 1414 c-14 -23 -15 -32 -4 -72 20 -78 83 -162 120 -162 27 0 27 17 0 25 -11 4 -18 9 -15 13 3 3 -4 10 -15 16 -53 27 -80 152 -39 178 27 17 25 28 -5 28 -15 0 -31 -10 -42 -26z"/> <path d="M594 1341 c-12 -12 -1 -42 18 -52 12 -7 30 -21 40 -33 9 -12 17 -16 18 -9 0 19 -22 63 -30 58 -4 -2 -7 2 -7 10 0 8 4 15 9 15 4 0 8 4 8 9 0 9 -47 10 -56 2z"/> <path d="M1576 1323 c-3 -16 -9 -39 -12 -53 -7 -22 -4 -21 30 13 40 38 43 67 8 67 -13 0 -22 -9 -26 -27z"/> <path d="M692 1221 c-18 -11 30 -101 90 -166 47 -52 160 -121 178 -110 6 3 10 2 10 -3 0 -15 43 -23 52 -9 9 15 -10 27 -43 27 -15 0 -32 7 -39 15 -7 8 -17 15 -23 15 -6 0 -22 10 -35 23 -14 12 -21 16 -17 8 5 -8 -14 7 -41 33 -27 27 -49 51 -49 55 -1 3 -12 24 -26 46 -14 22 -30 48 -35 57 -6 11 -14 14 -22 9z"/> <path d="M1581 1210 c-8 -4 -21 -6 -29 -2 -9 3 -13 0 -10 -8 6 -20 21 -22 43 -6 22 16 18 30 -4 16z"/> <path d="M1306 1000 c-38 -21 -76 -35 -84 -32 -10 3 -13 1 -8 -6 4 -7 2 -12 -4 -12 -6 0 -8 -4 -5 -10 3 -5 11 -10 16 -10 6 0 7 5 4 10 -4 7 3 8 21 4 22 -6 26 -4 21 8 -4 12 0 14 14 11 24 -7 109 48 109 69 0 13 -12 9 -84 -32z"/> <path d="M1020 908 c-13 -5 -31 -15 -40 -22 -8 -8 -33 -17 -55 -21 -21 -4 -51 -15 -66 -26 -15 -10 -30 -19 -34 -19 -3 0 -26 -16 -50 -36 -74 -63 -137 -218 -165 -409 -16 -107 -25 -375 -13 -375 6 0 12 57 16 138 7 149 33 345 46 350 4 1 6 14 3 29 -3 17 -1 24 6 19 6 -4 8 2 4 16 -3 13 -1 19 5 15 7 -5 9 1 5 15 -4 16 -2 19 8 13 8 -5 11 -4 6 3 -4 6 -3 23 0 39 7 25 8 26 16 8 7 -16 8 -15 5 8 -3 15 -1 27 2 27 3 0 14 14 23 31 11 19 22 27 30 23 8 -5 9 -2 5 9 -4 11 4 23 26 39 18 12 35 26 38 31 4 5 12 7 18 3 6 -4 22 1 36 10 14 9 34 14 45 11 11 -3 18 -1 15 3 -3 5 -1 11 5 15 5 3 15 -5 22 -19 12 -27 34 -37 24 -11 -3 8 -3 29 1 46 l6 32 17 -23 17 -23 5 27 c6 32 1 37 -32 24z"/> <path d="M1200 895 c0 -27 0 -28 20 -10 15 14 20 15 20 4 0 -8 3 -25 6 -39 4 -20 3 -22 -5 -10 -9 13 -11 13 -11 -2 0 -29 16 -28 33 2 11 18 23 27 32 24 8 -4 13 -10 10 -14 -3 -4 2 -11 11 -14 24 -9 31 -7 14 4 -20 13 0 12 39 -1 25 -9 30 -14 19 -21 -9 -6 -6 -7 10 -3 12 3 22 2 22 -3 0 -6 11 -12 24 -16 38 -9 107 -81 100 -102 -5 -15 -4 -16 5 -4 5 8 13 11 17 7 4 -4 3 -12 -3 -18 -8 -8 -3 -19 17 -38 22 -20 27 -33 24 -56 -3 -24 -3 -26 5 -10 7 17 10 14 16 -20 3 -22 10 -49 15 -60 16 -40 40 -193 55 -350 4 -45 2 -56 -6 -45 -9 12 -10 11 -4 -5 4 -11 8 -31 10 -45 4 -46 5 -50 15 -50 14 0 12 72 -5 246 -25 252 -92 445 -179 520 -48 42 -132 86 -196 105 -25 7 -52 18 -60 25 -8 7 -27 16 -42 19 -26 7 -28 5 -28 -20z"/> <path d="M756 385 c5 -40 3 -55 -5 -55 -7 0 -9 -4 -6 -10 3 -5 2 -26 -4 -45 -5 -19 -6 -37 -1 -40 5 -3 7 -55 5 -115 -2 -61 0 -112 6 -115 5 -4 10 36 10 97 1 57 3 156 5 221 2 69 -1 117 -7 117 -5 0 -7 -22 -3 -55z"/> <path d="M1524 291 c3 -68 6 -162 6 -208 0 -72 2 -83 18 -83 10 0 13 3 6 8 -8 5 -11 65 -10 191 1 140 -2 188 -12 200 -11 13 -12 -4 -8 -108z"/> </g> </svg>       </h3>
     <p class="text-white text-sm sm:text-base">
      As humans we learn by observing others. Teachers are very important actors in shaping the world. A student learns not only the subject but the behaviour from the teacher.
    </p>
      <p class="text-white">Muntaha Saleem</p>   
    </div>
  </div> <br>
   <div class="class flex justify-center items-center">
   <a href="your-link-here" class="inline-block text-white px-6 py-2 rounded hover:bg-[#0c2f39] text-center" style="background-color: #113946;">
    Read More
  </a>
</div>
</div>





 @livewireScripts
   </body>
 @include('livewire.layout.footer')
</html>
