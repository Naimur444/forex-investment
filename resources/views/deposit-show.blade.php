@include('includes.header', ['title' => 'Investments List | Forexbd'])

<section class="container mx-auto p-6 font-mono">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Invoice No.</th>
              <th class="px-4 py-3">Amount</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Profit</th>
              <th class="px-4 py-3">Start Date</th>
              <th class="px-4 py-3">End Date</th>
              <th class="px-4 py-3"></th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @forelse($deposits as $deposit)
            <tr class="text-gray-700">
              <td class="px-4 py-3 border">
                <div class="flex items-center text-sm">
                  <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="https://www.citypng.com/public/uploads/preview/-51614527396gs4rbvxv8a.png" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold text-black">{{ $deposit->invoice_num }}</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-ms font-semibold border">৳{{ $deposit->amount }}</td>
              <td class="px-4 py-3 text-xs border">
                @if($deposit->status == 0)
                <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm">Pending Verification</span>
                @elseif($deposit->status == 1)
                <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm">Running</span>               
                 @elseif($deposit->status == 2)
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">Completed</span>
                @endif            
            
              </td>
              <td class="px-4 py-3 text-ms font-semibold border">৳{{ $user->main_balance }}</td>
              <td class="px-4 py-3 text-sm border">{{ $deposit->created_at->format('d/m/Y') }}</td>
              <td class="px-4 py-3 text-sm border">{{ \Carbon\Carbon::parse($deposit->created_at)->addDays(365)->format('d/m/Y') }}</td>
              <td class="py-3 text-sm border text-center"> 
                @if($deposit->status == 0)
                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Contact Support</button>
                @elseif($deposit->status == 1)
                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Contact Support</button>            
                 @elseif($deposit->status == 2)
                 <button type="button" class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mr-2 mb-2">
                    <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="bitcoin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256c0 136.1-111 248-248 248S8 392.1 8 256 119 8 256 8s248 111 248 248zm-141.7-35.33c4.937-32.1-20.19-50.74-54.55-62.57l11.15-44.7-27.21-6.781-10.85 43.52c-7.154-1.783-14.5-3.464-21.8-5.13l10.93-43.81-27.2-6.781-11.15 44.69c-5.922-1.349-11.73-2.682-17.38-4.084l.031-.14-37.53-9.37-7.239 29.06s20.19 4.627 19.76 4.913c11.02 2.751 13.01 10.04 12.68 15.82l-12.7 50.92c.76 .194 1.744 .473 2.829 .907-.907-.225-1.876-.473-2.876-.713l-17.8 71.34c-1.349 3.348-4.767 8.37-12.47 6.464 .271 .395-19.78-4.937-19.78-4.937l-13.51 31.15 35.41 8.827c6.588 1.651 13.05 3.379 19.4 5.006l-11.26 45.21 27.18 6.781 11.15-44.73a1038 1038 0 0 0 21.69 5.627l-11.11 44.52 27.21 6.781 11.26-45.13c46.4 8.781 81.3 5.239 95.99-36.73 11.84-33.79-.589-53.28-25-65.99 17.78-4.098 31.17-15.79 34.75-39.95zm-62.18 87.18c-8.41 33.79-65.31 15.52-83.75 10.94l14.94-59.9c18.45 4.603 77.6 13.72 68.81 48.96zm8.417-87.67c-7.673 30.74-55.03 15.12-70.39 11.29l13.55-54.33c15.36 3.828 64.84 10.97 56.85 43.03z"></path></svg>
                    Withdraw Money
                  </button>
                @endif  
            </td>
            @empty
            <tr class="text-gray-700">
            <td class="px-4 py-3 text-ms text-center" colspan="6">No Deposits Found</td>
            </tr>
            @endforelse
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  

@include('includes.footer')
