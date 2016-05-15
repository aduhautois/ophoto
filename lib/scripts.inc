<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/what-input.min.js"></script>
<script src="js/foundation.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="js/app.js"></script>
<script src="js/animate.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/photoswipe-ui-default.min.js"></script>
<script src="js/photoswipe.min.js"></script>
<script src="js/scripts.js"></script>
<script>
    new WOW().init();
</script>
<script>
  function initMap() {
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
      center: {lat: 41.033651, lng: -93.7643067},
      zoom: 8
    });
    var marker = new google.maps.Marker({
      position: {lat: 41.033651, lng: -93.7643067},
      map: map
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
    async defer></script>