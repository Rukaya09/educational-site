@extends('layouts.app')
@section('content')

<div class="container mx-auto p-4">
  <h2 class="text-4xl font-semibold text-center my-8 text-black">Zakaat Calculator</h2>
  <div class="space-y-4 text-center">
    <blockquote class="text-gray-700 italic ">
      <p class="mb-2">"The Prophet Muhammad (ﷺ) said: <strong>'Whoever pays the Zakat on his wealth will have its evil removed from him.'</strong>"</p>
      <footer class="text-sm text-gray-600">— (Ibn Khuzaimah, Sahih)</footer>
    </blockquote>
</div>
  <hr class="border-t-2 border-gray-300 mb-4">

  <!-- Wealth Section -->
  <div class="bg-[#113946] backdrop-blur-lg p-6 rounded-lg shadow-lg mb-8 border border-white/10">
    <h3 class="text-2xl font-medium text-white mb-4">Wealth</h3>
    
    <label for="amount_home" class="text-sm font-semibold text-gray-200 mb-2">Cash at Home</label>
    <input id="amount_home" step="any" type="number" onchange="calculate()" class="w-full p-3 border border-gray-300 rounded-lg mb-4 bg-white/10 text-white placeholder-gray-300" />

    <label for="amount_bank" class="text-sm font-semibold text-gray-200 mb-2">Bank Account Balance</label>
    <input id="amount_bank" step="any" type="number" onchange="calculate()" class="w-full p-3 border border-gray-300 rounded-lg mb-4 bg-white/10 text-white placeholder-gray-300" />

    <label for="amount_shares" class="text-sm font-semibold text-gray-200 mb-2">Cash value of Stocks and Equities</label>
    <input id="amount_shares" step="any" type="number" onchange="calculate()" class="w-full p-3 border border-gray-300 rounded-lg mb-4 bg-white/10 text-white placeholder-gray-300" />

    <label for="amount_merchandise" class="text-sm font-semibold text-gray-200 mb-2">Profits & Inventory</label>
    <input id="amount_merchandise" step="any" type="number" onchange="calculate()" class="w-full p-3 border border-gray-300 rounded-lg mb-4 bg-white/10 text-white placeholder-gray-300" />

    <label for="amount_gold" class="text-sm font-semibold text-gray-200 mb-2">Gold & Silver</label>
    <input id="amount_gold" step="any" type="number" onchange="calculate()" class="w-full p-3 border border-gray-300 rounded-lg mb-4 bg-white/10 text-white placeholder-gray-300" />

    <label for="amount_property" class="text-sm font-semibold text-gray-200 mb-2">Investment Property</label>
    <input id="amount_property" step="any" type="number" onchange="calculate()" class="w-full p-3 border border-gray-300 rounded-lg mb-4 bg-white/10 text-white placeholder-gray-300" />

    <label for="amount_other" class="text-sm font-semibold text-gray-200 mb-2">Any Other Income</label>
    <input id="amount_other" step="any" type="number" onchange="calculate()" class="w-full p-3 border border-gray-300 rounded-lg mb-8 bg-white/10 text-white placeholder-gray-300" />
  </div>

  <!-- Deductions Section -->
  <div class="bg-[#113946] backdrop-blur-lg p-6 rounded-lg shadow-lg mb-8 border border-white/10">
    <h3 class="text-2xl font-medium text-white mb-4">Deductions</h3>

    <label for="amount_debts" class="text-sm font-semibold text-gray-200 mb-2">Debts</label>
    <input id="amount_debts" step="any" type="number" onchange="calculate()" class="w-full p-3 border border-gray-300 rounded-lg mb-4 bg-white/10 text-white placeholder-gray-300" />

    <label for="amount_expenses" class="text-sm font-semibold text-gray-200 mb-2">Expenses</label>
    <input id="amount_expenses" step="any" type="number" onchange="calculate()" class="w-full p-3 border border-gray-300 rounded-lg mb-8 bg-white/10 text-white placeholder-gray-300" />
  </div>

  <!-- Totals Section -->
  <div class="bg-[#113946] backdrop-blur-lg p-6 rounded-lg shadow-lg mb-8 border border-white/10">
    <h3 class="text-2xl font-medium text-white mb-4">Totals</h3>

    <label for="amount_eligable" class="text-sm font-semibold text-gray-200 mb-2">Amount Eligible for Zakat</label>
    <input id="amount_eligable" type="text" readonly="readonly" class="w-full p-3 border border-gray-300 rounded-lg mb-4 bg-white/10 text-white placeholder-gray-300" />

    <label for="amount_zakat" class="text-sm font-semibold text-gray-200 mb-2">Your Zakat Total (2.5% of Eligible Amount)</label>
    <input id="amount_zakat" type="text" readonly="readonly" class="w-full p-3 border border-gray-300 rounded-lg mb-8 bg-white/10 text-white placeholder-gray-300" />
  </div>

  <!-- Donate Button -->
  <div class="flex justify-center">
    <button id="donate_button" type="button" aria-label="Donate" data-amount="50" data-formId="2426" class="bg-yellow-500 text-yellow-100 hover:bg-yellow-600 py-3 px-8 text-xl font-semibold rounded-lg shadow-md focus:outline-none focus:ring focus:ring-yellow-400 transition duration-300">
      Donate Now
    </button>
  </div>

