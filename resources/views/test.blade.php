@include('includes.header', ['title' => 'Deposit | Forexbd'])
<!-- component -->
<div class="bg-white pt-12 pr-0 pb-12 pl-0 mt-0 mr-auto mb-0 ml-auto sm:py-16 lg:py-20">
    <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto max-w-4xl sm:px-6 lg:px-8">
        <div class="pt-0 pr-4 pb-0 pl-4 mt-0 mr-auto mb-0 ml-auto sm:flex sm:items-center sm:justify-between">
          <div>
            <p class="text-xl font-bold text-gray-900">Payment Methods</p>
            <p class="text-sm mt-1 mr-0 mb-0 ml-0 font-semi-bold text-gray-500">All Deposit Options</p>
          </div>
        </div>
        <div class="shadow-xl mt-8 mr-0 mb-0 ml-0 pt-4 pr-10 pb-4 pl-10 flow-root rounded-lg sm:py-2">
          <div class="pt--10 pr-0 pb-10 pl-0">
            @foreach ($pmethods as $pmethod)
            <div class="pt-5 pr-0 pb-0 pl-0 mt-5 mr-0 mb-0 ml-0">
                <div class="sm:flex sm:items-center sm:justify-between sm:space-x-5">
                  <div class="flex items-center flex-1 min-w-0">
                    <img src="{{ $pmethod->logo }}" class="flex-shrink-0 object-cover rounded-full btn- w-10 h-10"/>
                    <div class="mt-0 mr-0 mb-0 ml-4 flex-1 min-w-0">
                      <p class="text-lg font-bold text-gray-800 truncate">{{ $pmethod->name }}</p>
                      <p class="text-gray-600 text-md">{{ $pmethod->title }}</p>
                    </div>
                  </div>
                  <div class="mt-4 mr-0 mb-0 ml-0 pt-0 pr-0 pb-0 pl-14 flex items-center sm:space-x-6 sm:pl-0 sm:mt-0">
                    <a href="" class="bg-gray-800 pt-2 pr-6 pb-2 pl-6 text-lg font-medium text-gray-100 transition-all
                        duration-200 hover:bg-gray-700 rounded-lg">Pay</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>


@include('includes.footer')