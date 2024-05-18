@include('includes.header', ['title' => 'Register | Forexbd'])
  <!-- Register -->
  <div class="py-6">
  <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="w-full p-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Forex BD</h2>
            <p class="text-xl text-gray-600 text-center">Welcome back!</p>
            @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 lg:w-1/4"></span>
                <a href="#" class="text-xs text-center text-gray-500 uppercase">Register</a>
                <span class="border-b w-1/5 lg:w-1/4"></span>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">First Name <span class="text-red-500">*</span></label>
                    <input id="first_name" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="first_name" placeholder="Hossain" required>
                  </div>
                  <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">Last Name <span class="text-red-500">*</span></label>
                    <input id="last_name" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="last_name" placeholder="Robiul" required>
                  </div>
                  <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username <span class="text-red-500">*</span></label>
                    <input id="username" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="username" required>
                    <span id="username-error" class="text-red-400"></span>
                </div>
                
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Phone Number <span class="text-red-500">*</span></label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" id="phone-number" name="phone" placeholder="+88018-xxx-xxxx" required>
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Email <span class="text-red-500">*</span></label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" placeholder="robiul@example.com" name="email" required>
            </div>
            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Password <span class="text-red-500">*</span></label>
                </div>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" name="password" placeholder="******" required>
            </div>
            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Confirm Password <span class="text-red-500">*</span></label>
                </div>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" name="confirm_password" placeholder="******" required>
                <div class="text-right">
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Referral Code</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" name="referred_by" type="text">
            </div>
            <div class="mt-8">
                <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Create Account</button>
            </div>
        </form>
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>
                <a href="#" class="text-xs text-gray-500 uppercase">OR Login</a>
                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
            <div class="mt-8 text-center">
                <a href="/login" class="bg-orange-500 text-white font-bold py-2 px-4 w-full rounded hover:bg-orange-600"><i class="fa-solid fa-lock"></i> Login</a>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("username").addEventListener("blur", function() {
        var username = this.value;
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "/check-username/" + username);
        xhr.onload = function() {
            if (xhr.status === 200) {
                if (xhr.responseText === "false") {
                    document.getElementById("username-error").textContent = "Username already exists";
                } else {
                    document.getElementById("username-error").textContent = "";
                }
            } else {
                console.log("Request failed. Returned status of " + xhr.status);
            }
        };
        xhr.send();
    });

const phoneNumberInput = document.getElementById('phone-number');
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
</script>
@include('includes.footer')

