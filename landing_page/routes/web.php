<?php
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyRegistration;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Company_registration', [CompanyRegistration::class, 'CompanyRegistration'])->name('CompanyRegistration');
Route::post('/company-data/store', [CompanyRegistration::class, 'store'])->name('company.data.store');

Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name('dashboard');
Route::post('/dashboard/export', [Dashboard::class, 'exportPDF'])->name('dashboard.export.pdf');