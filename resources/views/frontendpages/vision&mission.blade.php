@extends('layouts.app')
@section('content')
<div class="bg-cover bg-center min-h-[250px] relative p-6 sm:p-8 md:p-12" style="background-image: url('/assets/images/banner1.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Dark overlay -->
    <div class="relative z-10  h-full">
        <h2 class="text-white text text-4xl sm:text-5xl md:text-6xl font-bold">Vision & Mission</h2> <!-- Increased font size -->
        <div class="text-white text text-lg sm:text-xl md:text-2xl">Al Nahdah's Vision</div> <!-- Increased font size -->
    </div>
</div>

<body class="bg-white flex items-center justify-center min-h-screen">

<div class="vision-box-container m-8"> 
    <div class="vision-box border-2 border-[#FBFBFB] p-6 transition-all duration-300 hover:bg-[#113946]/50 shadow-lg shadow-gray-300/50 rounded-lg bg-gray-200/20 backdrop-blur-md">
        <div class="vision-icon text-4xl mb-4 flex items-center justify-center w-16 h-16 rounded-full bg-[#113946]/80 transition-all duration-300 p-4">
            <i class="fa fa-solid fa-crosshairs text-white"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2 text-black transition-colors duration-300 hover:text-white">Vision</h2>
        <div class="text-black font-bold transition-colors duration-300 hover:text-white">
            Al Nahdah Academy envisions a generation that is not only rooted in the spiritual and intellectual
            traditions of Islam but also actively contributes to the progress of society through a harmonious
            blend of Islamic ethics and modern sciences. We aspire to be a beacon of knowledge, promoting an
            inclusive environment where individuals can embark on a transformative journey of learning,
            spiritual growth, and positive societal impact
        </div>
    </div>
  </div>
    <div class="vision-box-container m-8"> 
    <div class="vision-box border-2 border-[#FBFBFB] p-6 transition-all duration-300 hover:bg-[#113946]/50 shadow-lg shadow-gray-300/50 rounded-lg bg-gray-200/20 backdrop-blur-md">
        <div class="vision-icon text-4xl mb-4 flex items-center justify-center w-16 h-16 rounded-full bg-[#113946]/80 transition-all duration-300 p-4">
            <i class="fa fa-brands fa-gg text-white"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2 text-black transition-colors duration-300 hover:text-white">Mission</h2>
        <div class="text-black font-bold transition-colors duration-300 hover:text-white">
            Our commitment to an inclusive education model transcends age limits. Whether you are a young
            enthusiast or a seasoned professional, our programs cater to diverse demographics, fostering a
            culture of continuous learning and personal development.
        </div>
    </div>
  </div>
  <div class="vision-box-container m-8"> 
    <div class="vision-box border-2 border-[#FBFBFB] p-6 transition-all duration-300 hover:bg-[#113946]/50 shadow-lg shadow-gray-300/50 rounded-lg bg-gray-200/20 backdrop-blur-md">
        <div class="vision-icon text-4xl mb-4 flex items-center justify-center w-16 h-16 rounded-full bg-[#113946]/80 transition-all duration-300 p-4">
            <i class="fa fa fa-university text-white"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2 text-black transition-colors duration-300 hover:text-white">Inclusive Educational Philosophy</h2>
        <div class="text-black font-bold transition-colors duration-300 hover:text-white">
            Our commitment to an inclusive education model transcends age limits. Whether you are a young
            enthusiast or a seasoned professional, our programs cater to diverse demographics, fostering a
            culture of continuous learning and personal development.
        </div>
    </div>
  </div>
  <div class="vision-box-container m-8"> 
    <div class="vision-box border-2 border-[#FBFBFB] p-6 transition-all duration-300 hover:bg-[#113946]/50 shadow-lg shadow-gray-300/50 rounded-lg bg-gray-200/20 backdrop-blur-md">
        <div class="vision-icon text-4xl mb-4 flex items-center justify-center w-16 h-16 rounded-full bg-[#113946]/80 transition-all duration-300 p-4">
            <i class="fa fa-solid fa-graduation-cap text-white"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2 text-black transition-colors duration-300 hover:text-white">Gender-Inclusive Segregated Learning Environment</h2>
        <div class="text-black font-bold transition-colors duration-300 hover:text-white">
        We take pride in providing a gender-inclusive segregated space, ensuring that both men and women
        have equal access to our courses. Our dedication to equality underscores our belief in empowering
        individuals, irrespective of gender, to engage in a comprehensive exploration of Islamic sciences
        and their integration with modern disciplines.
        </div>
    </div>
  </div>
  <div class="vision-box-container m-8"> 
    <div class="vision-box border-2 border-[#FBFBFB] p-6 transition-all duration-300 hover:bg-[#113946]/50 shadow-lg shadow-gray-300/50 rounded-lg bg-gray-200/20 backdrop-blur-md">
        <div class="vision-icon text-4xl mb-4 flex items-center justify-center w-16 h-16 rounded-full bg-[#113946]/80 transition-all duration-300 p-4">
            <i class="fa fa-solid fa-book text-white"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2 text-black transition-colors duration-300 hover:text-white">
        Accessible Learning Opportunities
        </h2>
        <div class="text-black font-bold transition-colors duration-300 hover:text-white">
        Recognising the importance of universal access to education, our courses are offered either at no
         cost or with a nominal fee. Our commitment is to dismantle financial barriers, enabling anyone with
         a passion for knowledge to benefit from our robust curriculum. We firmly believe that education is a
        fundamental right that should be unhindered by financial constraints.
        </div>
    </div>
  </div>

  <div class="vision-box-container m-8"> 
    <div class="vision-box border-2 border-[#FBFBFB] p-6 transition-all duration-300 hover:bg-[#113946]/50 shadow-lg shadow-gray-300/50 rounded-lg bg-gray-200/20 backdrop-blur-md">
        <div class="vision-icon text-4xl mb-4 flex items-center justify-center w-16 h-16 rounded-full bg-[#113946]/80 transition-all duration-300 p-4">
            <i class=" fa fa-light fa-hourglass-end text-white"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2 text-black transition-colors duration-300 hover:text-white">
        Flexible Class Scheduling
        </h2>
        <div class="text-black font-bold transition-colors duration-300 hover:text-white">
        Acknowledging the demands of contemporary life, our class timings are meticulously designed to
        harmonize with the daily schedules of our students. Our flexible approach ensures minimal
         disruption, allowing students, whether professionals or those balancing various responsibilities, to
         seamlessly integrate their pursuit of knowledge into their daily routines.
        </div>
    </div>
  </div>
  <div class="vision-box-container m-8"> 
    <div class="vision-box border-2 border-[#FBFBFB] p-6 transition-all duration-300 hover:bg-[#113946]/50 shadow-lg shadow-gray-300/50 rounded-lg bg-gray-200/20 backdrop-blur-md">
        <div class="vision-icon text-4xl mb-4 flex items-center justify-center w-16 h-16 rounded-full bg-[#113946]/80 transition-all duration-300 p-4">
            <i class="fa fa-brands fa-gg text-white"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2 text-black transition-colors duration-300 hover:text-white">
        Holistic Curriculum Integration        </h2>
        <div class="text-black font-bold transition-colors duration-300 hover:text-white">
        In addition to traditional Islamic sciences, our curriculum seamlessly integrates contemporary
         subjects. We recognize the indispensable role of Islamic ethics in fields such as mathematics,
         artificial intelligence, traffic studies, qualitative and quantitative reasoning, politics, economy,
         geography, medicine, inter alia creating a comprehensive and relevant learning experience that
         equips individuals for the challenges of the modern world.
        </div>
    </div>
  </div>
  <div class="vision-box-container m-8"> 
    <div class="vision-box border-2 border-[#FBFBFB] p-6 transition-all duration-300 hover:bg-[#113946]/50 shadow-lg shadow-gray-300/50 rounded-lg bg-gray-200/20 backdrop-blur-md">
        <div class="vision-icon text-4xl mb-4 flex items-center justify-center w-16 h-16 rounded-full bg-[#113946]/80 transition-all duration-300 p-4">
            <i class="fa fa-brands fa-codepen text-white"></i>
        </div>
        <h2 class="text-2xl font-bold mb-2 text-black transition-colors duration-300 hover:text-white">
        Exemplary Instruction:       </h2>
        <div class="text-black font-bold transition-colors duration-300 hover:text-white">
         Our courses are led by seasoned instructors who embody a passion for both Islamic teachings and
         modern knowledge. Committed to excellence in education, our instructors provide mentorship,
         cultivating an engaging and supportive learning environment that fosters academic and personal
         growth.
        </div>
    </div>
  </div>
</body>


@include('livewire.layout.footer')
@endsection