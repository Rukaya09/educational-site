@extends('layouts.app')
@section('content')

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="container mx-auto  mt-5 mb-6 p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4 text-center">Fatwa</h1>
        
        <div class="bg-gray-50 p-4 rounded-lg shadow-md">
        <div class="text-center mb-4">
            <p class="text-lg font-bold">بِسْمِ اللہِ الرَّحْمٰنِ الرَّحِيْمِ</p>
            <p class="text-lg font-bold">اَلْجَوَابُ بِعَوْنِ الْمَلِکِ الْوَھَّابِ اَللّٰھُمَّ ھِدَایَۃَ الْحَقِّ وَالصَّوَابِ</p>
        </div>
            <p class="text-gray-700 mb-4">
                
   The offer mentioned in the question is permissible from shariah perspective. There are two possible explanations for this contract to take place and each one of them will make this contract a permissible contract.

   The first explanation is as follows: the seller informs the costumer beforehand that, for sake of promotion, he is giving two wallets for the price of one.  In other words, the price of the entire subject of the sale is 500 Rupees.  This sale is permissible.

   The second explanation is as follows: Initially one wallet is offered for 500 Rupees, but the seller also gives away an additional wallet from his own. In other words the seller adds some thing in subject of the sale (مبيع)from his own and adding something in subject of the sale is permissible from Sharaiah perspective as per the sayings of the Fuqaha (i.e. Muslim Jurists).
            </p>
            <div class="flex justify-center">
                <a href="#" class="px-4 py-2 bg-blue-500 text-white mr-5 rounded hover:bg-black-600">
                    Download
                </a>
                <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-black-600">
                    Read
                </a>
            </div>
        </div>
    </div>

</body>
</html>
@include('livewire.layout.footer')
@endsection