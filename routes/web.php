<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\Helpers;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AnalysisRequestController;
use App\Http\Controllers\CreateRawDataFileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LabAcceptanceController;
use App\Http\Controllers\LabApprovalController;
use App\Http\Controllers\LabResultStatusController;
use App\Http\Controllers\MicroController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PyChemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleAndSampleInformationController;


use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('403', function () {
    $user = Auth::user();

    if ($user->status == 1) {
        return redirect()->route('login');
    }

    return view('forbidden.status');
})->middleware('auth');


Route::middleware('auth', 'status', 'verified')->group(function () {

    Route::get('/regions', [AddressController::class, 'regions']);
    Route::get('/provinces/{region_code}', [AddressController::class, 'provinces']);
    Route::get('/cities/{province_code}', [AddressController::class, 'cities']);
    Route::get('/barangays/{city_code}', [AddressController::class, 'barangays']);



    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [DashboardController::class, 'getAllData']);

    Route::prefix('service')->group(function () {

        Route::get('add-client-account', [ClientController::class, 'create'])->name('service.add-client-account.create');
        Route::post('add-client-account/store', [ClientController::class, 'store'])->name('service.add-client-account.store');
        Route::get('add-analysis-request', [AnalysisRequestController::class, 'create'])->name('service.add-analysis-request.create');
        Route::get('add-analysis-request-form/{account_number}', [AnalysisRequestController::class, 'form'])->name('service.add-analysis-request.form');
        Route::post('add-analysis-request-form/store', [AnalysisRequestController::class, 'store'])->name('service.add-analysis-request.store');

        Route::prefix('schedule-and-sample-information')->group(function () {
            Route::get('client-table', [ScheduleAndSampleInformationController::class, 'index'])->name('service.schedule-and-sample-information.clientTable');
            Route::get('analysis-table/{account_number}', [ScheduleAndSampleInformationController::class, 'show'])->name('service.schedule-and-sample-information.profileTable');
        });
        Route::prefix('generate-report')->group(function () {
            Route::get('table', [LabResultStatusController::class, 'table'])->name('record-and-report.lab-result.table');
            Route::get('details/{analysis_id}/pdf', [PdfController::class, 'generateAnalysisPdf'])->name('record-and-report.analysis-request.generateAnalysisPdf');
            Route::get('details/{analysis_id}', [LabResultStatusController::class, 'details'])->name('record-and-report.lab-result.details');
        });
    });

    Route::prefix('laboratory')->group(function () {

        Route::prefix('lab-acceptance')->group(function () {
            Route::get('micro', [LabResultStatusController::class, 'micro'])->name('service.lab-result-status.micro');
            Route::get('pychem', [LabResultStatusController::class, 'pychem'])->name('service.lab-result-status.pychem');
        });

        Route::get('lab-acceptance/{analysis_id}', [LabAcceptanceController::class, 'create'])->name('laboratory.lab-acceptance.create');
        Route::post('lab-acceptance/store/{analysis_id}', [LabAcceptanceController::class, 'store'])->name('laboratory.lab-acceptance.store');

        Route::prefix('lab-work-order')->group(function () {
            Route::get('micro', [LabAcceptanceController::class, 'micro'])->name('laboratory.lab-lab-work-order.micro');
            Route::get('pychem', [LabAcceptanceController::class, 'pychem'])->name('laboratory.lab-lab-work-order.pychem');
            Route::get('form/{analysis_id}', [CreateRawDataFileController::class, 'create'])->name('laboratory.lab-work-order-form.create');

            Route::post('micro/{analysis_id}', [MicroController::class, 'micro'])->name('laboratory.lab-work-order-form.micro');
            Route::post('pychem/{analysis_id}', [PyChemController::class, 'pychem'])->name('laboratory.lab-work-order-form.pychem');
        });

        Route::get('lab-approval/micro', [LabApprovalController::class, 'micro'])->name('laboratory.lab_approval.micro');
        Route::get('lab-approval/phyChem', [LabApprovalController::class, 'phyChem'])->name('laboratory.lab_approval.phyChem');
        Route::get('lab-approval/details/{analysis_id}', [LabApprovalController::class, 'details'])->name('laboratory.lab_approval.details');

        Route::post('lab-approval/details/{analysis_id}/approveOrDisapprove', [LabApprovalController::class, 'approveOrDisapprove'])->name('laboratory.lab_approval.approveOrDisapprove');
    });

    Route::prefix('record-and-report')->group(function () {

        Route::get('lab-acceptance', [LabAcceptanceController::class, 'index'])->name('record-and-report.lab-acceptance.index');
        Route::get('lab-acceptance/{analysis_id}', [LabAcceptanceController::class, 'details'])->name('record-and-report.lab-acceptance.details');

        Route::get('analysis-request', [AnalysisRequestController::class, 'index'])->name('record-and-report.analysis-request.index');

        Route::get('facility', function () {
            return view('record_and_report.facility.index');
        });

        Route::prefix('client')->group(function () {
            Route::get('table', [ClientController::class, 'index'])->name('record-and-report.record_and_report.client_list.index');
            Route::get('profile/{account_number}', [ClientController::class, 'profile'])->name('record-and-report.record_and_report.client_list.profile');
        });
    });

    Route::prefix('user-management')->group(function () {

        Route::get('user-lists', [RegisteredUserController::class, 'index'])->name('user-management.user-lists.index');
        Route::put('user-lists/{user}/active', [UserController::class, 'setAsActive'])->name('user-management.user-lists.setAsActive');
        Route::put('user-lists/{user}/inactive', [UserController::class, 'setAsInactive'])->name('user-management.user-lists.setAsInactive');
        // Route::get('role-lists', [RoleController::class, 'index'])->name('user-management.role-lists.index');

    });
}); // end of middleware group

// guess routes

Route::middleware('guest')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth', 'status')->group(function () {

    Route::get('register', [RoleController::class, 'roleInRegister'])->name('register');

    // Route::get('register', [RegisteredUserController::class, 'create'])
    //             ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
}); // end of middleware group

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout')->middleware('auth');