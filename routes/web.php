<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\FreeIncomeController;
use App\Models\FreeIncome;
use App\Models\Sharelinks;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Check if visiting from mobile and redirect to /m
Route::get('/', function () {
    $agent = new Agent();

    if ($agent->isMobile()) {
        return view('m.home');
    }else{
        return view('home');
    }

    // Render your desktop view here
});


// Normal Routes

// Route::view('/', 'home');
Route::view('/free-income', 'free-income');
Route::view('/free-income-request', 'free-income-request');
Route::view('/aboutus', 'aboutus');
// Route::view('/deposit-plan', 'deposit-plan');
Route::get('/investment-plans', [DepositController::class, 'investplans'])->name('investplans');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// User Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/deposit', [DepositController::class, 'index'])->name('deposit');
    Route::get('/deposit-show', [DepositController::class, 'depositshow'])->name('deposit.show');
    Route::get('/plan/{id}', [DepositController::class, 'index'])->name('deposit.index');
    Route::get('/deposit-plan/{pmethod_id}/plan/{plan_id}', [DepositController::class, 'depositplan'])->name('deposit.plan');
    Route::get('/deposit-plan/{pmethod_id}', [DepositController::class, 'depositplan'])->name('deposit.plan');
    Route::view('/free-links', 'free-links');
    Route::post('/depositstore', [DepositController::class, 'storedeposit'])->name('deposit.store');
    Route::view('/success', 'success')->name('deposit.success');
    Route::get('/free-links', [FreeIncomeController::class, 'index'])->name('free-links');
    Route::post('/free-income-request', function (Request $request) {
        $user_id = auth()->id();
        $free_income = new FreeIncome();
        $free_income->uid = $user_id;
        $free_income->save();
        return redirect()->route('free-links');
    })->name('free_income.request');

    Route::post('/free-link-request', function (Request $request) {
        $user_id = auth()->id();
        $free_income = FreeIncome::where('uid', $user_id)->first();
        
        $free_income->rq_status = 1;
        $free_income->save();
    
        return redirect()->route('free-links');
    })->name('free_link.request');

    Route::post('/free-links', function (Request $request) {
        $user_id = auth()->id();
        $sharelink = Sharelinks::where('assigned_to', $user_id)->first();
        $sharelink->work_status = 1;
        $sharelink->save();
    
        return redirect()->route('free-links');
    })->name('free_link.done');


});
Route::get('/check-username/{username}', [RegisterController::class, 'checkUsername'])->name('checkUsername');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

});

// Error Handling
Route::prefix('')->group(function () {
    Route::fallback(function () {
        return view('errors.404');
    });
});


// Admin Routes
Route::prefix('forexadmin')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('/',  [AdminController::class, 'index'])->name('forexadmin.login');
    });
    Route::post('/',  [AdminController::class, 'login'])->name('forexadmin.login.submit');
});


Route::middleware(['admin'])->group(function () {
    Route::prefix('forexadmin')->group(function () {
        // GET ROUTES
        Route::get('/dashboard',  [DashboardController::class, 'index'])->name('forexadmin.dashboard');
        Route::get('/users', [DashboardController::class, 'usersindex'])->name('forexadmin.users');
        Route::get('/investment_plans', [DashboardController::class, 'inplansview'])->name('forexadmin.inplansview');
        Route::get('/addplans', [DashboardController::class, 'addplansview'])->name('forexadmin.addplansview');
        Route::get('/plan/{id}/view', [DashboardController::class, 'editplan'])->name('forexadmin.editplan');
    
        // POST ROUTES
        Route::post('/logout', [AdminController::class, 'logout'])->name('forexadmin.logout');
        Route::delete('/users/{id}', [DashboardController::class,'deleteUser'])->name('users.delete');
        Route::delete('/investment_plans/{id}', [DashboardController::class,'deletePlan'])->name('plans.delete');

        // STORE
        Route::post('addplans', [DashboardController::class, 'storeplans'])->name('investment.store');
        Route::put('plan/{id}/edit', [DashboardController::class, 'updateplan'])->name('plan.update');

    });
});


