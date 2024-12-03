<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\front\FrontController;
use \App\Http\Controllers\admin\ContactController;
use \App\Http\Controllers\admin\OrmanEvleriContactController;
use \App\Http\Controllers\admin\AdminController;
use \App\Http\Controllers\admin\AccountController;
use App\Http\Middleware\SetLocale;

Route::fallback(function () {

    return Redirect()->to('/')->send();
});



Route::group(['namespace' => 'form', 'prefix' => 'form', 'as' => 'form.'], function () {
    Route::post('/add', [\App\Http\Controllers\admin\FormController::class, 'store'])->name('store');
});

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::get('/changelanguage/{lang}', [FrontController::class, 'changeLanguage'])->name('changeLanguage');

Auth::routes();

Route::get('/ajax/{id}', [FrontController::class, 'ajax'])->name('front.ajax');
Route::get('/room_ajax/{id}', [FrontController::class, 'room_ajax'])->name('front.room_ajax');

Route::get('/ormanevleri_room_ajax/{id}', [FrontController::class, 'ormanevleri_room_ajax'])->name('front.ormanevleri_room_ajax');

Route::prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setLocale')
    ->group(function () {

        Route::get("/reservation", function () {
            return view('front.reservation');
        });


        Route::get('/', [FrontController::class, 'index'])->name('front.index');

        Route::get('/pdf/{id}', [FrontController::class, 'pdf'])->name('front.pdf');

        Route::get('/sayfalar/{selflink}/{id}', [FrontController::class, 'page'])->name('front.page');
        Route::get('/pages/{selflink}/{id}', [FrontController::class, 'page'])->name('front.page');

        Route::get('/hakkimizda', [FrontController::class, 'about'])->name('front.about');
        Route::get('/about', [FrontController::class, 'about'])->name('front.about');


        Route::get('/galeri', [FrontController::class, 'gallery'])->name('front.gallery');
        Route::get('/gallery', [FrontController::class, 'gallery'])->name('front.gallery');


        Route::get('/iletisim', [FrontController::class, 'contact'])->name('front.contact');
        Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');


        Route::get('/odalar', [FrontController::class, 'rooms'])->name('front.rooms');
        Route::get('/rooms', [FrontController::class, 'rooms'])->name('front.rooms');


        Route::get('/kurumsal/{selflink}/{id}', [FrontController::class, 'footer'])->name('front.footer');
        Route::get('/corporate/{selflink}/{id}', [FrontController::class, 'footer'])->name('front.footer');

        Route::get('/ormanevleri', [FrontController::class, 'ormanevleri'])->name('front.ormanevleri');

        Route::get('/ormanevleri/orman-evleri', [FrontController::class, 'ormanevlerirooms'])->name('front.ormanevlerirooms');
        Route::get('/ormanevleri/forest-homes', [FrontController::class, 'ormanevlerirooms'])->name('front.ormanevlerirooms');



        Route::get('/ormanevleri/mons-1750-restoran', [FrontController::class, 'ormanevleriiglo'])->name('front.ormanevleriiglo');
        Route::get('/ormanevleri/mons-1750-restaurant', [FrontController::class, 'ormanevleriiglo'])->name('front.ormanevleriiglo');

        Route::get('/ormanevleri/galeri', [FrontController::class, 'ormanevlerigallery'])->name('front.ormanevlerigallery');
        Route::get('/ormanevleri/gallery', [FrontController::class, 'ormanevlerigallery'])->name('front.ormanevlerigallery');

        Route::get('/ormanevleri/iletisim', [FrontController::class, 'ormanevlericontact'])->name('front.ormanevlericontact');
        Route::get('/ormanevleri/contact', [FrontController::class, 'ormanevlericontact'])->name('front.ormanevlericontact');
    });







