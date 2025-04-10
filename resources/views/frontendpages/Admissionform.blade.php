<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <!-- Include Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        /* Apply the custom font to the entire form */
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Apply the custom font to placeholders */
        input::placeholder,
        select::placeholder,
        textarea::placeholder {
            font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Adjust the weight as needed */
            color: #6b7280; /* Adjust the placeholder color if needed */
        }

        /* Apply the custom font to input fields */
        input,
        select,
        textarea {
            font-family: 'Poppins', sans-serif;
            font-weight: 500; /* Adjust the weight as needed */
        }

        /* Apply the custom font to the submit button */
        input[type="submit"] {
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Adjust the weight as needed */
        }
    </style>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white/20 backdrop-blur-md mt-4 rounded-lg shadow-lg border border-white/30">
        <!-- Header -->
        <div class="text-center text-2xl font-bold mb-6 bg-[#113946] text-white py-2 rounded-lg">
            Admission Form
        </div>

        <!-- Course Selection -->
        <div class="mb-6">
            <h4 class="text-xl font-semibold mb-4">Applying for course</h4>
            <div>
                <label for="course" class="block text-sm font-medium text-gray-700">Course:</label>
                <select id="course" name="course" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                    <option value="" disabled selected hidden>Select a course</option>
                    <option value="course1">Hadith</option>
                    <option value="course2">Principles of Hadith</option>
                    <option value="course3">Principles of Fiqh</option>
                    <option value="course4">Nazira Quran</option>
                    <option value="course5">Islamic Creed</option>
                    <option value="course6">Islamic History</option>
                    <option value="course7">Arabic Grammar</option>
                </select>
            </div>
        </div>

        <!-- Personal Details -->
        <div class="mb-6">
            <h4 class="text-xl font-semibold mb-4">1. Personal Details</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="fname" class="block text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" name="name" id="fname" placeholder="Enter your name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm">
                </div>
                <div>
                    <label for="parentage" class="block text-sm font-medium text-gray-700">Parentage:</label>
                    <input type="text" name="parentage" id="parentage" placeholder="Enter your parentage" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>
                <div>
                    <label for="dob" class="block text-sm font-medium text-gray-700">DOB:</label>
                    <input type="month" name="dob" id="dob" placeholder="Enter your DOB" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>
            </div>
        </div>

        <!-- Address Details -->
        <div class="mb-6">
            <h4 class="text-xl font-semibold mb-4">2. Address Details</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="residence" class="block text-sm font-medium text-gray-700">Address:</label>
                    <input type="text" id="residence" name="residence" placeholder="Enter Village/ Town" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>
                <div>
                    <label for="district" class="block text-sm font-medium text-gray-700">District:</label>
                    <input type="text" id="district" name="district" placeholder="Enter your District" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>
                <div>
                    <label for="tehsil" class="block text-sm font-medium text-gray-700">Tehsil:</label>
                    <input type="text" id="tehsil" name="tehsil" placeholder="Enter your Tehsil" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>
                <div>
                    <label for="pincode" class="block text-sm font-medium text-gray-700">Pin-Code:</label>
                    <input type="text" id="pincode" name="pincode" placeholder="Enter your Pin-code" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>
                <div>
                    <label for="state" class="block text-sm font-medium text-gray-700">State:</label>
                    <input type="text" id="state" name="state" placeholder="Enter your State" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>
                <div>
                    <label for="country" class="block text-sm font-medium text-gray-700">Country:</label>
                    <input type="text" id="country" name="country" placeholder="Enter your Country" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>
            </div>
        </div>

        <!-- Qualification Details -->
        <div class="mb-6">
            <h4 class="text-xl font-semibold mb-4">6. Qualification Details</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- High School -->
                <div>
                    <label for="highSchool" class="block text-sm font-medium text-gray-700">High School:</label>
                    <input type="text" id="highSchool" name="highSchool" placeholder="Enter your High School Name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="highSchoolBoard" class="block text-sm font-medium text-gray-700">Board:</label>
                    <input type="text" id="highSchoolBoard" name="highSchoolBoard" placeholder="Enter your Board" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="highSchoolSession" class="block text-sm font-medium text-gray-700">Session:</label>
                    <input type="text" id="highSchoolSession" name="highSchoolSession" placeholder="Enter your session" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="highSchoolPercentage" class="block text-sm font-medium text-gray-700">CGPA / Percentage:</label>
                    <input type="text" id="highSchoolPercentage" name="highSchoolPercentage" placeholder="Enter your CGPA / Percentage" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <!-- Secondary School -->
                <div>
                    <label for="secondarySchool" class="block text-sm font-medium text-gray-700">Secondary School:</label>
                    <input type="text" id="secondarySchool" name="secondarySchool" placeholder="Enter your Secondary School Name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="secondarySchoolBoard" class="block text-sm font-medium text-gray-700">Board:</label>
                    <input type="text" id="secondarySchoolBoard" name="secondarySchoolBoard" placeholder="Enter your Board" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="secondarySchoolSession" class="block text-sm font-medium text-gray-700">Session:</label>
                    <input type="text" id="secondarySchoolSession" name="secondarySchoolSession" placeholder="Enter your session" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="secondarySchoolPercentage" class="block text-sm font-medium text-gray-700">CGPA / Percentage:</label>
                    <input type="text" id="secondarySchoolPercentage" name="secondarySchoolPercentage" placeholder="Enter your CGPA / Percentage" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <!-- Graduation -->
                <div>
                    <label for="graduation" class="block text-sm font-medium text-gray-700">Graduation:</label>
                    <input type="text" id="graduation" name="graduation" placeholder="Enter your Course Name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="graduationUniversity" class="block text-sm font-medium text-gray-700">University / College:</label>
                    <input type="text" id="graduationUniversity" name="graduationUniversity" placeholder="Enter your University / College" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="graduationSession" class="block text-sm font-medium text-gray-700">Session:</label>
                    <input type="text" id="graduationSession" name="graduationSession" placeholder="Enter your session" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="graduationPercentage" class="block text-sm font-medium text-gray-700">CGPA / Percentage:</label>
                    <input type="text" id="graduationPercentage" name="graduationPercentage" placeholder="Enter your CGPA / Percentage" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <!-- Post Graduation -->
                <div>
                    <label for="postGraduation" class="block text-sm font-medium text-gray-700">Post Graduation:</label>
                    <input type="text" id="postGraduation" name="postGraduation" placeholder="Enter your Course Name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="postGraduationUniversity" class="block text-sm font-medium text-gray-700">University / College:</label>
                    <input type="text" id="postGraduationUniversity" name="postGraduationUniversity" placeholder="University / College" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="postGraduationSession" class="block text-sm font-medium text-gray-700">Session:</label>
                    <input type="text" id="postGraduationSession" name="postGraduationSession" placeholder="Enter your session" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
                <div>
                    <label for="postGraduationPercentage" class="block text-sm font-medium text-gray-700">CGPA / Percentage:</label>
                    <input type="text" id="postGraduationPercentage" name="postGraduationPercentage" placeholder="Enter your CGPA / Percentage" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" required>
                </div>
            </div>
        </div>

        <!-- File Upload Section -->
        <div class="mb-6">
            <h4 class="text-xl font-semibold mb-4">7. Upload Documents</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- DOB Certificate -->
                <div class="flex items-center justify-center p-4 border border-gray-300 rounded-md bg-white/50 backdrop-blur-sm">
                    <label for="dobCertificate" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <input type="file" id="dobCertificate" name="dobCertificate" class="hidden">
                    </label>
                </div>

                <!-- Signature -->
                <div class="flex items-center justify-center p-4 border border-gray-300 rounded-md bg-white/50 backdrop-blur-sm">
                    <label for="signature" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                        <input type="file" id="signature" name="signature" class="hidden">
                    </label>
                </div>

                <!-- Photograph -->
                <div class="flex items-center justify-center p-4 border border-gray-300 rounded-md bg-white/50 backdrop-blur-sm">
                    <label for="photograph" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <input type="file" id="photograph" name="photograph" class="hidden">
                    </label>
                </div>

                <!-- ID Proof -->
                <div class="flex items-center justify-center p-4 border border-gray-300 rounded-md bg-white/50 backdrop-blur-sm">
                    <label for="idProof" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                        </svg>
                        <input type="file" id="idProof" name="idProof" class="hidden">
                    </label>
                </div>
            </div>
        </div>

        <!-- Terms and Conditions -->
        <div class="mb-6">
            <h4 class="text-xl font-semibold mb-4">Terms and Conditions</h4>
            <div class="text-sm text-gray-700">
                <b>1. Course Enrollment:</b> By submitting this application form, you agree to enroll in the specified course(s) as outlined in the course descriptions and schedules provided by the Academy.<br><br>
                <b>2. Privacy Policy:</b> The information provided in this application form will be used solely for the purpose of course enrollment and administration. Your personal information will be treated confidentially and will not be shared with third parties without your consent.<br><br>
                <b>3. Attendance and Participation:</b> You are expected to attend all classes and actively participate in course activities. Failure to meet attendance and participation requirements may affect your eligibility for course completion or certification.<br><br>
                <b>4. Intellectual Property:</b> All course materials, including but not limited to lectures, handouts, and assignments, are the intellectual property of the Academy and may not be reproduced or distributed without prior written consent.<br><br>
                <b>5. Code of Conduct:</b> You agree to adhere to the Academy's code of conduct, which prohibits disruptive behavior, harassment, discrimination, or any other form of misconduct. Violation of the code of conduct may result in disciplinary action, including expulsion from the course.<br><br>
                <b>6. Refund Policy:</b> Refunds, if applicable, will be issued in accordance with the Academy's refund policy.<br><br>
                <b>7. Cancellation or Rescheduling:</b> The Academy reserves the right to cancel or reschedule courses due to unforeseen circumstances or low enrollment. In such cases, alternative arrangements will be made, and affected participants will be notified promptly.<br><br>
                <b>8. Fees and Payment:</b> You agree to pay the applicable course fees in accordance with the payment schedule provided by the Academy. Failure to make payments may result in your removal from the course.<br><br>
                <input type="checkbox" id="confirm" name="confirm" required>
                <label for="confirm" class="text-sm font-medium text-gray-700">
                    <b>I acknowledge that I have read, understood, and agree to abide by the terms and conditions outlined above. I understand that my enrollment in the course is subject to compliance with these terms and any additional policies or guidelines provided by the Academy.</b>
                </label>
            </div>
        </div>

        <!-- Payment Section -->
        <div class="mb-6">
            <h4 class="text-xl font-semibold mb-4">8. Payment Details</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Payment Method -->
                <div>
                    <label for="paymentMethod" class="block text-sm font-medium text-gray-700">Payment Method:</label>
                    <select id="paymentMethod" name="paymentMethod" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                        <option value="" disabled selected hidden>Select a payment method</option>
                        <option value="creditCard">Credit Card</option>
                        <option value="debitCard">Debit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="bankTransfer">Bank Transfer</option>
                    </select>
                </div>

                <!-- Card Number -->
                <div>
                    <label for="cardNumber" class="block text-sm font-medium text-gray-700">Card Number:</label>
                    <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter your card number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>

                <!-- Expiry Date -->
                <div>
                    <label for="expiryDate" class="block text-sm font-medium text-gray-700">Expiry Date:</label>
                    <input type="month" id="expiryDate" name="expiryDate" placeholder="MM/YY" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>

                <!-- CVV -->
                <div>
                    <label for="cvv" class="block text-sm font-medium text-gray-700">CVV:</label>
                    <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>

                <!-- Total Amount -->
                <div>
                    <label for="totalAmount" class="block text-sm font-medium text-gray-700">Total Amount:</label>
                    <input type="text" id="totalAmount" name="totalAmount" placeholder="Enter total amount" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-white/50 backdrop-blur-sm" required>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <input type="submit" value="Submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
        </div>
    </div>

    @include('livewire.layout.footer')
    @endsection
</body>
</html>