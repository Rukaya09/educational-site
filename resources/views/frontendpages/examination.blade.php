@extends('layouts.app')
@section('content')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Blinking text effect */
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
        .blinking {
            animation: blink 1s infinite;
        }
    </style>
</head>
<body class="bg-[#113946]">

    <div class="container mx-auto px-4 py-16">
        <div class="space-y-8">
            <div class="bg-white p-6 rounded-md shadow-lg flex flex-col">
                <div class="flex items-center space-x-4">
                    <p class="text-gray-700">Notices</p>
                    <a href="#" class="text-blue-500 hover:underline blinking" data-target="dropdownNotices">
                        click here
                    </a>
                </div>
                <!-- Dropdown menu, initially hidden -->
                <div id="dropdownNotices" class="hidden mt-4 p-4 border bg-gray-100 rounded-md shadow-md">
                    <ul>
                        <li><a href="#" class="text-blue-500 hover:underline">Examination Notices </a></li>
                        <li><a href="#" class="text-blue-500 hover:underline">Admission Notices</a></li>
                        <li><a href="#" class="text-blue-500 hover:underline">Other Notices</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="space-y-8 mt-5">
            <div class="bg-white p-6 rounded-md shadow-lg flex flex-col">
                <div class="flex items-center space-x-4">
                    <p class="text-gray-700">Date Sheets</p>
                    <a href="#" class="text-blue-500 hover:underline blinking" data-target="dropdownDateSheets">
                        click here
                    </a>
                </div>
                <!-- Dropdown menu, initially hidden -->
                <div id="dropdownDateSheets" class="hidden mt-4 p-4 border bg-gray-100 rounded-md shadow-md">
                    <ul>
                        <li><a href="#" class="text-blue-500 hover:underline">Al-Tajweed Data Sheet </a></li>
                        <li><a href="#" class="text-blue-500 hover:underline">Fiqh Course Data Sheet</a></li>
                        <li><a href="#" class="text-blue-500 hover:underline"> Other Sheet</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="space-y-8 mt-5">
            <div class="bg-white p-6 rounded-md shadow-lg flex flex-col">
                <div class="flex items-center space-x-4">
                    <p class="text-gray-700">Results</p>
                    <a href="#" class="text-blue-500 hover:underline blinking" data-target="dropdownResults">
                        click here
                    </a>
                </div>
                <!-- Dropdown menu, initially hidden -->
                <div id="dropdownResults" class="hidden mt-4 p-4 border bg-gray-100 rounded-md shadow-md">
                    <ul>
                        <li><a href="#" class="text-blue-500 hover:underline">Al-Tajweed Results </a></li>
                        <li><a href="#" class="text-blue-500 hover:underline">Fiqh Course Results</a></li>
                        <li><a href="#" class="text-blue-500 hover:underline"> Other Results</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="space-y-8 mt-5">
            <div class="bg-white p-6 rounded-md shadow-lg flex flex-col">
                <div class="flex items-center space-x-4">
                    <p class="text-gray-700">Re-Evaluation</p>
                    <a href="#" class="text-blue-500 hover:underline blinking" data-target="dropdownReEvaluation">
                        click here
                    </a>
                </div>
                <!-- Dropdown menu, initially hidden -->
                <div id="dropdownReEvaluation" class="hidden mt-4 p-4 border bg-gray-100 rounded-md shadow-md">
                    <ul>
                        <li><a href="#" class="text-blue-500 hover:underline"> Instructions </a></li>
                        <li><a href="#" class="text-blue-500 hover:underline">Re-Evaluation Form</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="space-y-8 mt-5">
            <div class="bg-white p-6 rounded-md shadow-lg flex flex-col">
                <div class="flex items-center space-x-4">
                    <p class="text-gray-700">Contact </p>
                    <a href="#" class="text-blue-500 hover:underline blinking" data-target="dropdownContact">
                        click here
                    </a>
                </div>
                <!-- Dropdown menu, initially hidden -->
                <div id="dropdownContact" class="hidden mt-4 p-4 border bg-gray-100 rounded-md shadow-md">
                    <ul>
                        <li><a href="#" class="text-blue-500 hover:underline"> Examination Department Email:alnahdah@gmail.com </a></li>
                        <li><a href="#" class="text-blue-500 hover:underline"> General Department Email:alnahdah22@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to toggle dropdown visibility
        const dropdownLinks = document.querySelectorAll('a[data-target]');

        dropdownLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault(); // Prevent default link behavior
                const target = link.getAttribute('data-target');
                const dropdownMenu = document.getElementById(target);
                dropdownMenu.classList.toggle('hidden'); // Toggle visibility of dropdown
            });
        });
    </script>

</body>
</html>

@include('livewire.layout.footer')
@endsection
