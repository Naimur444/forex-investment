@include('includes.header', ['title' => 'Free Income | Forexbd'])
<style>
    body{
        background-color:#053c50;
    }
</style>

<section class="bg-transparent dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto items-center text-center">
        <button type="button" style="
            background-color: #ff8c0f;
            font-size: 20px;"
            class="text-black bg-orange-400 hover:bg-orange-800 outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 focus:outline-none dark:focus:ring-blue-800">Free Income</button>
        <div class="mt-8 lg:-mx-auto lg:flex lg:items-center text-center">
            <a href="/investment-plans">
            <img src="{{ asset("/assets/frontend/img/fm1.jpg") }}"alt="">
            </a>
            <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-auto text-center">
                <a href="/free-links">
                <img src="{{ asset("/assets/frontend/img/fm2.jpg") }}"alt="">
                </a>
            </div>
        </div>
    </div>
</section> 


@include('includes.footer')