

<div class="container">
  <div class="row">
    <div class="col-12">
    
    <div class="reservation-widget hotelDetails hotelReservationSteps reservation" id="tb-reservation" style="background: #fff;margin-bottom: 15px"></div>
    </div>
  
  </div>
</div>

<script type="text/javascript">
    var TB = {
        data : {
            adult : 2,
            child : 0,
            childAge : [],
            hotelId : 'd129a04d71564bffbca7967ae88971d4',
            agencyId: '4c11f107823241e28638401515ed8e90',
            subsidiaryId:0,
            agentId: '7919',
            productType : 'hotel',
            version: Math.random(),
            hotelPhone:''
        },
        error: function(){
            alert('Hata oluştu! Lütfen daha sonra tekrar deneyiniz.');
        }
    };
    (function(d, s, id) {
        var js, tbjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//www.tatilbudur.com/themes/tbnew/assets/widgets/reservation/tatilbudur-widgets.js?ver="+TB.data.version;
        tbjs.parentNode.insertBefore(js, tbjs);
    }(document, 'script', 'tb-jssdk'));
</script>