// this is for the admin panel
Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'AdminCtrl']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::post('/account/edit', [AccountController::class, 'update'])->name('account.update');


    Route::group(['namespace' => 'contact', 'prefix' => 'contact', 'as' => 'contact.'], function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::post('/edit/{id}', [ContactController::class, 'update'])->name('update');
    });

    Route::group(['namespace' => 'ormanevleri-contact', 'prefix' => 'ormanevleri-contact', 'as' => 'ormanevleri-contact.'], function () {
        Route::get('/', [OrmanEvleriContactController::class, 'index'])->name('index');
        Route::post('/edit/{id}', [OrmanEvleriContactController::class, 'update'])->name('update');
    });

    Route::group(['namespace' => 'language', 'prefix' => 'language', 'as' => 'language.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\LanguageController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\LanguageController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::post('/add', [\App\Http\Controllers\admin\LanguageController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [\App\Http\Controllers\admin\LanguageController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\LanguageController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [\App\Http\Controllers\admin\LanguageController::class, 'delete'])->name('delete');
    });



    Route::group(['namespace' => 'form', 'prefix' => 'form', 'as' => 'form.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\FormController::class, 'index'])->name('index');
        Route::get('/delete/{id}', [\App\Http\Controllers\admin\FormController::class, 'delete'])->name('delete');
    });


    Route::group(['namespace' => 'about', 'prefix' => 'about', 'as' => 'about.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\AboutController::class, 'index'])->name('index');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\AboutController::class, 'update'])->name('update');
    });


    Route::group(['namespace' => 'room', 'prefix' => 'room', 'as' => 'room.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\RoomController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\RoomController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::get('/add', [\App\Http\Controllers\admin\RoomController::class, 'create'])->name('create');
        Route::post('/add', [\App\Http\Controllers\admin\RoomController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [\App\Http\Controllers\admin\RoomController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\RoomController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [\App\Http\Controllers\admin\RoomController::class, 'delete'])->name('delete');
    });

    Route::group(['namespace' => 'ormanevleri-room', 'prefix' => 'ormanevleri-room', 'as' => 'ormanevleri-room.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\OrmanEvleriRoomController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\OrmanEvleriRoomController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::get('/add', [\App\Http\Controllers\admin\OrmanEvleriRoomController::class, 'create'])->name('create');
        Route::post('/add', [\App\Http\Controllers\admin\OrmanEvleriRoomController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [\App\Http\Controllers\admin\OrmanEvleriRoomController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\OrmanEvleriRoomController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [\App\Http\Controllers\admin\OrmanEvleriRoomController::class, 'delete'])->name('delete');
    });



    Route::group(['namespace' => 'room_gallery', 'prefix' => 'room_gallery', 'as' => 'room_gallery.'], function () {
        Route::get('/{id}', [\App\Http\Controllers\admin\RoomGalleryController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\RoomGalleryController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::post('/add', [\App\Http\Controllers\admin\RoomGalleryController::class, 'store'])->name('store');
        Route::get('/delete/{id}/{room_id}', [\App\Http\Controllers\admin\RoomGalleryController::class, 'delete'])->name('delete');
    });

    Route::group(['namespace' => 'ormanevleri-room_gallery', 'prefix' => 'ormanevleri-room_gallery', 'as' => 'ormanevleri-room_gallery.'], function () {
        Route::get('/{id}', [\App\Http\Controllers\admin\OrmanEvleriRoomGalleryController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\OrmanEvleriRoomGalleryController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::post('/add', [\App\Http\Controllers\admin\OrmanEvleriRoomGalleryController::class, 'store'])->name('store');
        Route::get('/delete/{id}/{room_id}', [\App\Http\Controllers\admin\OrmanEvleriRoomGalleryController::class, 'delete'])->name('delete');
    });

    Route::group(['namespace' => 'pdf', 'prefix' => 'pdf', 'as' => 'pdf.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\PdfController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\PdfController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::post('/add', [\App\Http\Controllers\admin\PdfController::class, 'store'])->name('store');
        Route::get('/delete/{id}', [\App\Http\Controllers\admin\PdfController::class, 'delete'])->name('delete');
    });

    Route::group(['namespace' => 'blog', 'prefix' => 'blog', 'as' => 'blog.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\BlogController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\BlogController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::get('/add', [\App\Http\Controllers\admin\BlogController::class, 'create'])->name('create');
        Route::post('/add', [\App\Http\Controllers\admin\BlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [\App\Http\Controllers\admin\BlogController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\BlogController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [\App\Http\Controllers\admin\BlogController::class, 'delete'])->name('delete');
    });


    Route::group(['namespace' => 'blog_gallery', 'prefix' => 'blog_gallery', 'as' => 'blog_gallery.'], function () {
        Route::get('/{id}', [\App\Http\Controllers\admin\BlogGalleryController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\BlogGalleryController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::post('/add', [\App\Http\Controllers\admin\BlogGalleryController::class, 'store'])->name('store');
        Route::get('/delete/{id}/{facility_id}', [\App\Http\Controllers\admin\BlogGalleryController::class, 'delete'])->name('delete');
        Route::get('/destroy/{facility_id}', [\App\Http\Controllers\admin\BlogGalleryController::class, 'destroy'])->name('destroy');
    });


    Route::group(['namespace' => 'homepage', 'prefix' => 'homepage', 'as' => 'homepage.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\HomepageController::class, 'index'])->name('index');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\HomepageController::class, 'update'])->name('update');
    });

    Route::group(['namespace' => 'ormanevleri-homepage', 'prefix' => 'ormanevleri-homepage', 'as' => 'ormanevleri-homepage.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\OrmanEvleriHomepageController::class, 'index'])->name('index');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\OrmanEvleriHomepageController::class, 'update'])->name('update');
    });

    Route::group(['namespace' => 'ormanevleri-iglo', 'prefix' => 'ormanevleri-iglo', 'as' => 'ormanevleri-iglo.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\OrmanEvleriIgloController::class, 'index'])->name('index');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\OrmanEvleriIgloController::class, 'update'])->name('update');
    });


    Route::group(['namespace' => 'slider_category', 'prefix' => 'slider_category', 'as' => 'slider_category.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\SliderCategoryController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\SliderCategoryController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::post('/add', [\App\Http\Controllers\admin\SliderCategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [\App\Http\Controllers\admin\SliderCategoryController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\SliderCategoryController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [\App\Http\Controllers\admin\SliderCategoryController::class, 'delete'])->name('delete');
    });

    Route::group(['namespace' => 'slider', 'prefix' => 'slider', 'as' => 'slider.'], function () {
        Route::get('/{id}', [\App\Http\Controllers\admin\SliderController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\SliderController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::post('/add', [\App\Http\Controllers\admin\SliderController::class, 'store'])->name('store');
        Route::get('/delete/{id}/{slider_id}', [\App\Http\Controllers\admin\SliderController::class, 'delete'])->name('delete');
        Route::get('/destroy/{slider_id}', [\App\Http\Controllers\admin\SliderController::class, 'destroy'])->name('destroy');
    });




    Route::group(['namespace' => 'footer', 'prefix' => 'footer', 'as' => 'footer.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\FooterController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\FooterController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::get('/add', [\App\Http\Controllers\admin\FooterController::class, 'create'])->name('create');
        Route::post('/add', [\App\Http\Controllers\admin\FooterController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [\App\Http\Controllers\admin\FooterController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\FooterController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [\App\Http\Controllers\admin\FooterController::class, 'delete'])->name('delete');
    });



    Route::group(['namespace' => 'tkd', 'prefix' => 'tkd', 'as' => 'tkd.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\TkdController::class, 'index'])->name('index');
        Route::get('/add', [\App\Http\Controllers\admin\TkdController::class, 'create'])->name('create');
        Route::post('/add', [\App\Http\Controllers\admin\TkdController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [\App\Http\Controllers\admin\TkdController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\TkdController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [\App\Http\Controllers\admin\TkdController::class, 'delete'])->name('delete');
    });

    Route::group(['namespace' => 'code', 'prefix' => 'code', 'as' => 'code.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\CodeController::class, 'index'])->name('index');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\CodeController::class, 'update'])->name('update');
    });


    Route::group(['namespace' => 'page', 'prefix' => 'page', 'as' => 'page.'], function () {
        Route::get('/', [\App\Http\Controllers\admin\PageController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\PageController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::get('/add', [\App\Http\Controllers\admin\PageController::class, 'create'])->name('create');
        Route::post('/add', [\App\Http\Controllers\admin\PageController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [\App\Http\Controllers\admin\PageController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\PageController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [\App\Http\Controllers\admin\PageController::class, 'delete'])->name('delete');
    });


    Route::group(['namespace' => 'page_detail', 'prefix' => 'page_detail', 'as' => 'page_detail.'], function () {
        Route::get('/{id}', [\App\Http\Controllers\admin\PageDetailController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\PageDetailController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::get('/add/{id}', [\App\Http\Controllers\admin\PageDetailController::class, 'create'])->name('create');
        Route::post('/add', [\App\Http\Controllers\admin\PageDetailController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [\App\Http\Controllers\admin\PageDetailController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [\App\Http\Controllers\admin\PageDetailController::class, 'update'])->name('update');
        Route::get('/delete/{id}/{page_id}', [\App\Http\Controllers\admin\PageDetailController::class, 'delete'])->name('delete');
    });


    Route::group(['namespace' => 'page_gallery', 'prefix' => 'page_gallery', 'as' => 'page_gallery.'], function () {
        Route::get('/{id}', [\App\Http\Controllers\admin\PageGalleryController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\PageGalleryController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::post('/add', [\App\Http\Controllers\admin\PageGalleryController::class, 'store'])->name('store');
        Route::get('/delete/{id}/{page_id}', [\App\Http\Controllers\admin\PageGalleryController::class, 'delete'])->name('delete');
    });


    Route::group(['namespace' => 'page_detail_gallery', 'prefix' => 'page_detail_gallery', 'as' => 'page_detail_gallery.'], function () {
        Route::get('/{id}', [\App\Http\Controllers\admin\PageDetailGalleryController::class, 'index'])->name('index');
        Route::post('/ajaxdesk', [\App\Http\Controllers\admin\PageDetailGalleryController::class, 'ajaxdesk'])->name('ajaxdesk');
        Route::post('/add', [\App\Http\Controllers\admin\PageDetailGalleryController::class, 'store'])->name('store');
        Route::get('/delete/{id}/{page_detail_id}', [\App\Http\Controllers\admin\PageDetailGalleryController::class, 'delete'])->name('delete');
    });
});
