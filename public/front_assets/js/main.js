
/*foter */
var footerBtn = document.querySelector(".mobil-foter-btn");
var menuList = document.querySelector(".mobil-hide");

if (footerBtn) {
    footerBtn.addEventListener("click", function () {
        menuList.classList.toggle("mobil-show");
    });
}
/* footer*/

/*gallery*/

var galleryButton = document.querySelector(".gallery-button");
var galleryTabPanel = document.querySelector(".gallery-tab-panel");

if(galleryButton){
    galleryButton.addEventListener("click", function (){
        galleryTabPanel.classList.toggle("gallery-tab-panel-show");
    });
}

/*gallery*/

/*home menu */
var btnMenu = document.querySelector(".btn-mobil-d-none");
var topMenu = document.querySelector(".nav-home-menu");


if (btnMenu) {
    btnMenu.addEventListener("click", function () {
        topMenu.classList.remove("nav-home-menu-hide");
        topMenu.classList.toggle("nav-home-menu-show");
    });
}



var btnMenuHide = document.querySelector(".btn-menu-hide");
var topMenu = document.querySelector(".nav-home-menu");


if (btnMenuHide) {
    btnMenuHide.addEventListener("click", function () {
        topMenu.classList.remove("nav-home-menu-show");
        topMenu.classList.toggle("nav-home-menu-hide");
    });
}




var btnMenuHideMobil = document.querySelector(".mobil-d-none");
var topMenu = document.querySelector(".nav-home-menu");

if (btnMenuHideMobil) {
    btnMenuHideMobil.addEventListener("click", function () {
        topMenu.classList.remove("nav-home-menu-hide");
        topMenu.classList.toggle("nav-home-menu-show");
    });
}

/* home menu */




/* bussiness */

var mobilBusiness = document.querySelector("#mobilBusiness");
var businessPageMenu = document.querySelector(".business-page-menu");

if (mobilBusiness) {
    mobilBusiness.addEventListener("click", function () {
        businessPageMenu.classList.remove("business-page-menu-hide");
        businessPageMenu.classList.toggle("business-page-menu-show");
    });
}


var btnBuussines = document.querySelector("#btnBuussines");
if (btnBuussines) {
    btnBuussines.addEventListener("click", function () {
        businessPageMenu.classList.remove("business-page-menu-show");
        businessPageMenu.classList.toggle("business-page-menu-hide");
    });
}



var bussinessBtn = document.querySelector("#bussinessBtn");
if (bussinessBtn) {
    bussinessBtn.addEventListener("click", function () {
        businessPageMenu.classList.remove("business-page-menu-hide");
        businessPageMenu.classList.toggle("business-page-menu-show");
    });
}

/* bussiness */



/* gallery page*/

var mobilGallery = document.querySelector(".mobil-gallery-list");
var navTabs = document.querySelector(".nav-tabs");

if (mobilGallery) {
    mobilGallery.addEventListener("click", function () {
        navTabs.classList.remove("nav-tabs-hide");
        navTabs.classList.toggle("nav-tabs-show");
    });
}

var galleryBtn = document.querySelector(".gallery-btn");
if (galleryBtn) {
    galleryBtn.addEventListener("click", function () {
        navTabs.classList.remove("nav-tabs-show");
        navTabs.classList.add("nav-tabs-hide");
    });
}

/* gallery page*/



/*video modal */




var modal1 = document.getElementById("modalOne");
$("#closeModal1").click(function () {
    $("#modalOne").fadeOut("slow");
});
window.onclick = function (event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

$("#modalShow").click(function () {
    $("#modalOne").fadeIn("slow");
})
/*video modal */


/*video modal */




var modal2 = document.getElementById("modalTwo");
$("#closeModal2").click(function () {
    $("#modalTwo").fadeOut("slow");
});
window.onclick = function (event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

$("#modalShow2").click(function () {
    $("#modalTwo").fadeIn("slow");
})
/*video modal */


//// cal nov

$(".call-now-content").hover(function () {
        $(".call-nov-link").addClass("link-active");
    }, function () {
        $(".call-nov-link").removeClass("link-active");
    }
);

//// cal nov


///whatsap no

$(".whatsapp-content").hover(function () {
        $(".whatsapp-link").addClass("link-active");
    }, function () {
        $(".whatsapp-link").removeClass("link-active");
    }
);

///whatsap no


/// reservation

$(".reservation-content").hover(function () {
        $(".reservation-link").addClass("link-active");
    }, function () {
        $(".reservation-link").removeClass("link-active");
    }
);

/// reservation

$(".geri-don").hover(function () {
        $(".geri-don-link").addClass("link-active");
    }, function () {
        $(".geri-don-link").removeClass("link-active");
    }
);

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.documentElement.scrollTop > 300) {
        $(".navbar-main").addClass("nav-bar-fixed");
        $(".nav-logo-img").addClass("img-fixed");
        $(".menu-list-ul li a ").addClass("menu-link-font-weight");
        $(".menu-list").addClass("menu-list-fixed");
        $(".language-mobile-ul").addClass("language-mobile-ul-fixed");
        $(".language-btn").addClass("language-btn-mobil");
        $(".logo-nav ").addClass("logo-nav-scroll");
    } else {
        $(".navbar-main").removeClass("nav-bar-fixed");
        $(".nav-logo-img").removeClass("img-fixed");
        $(".menu-list-ul li a ").removeClass("menu-link-font-weight");
        $(".menu-list").removeClass("menu-list-fixed");
        $(".language-mobile-ul").removeClass("language-mobile-ul-fixed");
        $(".language-btn").removeClass("language-btn-mobil");
        $(".logo-nav ").removeClass("logo-nav-scroll");
    }
}