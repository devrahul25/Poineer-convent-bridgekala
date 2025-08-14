<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('about', 'about')->name('about');
    Route::get('academic-area', 'academicArea')->name('academic-area');
    Route::get('Infrastructure', 'Infrastructure')->name('Infrastructure');
    Route::get('admission', 'admission')->name('admission');
    Route::get('alumni', 'alumni')->name('alumni');
    Route::get('athletics', 'athletics')->name('athletics');
    Route::get('blog-details', 'blogDetails')->name('blog-details');
    Route::get('saras-mandatory-disclosure', 'sarasMandatoryDisclosure')->name('saras-mandatory-disclosure');
    Route::get('blog-list', 'blogList')->name('blog-list');
    Route::get('mandatory-public-disclosure', 'mandatoryPublicDisclosure')->name('mandatory-public-disclosure');
    Route::get('scholarship', 'scholarship')->name('scholarship');
    Route::get('research', 'research')->name('research');
    Route::get('program-single', 'programSingle')->name('program-single');
    Route::get('notice-details', 'noticeDetails')->name('notice-details');
    Route::get('school-overview', 'schoolOverview')->name('school-overview');
    Route::get('contact', 'contact')->name('contact');
    Route::get('department-details', 'departmentDetails')->name('department-details');
    Route::get('event-details', 'eventDetails')->name('event-details');
    Route::get('event', 'event')->name('event');
    Route::get('manager-desk', 'managerDesk')->name('manager-desk');
    Route::get('principal-desk', 'principalDesk')->name('principal-desk');
    Route::get('faculty-sub-details', 'facultySubDetails')->name('faculty-sub-details');
    Route::get('faculty-sub', 'facultySub')->name('faculty-sub');
    Route::get('faculty', 'faculty')->name('faculty');
    Route::get('fee-structure', 'feeStructure')->name('fee-structure');
    Route::get('campus-life-sc', 'campusLife')->name('campus-life-sc');
    Route::get('co-curricular', 'coCurricular')->name('co-curricular');
    Route::get('examinations', 'Examinations')->name('examinations');
    Route::get('school-calendar', 'schoolCalender')->name('school-calendar');
    Route::get('image-gallery', 'Gallery')->name('image-gallery');
    Route::get('video-gallery', 'Video')->name('video-gallery');
});
