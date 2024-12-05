<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\front\FrontController;
use \App\Http\Controllers\admin\ContactController;
use \App\Http\Controllers\admin\OrmanEvleriContactController;
use \App\Http\Controllers\admin\AdminController;
use \App\Http\Controllers\admin\AccountController;
use App\Http\Controllers\guest\HomeController;
use App\Http\Middleware\SetLocale;

// this is for the professionals

// not an error
Auth::routes();


// Route::get('/', function () {
//     return view('guest.index');
// });

Route::get('/about', function () {
    return view('guest.about.index');
});

Route::get('/404', function () {
    return view('guest.404.index');
});

Route::get('/contact', function () {
    return view('guest.contact.index');
});

Route::get('/control-screen', function () {
    return view('guest.control-screen.index');
});

// Route::get('/foresthome', function () {
//     return view('guest.foresthome.index');
// });

// Route::get('/gallery', function () {
//     return view('guest.gallery.index');
// });

Route::get('/karinnahotel', function () {
    return view('guest.karinnahotel.index');
});

Route::get('/payment-screen', function () {
    return view('guest.payment-screen.index');
});

Route::get('/reservation', function () {
    return view('guest.reservation.index');
});

Route::get('/reservation-list', function () {
    return view('guest.reservation-list.index');
});

Route::get('/restaurant', function () {
    return view('guest.restaurant.index');
});

Route::get('/services', function () {
    return view('guest.services.index');
});

Route::get('/standart-deluxe-oda', function () {
    return view('guest.standart-deluxe-oda.index');
});

// guest routes======================
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/foresthome', [HomeController::class, 'foresthome'])->name('foresthome');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');




// Route::get('/', [HomeController::class, 'index'])->name('home');

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

    // galery
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
