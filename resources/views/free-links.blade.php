@include('includes.header', ['title' => 'Free Links | Forexbd'])


<!-- component -->
<div class=" bg-gray-100 min-h-screen">
	<div class="container p-10 mx-auto">
		<h1 class="text-4xl font-bold text-gray-700 mb-6">Free Income</h1>
		<div>
			<h3 class="text-lg font-semibold">YOUR POINTS:</h3>
			<p class="text-5xl mb-6">{{ $free_income->total_points }}</p>
			<p class="text-sm text-red mb-6">1,000 POINTS = 50৳ <br>MINIMUM WITHDRAWAL 10,000 POINTS</p>
			<form method="POST" action="" class="text-right px-2 py-5">
				<button class="text-md bg-orange-500 px-5 py-2 rounded-md text-white"><i class="fas fa-money-check-alt"></i> WITHDRAWAL</button>
			</form>
			<div class="grid grid-cols-2 bg-white mb-6 border-2 p-6 rounded-md">
				<div class="flex flex-col items-center">
					<p class="text-lg font-semibold">TOTAL INCOME:</p>
					<p class="text-5xl font-semibold text-green-500">{{ $free_income->total_points * 0.05 }}৳</p>
				</div>
				<div class="flex flex-col items-center">
					<p class="text-lg font-semibold">WITHDRAWAL:</p>
					<p class="text-5xl font-semibold text-red-500">{{ $free_income->total_withdrawal }}৳</p>
				</div>
			</div>
						<form method="POST" action="{{ route('free_link.request') }}">
							@csrf
						<button type="submit" class="text-md bg-green-500 px-8 py-2 rounded-md text-white"><i class="fas fa-hand-holding-usd"></i> Request Income Link</button>
						</form>

			<div>
				@if ($sharelink->assigned_to == null && $free_income->rq_status == 1)
				<Form class="my-6">
					<h2 class="text-xl font-semibold text-gray-700 mb-2">Share Link</h3>
						<div class=" flex justify-between bg-white items-center">
							<div class=" md:p-10 py-2 px-4 w-2/3">
								<p class="text-md py-4">Please be patient for request approval.</p><br>
							</div>
							<div class=" md:p-10 py-2 px-4">
							</div>
						</div>
				</Form>
				@endif
				@if($sharelink->assigned_to && $sharelink->work_status == 0)
					<h2 class="text-xl font-semibold text-gray-700 mb-2">Share Link</h3>
						<div class=" flex justify-between bg-white items-center">
							<div class=" md:p-10 py-2 px-4 w-2/3">
								<p class="text-md ">Share Link To Earn Points</p><br>
								<div class="flex items-center px-2">
									<input type="text" class="p-2 w-full border-2 rounded-md outline-none" value="{{ $sharelink->link }}" disabled>
                                     <i class="fa-solid fa-2x fa-share px-2 text-gray-400"></i>
								</div>
							</div>
							<div class=" md:p-10 py-2 px-4">
							</div>
						</div>
						<form action="{{ route('free_link.done') }}" method="POST">
							@csrf
						<div class="mt-4 p-2 space-x-2">
							<button class="text-md bg-green-500 px-8 py-2 rounded-md text-white" type="submit">Mark as complete</button>
						</div>
					</form>
				@endif
				@if ($sharelink->assigned_to && $sharelink->work_status == 1)
				<Form class="my-6">
					<h2 class="text-xl font-semibold text-gray-700 mb-2">Share Link</h3>
						<div class=" flex justify-between bg-white items-center">
							<div class=" md:p-10 py-2 px-4 w-2/3">
								<p class="text-md py-4">Please email us your work proof</p><b> example@email.com</b> and claim your points.
								<br><br> <hr>
								<ul><b>Mention Below Details:</b>
									<li>Name</li>
									<li>Registered Email</li>
									<li>Registered Phone</li>
								</ul>
							</div>
							<div class=" md:p-10 py-2 px-4">
							</div>
						</div>
				</Form>
				@endif
			</div>
		</div>

@include('includes.footer')