
var date = new Date();
var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
var today1 = new Date(date.getFullYear(), date.getMonth(), date.getDate() + 3);






var departure = today.toLocaleDateString();
const myDeparture = departure.split(".");
$(".check-in-day-lbl").text(myDeparture[0]);


var exitDate = today1.toLocaleDateString();
const myExitDate = exitDate.split(".");
$(".check-out-date-lbl").text(myExitDate[0]);



if (myExitDate[1] == 1) {
  $(".check-in-day-p").text("Jan");
}
else if (myExitDate[1] == 2) {
  $(".check-in-day-p").text("Feb");
}
else if (myExitDate[1] == 3) {
  $(".check-in-day-p").text("Mar");
}
else if (myExitDate[1] == 4) {
  $(".check-in-day-p").text("Apr");
}
else if (myExitDate[1] == 5) {
  $(".check-in-day-p").text("May");
}
else if (myExitDate[1] == 6) {
  $(".check-in-day-p").text("Jun");
}
else if (myExitDate[1] == 7) {
  $(".check-in-day-p").text("Jul");
}
else if (myExitDate[1] == 8) {
  $(".check-in-day-p").text("Aug");
}
else if (myExitDate[1] == 9) {
  $(".check-in-day-p").text("Sep");
}
else if (myExitDate[1] == 10) {
  $(".check-in-day-p").text("Oct");
}
else if (myExitDate[1] == 11) {
  $(".check-in-day-p").text("Nov");
}
else if (myExitDate[1] == 12) {
  $(".check-in-day-p").text("Dec");
}


if (myExitDate[1] == 1) {
  $(".check-out-date-p").text("Jan");
}
else if (myExitDate[1] == 2) {
  $(".check-out-date-p").text("Feb");
}
else if (myExitDate[1] == 3) {
  $(".check-out-date-p").text("Mar");
}
else if (myExitDate[1] == 4) {
  $(".check-out-date-p").text("Apr");
}
else if (myExitDate[1] == 5) {
  $(".check-out-date-p").text("May");
}
else if (myExitDate[1] == 6) {
  $(".check-out-date-p").text("Jun");
}
else if (myExitDate[1] == 7) {
  $(".check-out-date-p").text("Jul");
}
else if (myExitDate[1] == 8) {
  $(".check-out-date-p").text("Aug");
}
else if (myExitDate[1] == 9) {
  $(".check-out-date-p").text("Sep");
}
else if (myExitDate[1] == 10) {
  $(".check-out-date-p").text("Oct");
}
else if (myExitDate[1] == 11) {
  $(".check-out-date-p").text("Nov");
}
else if (myExitDate[1] == 12) {
  $(".check-out-date-p").text("Dec");
}

var startDate;
var endDate;

$(function () {
  $('#datetimes').daterangepicker({
    timePicker: true,
    startDate: moment().startOf(today),
    endDate: moment().startOf('day').add(3, 'day'),
    minDate: today,
    locale: {
      format: 'YYYY-MM-DD',
      applyLabel: "Uygula",
      cancelLabel: "Vazgeç",
    }
  }, function (start, end,) {

    startDate = start.format('YYYY-MM-DD');
    endDate = end.format('YYYY-MM-DD');

    const myStartDate = startDate.split("-");
    $(".check-in-day-lbl").text(myStartDate[2]);

    const myEndDate = endDate.split("-");
    $(".check-out-date-lbl").text(myEndDate[2]);

    if (myStartDate[1] == 1) {
      $(".check-in-day-p").text("Jan");
    }
    else if (myStartDate[1] == 2) {
      $(".check-in-day-p").text("Feb");
    }
    else if (myStartDate[1] == 3) {
      $(".check-in-day-p").text("Mar");
    }
    else if (myStartDate[1] == 4) {
      $(".check-in-day-p").text("Apr");
    }
    else if (myStartDate[1] == 5) {
      $(".check-in-day-p").text("May");
    }
    else if (myStartDate[1] == 6) {
      $(".check-in-day-p").text("Jun");
    }
    else if (myStartDate[1] == 7) {
      $(".check-in-day-p").text("Jul");
    }
    else if (myStartDate[1] == 8) {
      $(".check-in-day-p").text("Aug");
    }
    else if (myStartDate[1] == 9) {
      $(".check-in-day-p").text("Sep");
    }
    else if (myStartDate[1] == 10) {
      $(".check-in-day-p").text("Oct");
    }
    else if (myStartDate[1] == 11) {
      $(".check-in-day-p").text("Nov");
    }
    else if (myStartDate[1] == 12) {
      $(".check-in-day-p").text("Dec");
    }



    if (myEndDate[1] == 1) {
      $(".check-out-date-p").text("Jan");
    }
    else if (myEndDate[1] == 2) {
      $(".check-out-date-p").text("Feb");
    }
    else if (myEndDate[1] == 3) {
      $(".check-out-date-p").text("Mar");
    }
    else if (myEndDate[1] == 4) {
      $(".check-out-date-p").text("Apr");
    }
    else if (myEndDate[1] == 5) {
      $(".check-out-date-p").text("May");
    }
    else if (myEndDate[1] == 6) {
      $(".check-out-date-p").text("Jun");
    }
    else if (myEndDate[1] == 7) {
      $(".check-out-date-p").text("Jul");
    }
    else if (myEndDate[1] == 8) {
      $(".check-out-date-p").text("Aug");
    }
    else if (myEndDate[1] == 9) {
      $(".check-out-date-p").text("Sep");
    }
    else if (myEndDate[1] == 10) {
      $(".check-out-date-p").text("Oct");
    }
    else if (myEndDate[1] == 11) {
      $(".check-out-date-p").text("Nov");
    }
    else if (myEndDate[1] == 12) {
      $(".check-out-date-p").text("Dec");
    }


  });
});



var countAdlt = 2;
$(".adult-count-p").text(countAdlt);



$(".btn-upgrade-adult").on("click", function () {
  countAdlt++;
  $(".adult-count-p").text(countAdlt);
  $(".adult-input").val(countAdlt);
  console.log(countAdlt);
  if (parseInt(countAdlt) == 6) {
    $(".btn-upgrade-adult").attr("disabled", true);
    $(".btn-decrease-adult").attr("disabled", false);
  }
})


$(".btn-decrease-adult").on("click", function () {
  countAdlt--;
  $(".adult-count-p").text(countAdlt);
  $(".adult-input").val(countAdlt);
  if (parseInt(countAdlt) == 1) {
    $(".btn-decrease-adult").attr("disabled", true);
    $(".btn-upgrade-adult").attr("disabled", false);
  }
})



$(".btn-search-room").on("click", function () {
  let date = $("#datetimes").val();
  let nevDate = date.split(" - ");
  var anchor = document.createElement('a');
  anchor.href = 'https://washingtonresorthotel.reswio.com/tr/washington-resort-hotel/' + nevDate[0] + '/' + nevDate[1] + '/' + countAdlt + '';
  anchor.target = "_blank";
  anchor.click();

});



$("#adultShow").on("click", function (e) {
  $(".adult-count-content").toggle();
  e.stopPropagation();
});
$(".adult-count-content").click(function (e) {
  e.stopPropagation();
});

$(document).click(function () {
  $(".adult-count-content").hide();
});

$("#btnWidget").on("click", function (){
  $(".search-widget").toggleClass("search-widget-show");
});