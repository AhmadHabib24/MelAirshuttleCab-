<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AdminCabBookingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatrixController;
use App\Http\Controllers\MilesController;
use App\Http\Controllers\AdminPredefineBookingController;



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
//=====================================User Routs================================================
Route::get('/', [UserController::class, 'loadview'])->name('home');
Route::get('/predefine-booking', [UserController::class, 'direct_booking'])->name('predefine-booking');
Route::post('predefine-booking/store', [UserController::class, 'storeBooking'])->name('predefine-booking.store');
Route::get('thank-you', function () {
    return view('user.thankyou');
})->name('thank-you');

// Route::post('/', [UserController::class, 'loadview'])->name('home');

Route::get('/Faqs', [UserController::class, 'faqspage'])->name('faqs');
Route::get('/aboutpage', [AboutusController::class, 'loadview'])->name('aboutpage');

Route::get('/book-a-ride', [BookingController::class, 'loadview'])->name('booking');
Route::post('/book-a-ride', [BookingController::class, 'store'])->name('bookride');

Route::get('/contact-us', [ContactController::class, 'loadview'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'store']);

Route::post('/book-taxi', [BookingController::class, 'store'])->name('book.taxi');

// Route::get('/testimonials/index', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::get('/client-review', [TestimonialController::class, 'index'])->name('Client-review.index');
Route::get('getmiles',[UserController::class, 'fare'])->name('fareestimate');
Route::get('/fare-estimate', [UserController::class, 'showFareEstimate'])->name('afareestimate');


// Route::get('/matrix', [MatrixController::class, 'index']);
// Route::get('/matrix', [MatrixController::class, 'showForm'])->name('matrix.form');
// Route::post('/matrix', [MatrixController::class, 'submit'])->name('matrix.submit');




//================================Admin Route=====================================================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/cab-booking', [AdminCabBookingController::class, 'Index'])->name('cab-booking');
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');
    Route::delete('/contacts/destroy/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');


    Route::get('/admin/testimonials', [TestimonialController::class, 'adminindex'])->name('admin.testimonials.index');
    Route::get('/admin/testimonials/create', [TestimonialController::class, 'create'])->name('admin.testimonials.create');
    Route::post('/admin/testimonials', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
    Route::get('/admin/testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
    Route::put('/admin/testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('/admin/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');

    Route::get('admin/our-services/', [ServicesController::class, 'loadView'])->name('admin.our-service.loadView');
    Route::get('admin/our-services/create', [ServicesController::class, 'create'])->name('admin.our-service.create');
    Route::post('admin/our-services/store', [ServicesController::class, 'store'])->name('admin.our-service.store');
    Route::get('admin/our-services/edit/{id}', [ServicesController::class, 'edit'])->name('admin.our-service.edit');
    Route::put('admin/our-services/{id}', [ServicesController::class, 'update'])->name('admin.our-service.update');
    Route::delete('admin/our-services/delete/{id}', [ServicesController::class, 'destroy'])->name('admin.our-service.destroy');

    Route::get('admin/about/', [AboutusController::class, 'adminview'])->name('admin.about.adminview');
    Route::get('admin/about/create', [AboutusController::class, 'create'])->name('admin.about.create');
    Route::post('admin/about/store', [AboutusController::class, 'store'])->name('admin.about.store');
    Route::get('admin/about/edit/{id}', [AboutusController::class, 'edit'])->name('admin.about.edit');
    Route::put('admin/about/{id}', [AboutusController::class, 'update'])->name('admin.about.update');
    Route::delete('admin/about/delete/{id}', [AboutusController::class, 'destroy'])->name('admin.about.destroy');

    Route::get('/booking/{id}/edit', [AdminCabBookingController::class, 'edit'])->name('booking.edit');
    Route::put('/booking/{id}', [AdminCabBookingController::class, 'update'])->name('booking.update');
    Route::delete('/booking/destroy/{id}', [AdminCabBookingController::class, 'destroy'])->name('booking.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //direct booking
    Route::get('direct-booking', [AdminCabBookingController::class, 'view'])->name('direct-booking.view');
    Route::get('direct-booking/create', [AdminCabBookingController::class, 'createbooking'])->name('direct-booking.create');
    Route::post('direct-booking/store', [AdminCabBookingController::class, 'storebooking'])->name('direct-booking.store');
    Route::get('direct-booking/edit/{id}', [AdminCabBookingController::class, 'editbooking'])->name('direct-booking.edit');
    Route::put('direct-booking/update/{id}', [AdminCabBookingController::class, 'updatebooking'])->name('direct-booking.update');
    Route::delete('direct-booking/delete/{id}', [AdminCabBookingController::class, 'deletebooking'])->name('direct-booking.delete');
   
    //car catgeory
    Route::get('car-category', [AdminCabBookingController::class, 'car_category'])->name('car-category.view');
    Route::get('car-category/create', [AdminCabBookingController::class, 'categorycreate'])->name('car-category.create');
    Route::post('car-category/store', [AdminCabBookingController::class, 'categorystore'])->name('car-category.store');
    Route::get('car-category/edit/{id}', [AdminCabBookingController::class, 'categoryedit'])->name('car-category.edit');
    Route::put('car-category/update/{id}', [AdminCabBookingController::class, 'categoryupdate'])->name('car-category.update');
    Route::delete('car-category/delete/{id}', [AdminCabBookingController::class, 'categorydelete'])->name('car-category.delete');
    
    
    Route::resource('category-booking', AdminPredefineBookingController::class);
    
});

require __DIR__ . '/auth.php';
