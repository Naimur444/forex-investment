@include('includes.header', ['title' => 'Login | Forexbd'])
  <!-- Login -->
  <div class="py-6">
  <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="w-full p-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Forex BD</h2>
            <p class="text-xl text-gray-600 text-center mb-3">Welcome back!</p>
            @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" id="ermsg">
            <span class="block sm:inline">{{ session('error') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 0 1 0 .707L10.707 10l3.641 3.641a.5.5 0 0 1-.707.707L10 10.707l-3.641 3.641a.5.5 0 0 1-.707-.707L9.293 10 5.652 6.359a.5.5 0 0 1 .707-.707L10 9.293l3.641-3.641a.5.5 0 0 1 .707 0z"/></svg>
            </span>
        </div>
        <script>
            setTimeout(function(){
                document.querySelector('#ermsg').remove();
            }, 3000);
        </script>
    @endif 
    
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" id="ermsg">
        <span class="block sm:inline">{{ session('success') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 0 1 0 .707L10.707 10l3.641 3.641a.5.5 0 0 1-.707.707L10 10.707l-3.641 3.641a.5.5 0 0 1-.707-.707L9.293 10 5.652 6.359a.5.5 0 0 1 .707-.707L10 9.293l3.641-3.641a.5.5 0 0 1 .707 0z"/></svg>
        </span>
    </div>
    <script>
        setTimeout(function(){
            document.querySelector('#ermsg').remove();
        }, 3000);
    </script>
@endif
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 lg:w-1/4"></span>
                <a href="#" class="text-xs text-center text-gray-500 uppercase">login</a>
                <span class="border-b w-1/5 lg:w-1/4"></span>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email | Phone | Username</label>
                    <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="login_field">
                </div>                
            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <a href="#" class="text-xs text-gray-500">Forget Password?</a>
                </div>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" name="password" placeholder="******">
            </div>
            <div class="mt-8">
                <button type="submit" style="background-color: #f97316;" class="bg-orange-500 text-white font-bold py-2 px-4 w-full rounded hover:bg-orange-600">Login</button>
            </div>
        </form>
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>
                <a href="#" class="text-xs text-gray-500 uppercase">or Register</a>
                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
            <div class="mt-8 text-center">
              <a href="/register" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Create Account</a>
          </div>
        </div>
    </div>
</div>
@include('includes.footer')