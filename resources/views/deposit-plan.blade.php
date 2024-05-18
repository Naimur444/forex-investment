@include('includes.header', ['title' => 'Deposit | Forexbd'])
<!-- component -->
<div class="font-manrope flex w-full md:pt-2 items-center justify-center">
  <div class="mx-auto box-border w-[365px] border bg-[#f7a418] p-4">
    <div class="flex items-center justify-between">
      <span class="text-[#000000]">Deposit Form</span>
      @error('error')
      <p class="text-black-500 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>
<form action="{{ route('deposit.store') }}" method="POST">
  @csrf
     @if (isset($plan))
        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
    @endif
    <input type="hidden" name="pmethod_id" value="{{ $pmethod->id }}">
    <div class="mt-6">
      <div class="flex flex-row w-6/6">
        <div class="w-1/3 font-semibold" style="font-size: 12px">Amount (Min:6250.00 BDT)</div>
        <div class="w-2/3 text-right">
          <input class="mt-1 w-2/3 h-8 rounded-[4px] border border-[#A0ABBB] p-2" value="{{ $plan ? $plan->investment : '6250.00' }}" name="amount" type="number" placeholder="6250.00" id="amount-input"/>
          <br><span id="amount-error" style="color: red; font-size: 12px;"></span>
        </div>
      </div>      
    </div>    
    
    <div class="mt-6">
      <div class="flex flex-row w-6/6">
        <div class="w-1/3 font-semibold" style="font-size: 12px">Your {{ $pmethod->name }} Wallet Number (Only {{ $pmethod->title }}):</div>
        <div class="w-2/3 text-right"><input class="mt-1 w-2/3 h-8 rounded-[4px] border border-[#A0ABBB] p-2" name="phone_number" type="text" placeholder="+880-17-xxx-xxxx" id="phone-number"/></div>
      </div>      
    </div>
    
    <div class="mt-6">
      <div class="flex flex-row w-6/6">
        <div class="w-1/3 font-semibold" style="font-size: 12px">Transaction ID (UTR, Reference No.):</div>
        <div class="w-2/3 text-right"><input class="mt-1 w-2/3 h-8 rounded-[4px] border border-[#A0ABBB] p-2" name="transaction_id" type="text" placeholder="Transaction ID" id="transaction-id"/></div>
      </div>      
    </div>

    <div class="mt-6">
      <div class="flex justify-between">
        <span class="text-[#191D23]">Before requesting a deposit, please make a transfer using the payment detailds stated below.</span>
      </div>

      <div class="flex justify-between">
        <span class="font-semibold text-[#191D23] py-2">{{ $pmethod->name }} Wallet Number: <span id="pnumb">{{ $pmethod->number }}</span></span>
      </div>

      <div class="mt-6">
        <div class="flex flex-row w-6/6" style="font-size: 12px">
          <div class="w-1/3 font-semibold">Deposit Term:</div>
          <div class="w-2/3"> <div class="w-1/3 border text-center" style="border-color: #000;"><i class="fa-solid fa-check text-green-400"></i>{{ $plan ? $plan->duration : '12' }} Months</div>
        </div>      
      </div>

      <div class="flex justify-between">
        <span class="font-semibold text-[#191D23] py-2">{{ $pmethod->instructions }}</span>
      </div>
    </div>

    <div class="mt-6">
      <div class="w-full cursor-pointer rounded-[4px] bg-[#005098] px-3 py-[6px] text-center font-semibold text-white"><button type="submit" class="w-full cursor-pointer rounded-[4px] bg-[#005098] text-center font-semibold text-white">DEPOSIT REQUEST</button></div>
    </div>
  </form>
  </div>
</div>

<script>
  // Calculate the total profit amount when the amount input changes
  // document.getElementById("amount-input").addEventListener("input", function() {
  //     var amount = parseFloat(this.value);
  //     var total_profit = (amount * 2) + (amount * 0.01);
  //     document.querySelector(".tlprofit").textContent = "Total Profit: ৳" + total_profit.toFixed(2);
  // });

const amountInput = document.getElementById('amount-input');
const amountError = document.getElementById('amount-error');
const phoneNumberInput = document.getElementById('phone-number');
// const transactionIdInput = document.getElementById('transaction-id');



amountInput.addEventListener('blur', () => {
  if (amountInput.value < 6250) {
    amountInput.value = '6250.00';
    amountError.textContent = 'Amount must be at least 6250.00';
  } else {
    amountError.textContent = '';
  }
});

phoneNumberInput.addEventListener('blur', () => {
  let phoneNumber = phoneNumberInput.value.trim();
  if (phoneNumber.length === 0) {
    return;
  }
  if (!phoneNumber.startsWith('+88') && phoneNumber.length === 11) {
    phoneNumber = '+88' + phoneNumber;
  }
  phoneNumberInput.value = phoneNumber.replace(/[^0-9+]/g, '').substring(0, 14);
});



// transactionIdInput.addEventListener('blur', () => {
//   transactionIdInput.value = transactionIdInput.value.toUpperCase();
//   if (!/^[A-Z0-9]{10}$/.test(transactionIdInput.value)) {
//     transactionIdInput.value = '';
//   }
// });


const pnumbSpan = document.getElementById("pnumb");
  
  // Add a click event listener to the span
  pnumbSpan.addEventListener("click", () => {
    // Create a temporary input element to hold the text to copy
    const tempInput = document.createElement("input");
    tempInput.value = pnumbSpan.textContent;
    document.body.appendChild(tempInput);
    
    // Select the text inside the input element
    tempInput.select();
    
    // Copy the text to the clipboard
    document.execCommand("copy");
    
    // Remove the temporary input element
    document.body.removeChild(tempInput);
  });
</script>

@include('includes.footer')