</div>

<script>
// Helper function for getting the value
function getValue(id) {
  var value = document.getElementById(id).value;
  if (value == "" || isNaN(value)) {
    return 0;
  } else {
    return parseFloat(value);
  }
}

function calculate() {
  var amt_nisab = 5301;
  var amt_home = getValue("amount_home");
  var amt_bank = getValue("amount_bank");
  var amt_shares = getValue("amount_shares");
  var amt_merchandise = getValue("amount_merchandise");
  var amt_gold = getValue("amount_gold");
  var amt_property = getValue("amount_property");
  var amt_other = getValue("amount_other");
  var amt_debts = getValue("amount_debts");
  var amt_expenses = getValue("amount_expenses");

  var amt_assets_gross = amt_home + amt_bank + amt_shares + amt_merchandise + amt_gold + amt_property + amt_other;
  var amt_assets_net = amt_assets_gross - amt_debts - amt_expenses;
  var amt_eligable = 0;

  if (amt_assets_net > amt_nisab) {
    amt_eligable = Math.ceil(amt_assets_net);
  }

  var amt_zakat = Math.ceil(amt_eligable * .025);

  var formatter = new Intl.NumberFormat('en-IN', {
    style: 'currency',
    currency: 'INR',
  });

  document.getElementById("amount_eligable").value = formatter.format(amt_eligable);
  document.getElementById("amount_zakat").value = formatter.format(amt_zakat);

  if (amt_zakat > 0) {
    document.getElementById("donate_button").innerText = formatter.format(amt_zakat) + ' Zakat';
    document.getElementById("donate_button").dataset.amount = amt_zakat;
  } else {
    document.getElementById("donate_button").text = 'Donate Now';
    document.getElementById("donate_button").dataset.amount = 50;
  }
}

(function(f,u,n,r,a,i,s,e){
  var data={window:window,document:document,tag:"script",data:"funraise",orgId:f,uri:u,common:n,client:r,script:a};
  var scripts;
  var funraiseScript;
  data.window[data.data]=data.window[data.data]||[];
  if(data.window[data.data].scriptIsLoading||data.window[data.data].scriptIsLoaded)return;
  data.window[data.data].loading=true;
  data.window[data.data].push("init",data);
  scripts=data.document.getElementsByTagName(data.tag)[0];
  funraiseScript=data.document.createElement(data.tag);
  funraiseScript.async=true;
  funraiseScript.src=data.uri+data.common+data.script+"?orgId="+data.orgId;
  scripts.parentNode.insertBefore(funraiseScript,scripts)
})('1e78fec4-8fd0-4a3e-b82b-866c29012531','https://assets-dev.funraise.io','/widget/common/2.0','/widget/client','/inject-form.js');

window.funraise.push('create', { form: 2426 });
</script>

@include('livewire.layout.footer')
@endsection