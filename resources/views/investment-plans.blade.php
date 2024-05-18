@include('includes.header', ['title' => 'Investment & Income | Forexbd'])
<!-- Start Section -->
<link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">
<style>
    body {
        font-family: 'AdorshoLipi', Arial, sans-serif !important;
        background-image: url("https://th.bing.com/th/id/R.13ece29e0c2003d36f93db348ab13120?rik=Nn0ElZgyWiojHg&pid=ImgRaw&r=0");
}
</style>

<div class="px-10 py-10" style="opacity: 0.9;">

    <div class="block w-full overflow-x-auto">
        <table class="items-center bg-white w-full border-collapse ">
            <thead>
              <tr style="background-color: #053C50; color:#fff;">
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                  ট্রেড ক্যাটাগরি
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                  বিনিয়োগ
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                  মেয়াদ
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                  সর্বমোট পাওনা
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                  মাসিক উত্তোলন
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                  সাপ্তাহিক উত্তোলন
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    ডিপোজিট বোনাস
                  </th>
                  <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    রেফার বোনাস
                  </th>
                  <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    
                  </th>
              </tr>
            </thead>
          
            <tbody>
                @foreach ($investments as $investment)
              <tr>
                <th class="border-t-0 border px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                {{ $investment->trade_category }}
                </th>
                <td class="border-t-0 border px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                    ৳ {{ $investment->investment }}
                </td>
                <td class="border-t-0 border px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $investment->duration }} Months
                </td>
                <td class="border-t-0 border px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                  ৳ {{ $investment->total_profit }}
                </td>
                <td class="border-t-0 border px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                  ৳ {{ $investment->monthly_profit }}
                </td>
                <td class="border-t-0 border px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                  ৳ {{ $investment->weekly_profit }}
                </td>
                <td class="border-t-0 border px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                    ৳ {{ $investment->deposit_bonus }}
                  </td>
                  <td class="border-t-0 border px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                    ৳ {{ $investment->refer_bonus }}
                  </td>
                  <td class="border-t-0 border text-center align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <a href="plan/{{ $investment->id }}" class="bg-green-500 text-white active:bg-green-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Deposit</a>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
      </div>
    
</div>
<!-- End Section -->
@include('includes.footer')