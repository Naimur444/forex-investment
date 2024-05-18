@include('includes.header', ['title' => 'Free Income | Forexbd'])
<style>
  body{
      background-color:#053c50;
  }
</style>
<!-- component -->
<!-- This is an example component -->
<div class='flex items-center justify-center py-5 px-2'>
    <div class='w-full max-w-md  mx-auto bg-white rounded-3xl shadow-xl overflow-hidden'>
        <div class='max-w-md mx-auto'>
          <div class='h-[236px]' style='background-image:url(https://media.istockphoto.com/id/1360536098/vector/payment-date-of-recurring-tax-money-scheduled-on-calendar-icon-success-bill-pay-day-salary.jpg?s=612x612&w=0&k=20&c=G9osXxvAeoIU4DbpMDSQIO6342T7Od3OuR7geqw3GFs=);background-size:cover;background-position:center'>
           </div>
          <div class='p-4 sm:p-6'>
            <p class='font-bold text-gray-700 text-[22px] leading-7 mb-1'>Income Terms</p>
            <div class='flex flex-row'>
              <p class='text-[17px] font-bold text-[#0FB478]'>1000 POINTS = 50.00TAKA</p>
            </div>
            <p class='text-[#7C7C80] font-[15px] mt-6'>Complete tasks daily, earn daily</p>

              <form method="POST" action="{{ route('free_income.request') }}">
                @csrf
                <button class='block mt-10 w-full px-4 py-3 font-medium tracking-wide text-center capitalize transition-colors duration-300 transform bg-[#FFC933] rounded-[14px] hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                    Request
                </button>
              </form>
            <a href="/" class='block mt-1.5 w-full px-4 py-3 font-medium tracking-wide text-center capitalize transition-colors duration-300 transform rounded-[14px] hover:bg-[#F2ECE7] hover:text-[#000000dd] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                  Go Back
              </a>
          </div>
        </div>
    </div>
</div>
@include('includes.footer')
