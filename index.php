
    <?php include_once('header.php');?>

      <div id="Surgerybanner">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-3">
            <div id="typeofsurg">
              <div class="optype">Select type of Operation:</div>
              <select id="Typeofsurgery">
                <option value = "0"></option>
                <option value = "1">Rhinoplasty</option>
                <option value = "2">Hip replacement</option>
                <option value = "3">Bowtox</option>
                <option value = "4">Breast Reconstruction</option>
        	    	<option value = "5">Kidney Transplant</option>
        	    	<option value = "6">Knee replacement</option>
              </select>
            </div>
          </div>
          <div class="col-3">
            <div id="typeofinsur">
              <div class="insurtype">Provider</div>
              <select id="Insuranceprov">
                <option value = "0"></option>
                <option value = "1">Blue Cross Blue Shield</option>
                <option value = "2">United HealthGroup</option>
                <option value = "3">Wellpoint</option>
                <option value = "4">Humana</option>
    		        <option value = "5">Highmark</option>
    	          <option value = "6">Cigna Health</option>
              </select>
            </div>
        </div>
        <div class="col-3"> </div>
      </div>
      <br />
      <div class="row">
        <div class="col-3"></div>
        <div class="col-3">
          <div id="location">
            <div class="optype">Your Location:</div>
            <div id="locationField">
              <input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div id="typeofinsur">
            <div class="insurtype">Select Insurance Plan</div>
            <select id="Insuranceplans" disabled>
              <option value = "0"></option>
              <option value = "1">Blue Cross Blue Shield</option>
              <option value = "2">United HealthGroup</option>
              <option value = "3">Wellpoint</option>
              <option value = "4">Humana</option>
              <option value = "5">Highmark</option>
              <option value = "6">Cigna Health</option>
            </select>
          </div>
      </div>
      <div class="col-3"> </div>
    </div>

    </div>
    <br />
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="2000px" height="1000" id="gmap_canvas" src="https://maps.google.com/maps?q=Iowa City&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
      </div>
    </div>
    <p style="clear:both"><br></p>
    <script>function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});


      }
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
      </script>
      <script>
      $("#Insuranceprov").change(function(){
          if($("#Insuranceprov").val() != "0"){
            $('#Insuranceplans').prop("disabled", false);
          }
          else{
              $('#Insuranceplans').prop("disabled", true);
              $("#Insuranceplans").val("0");
          }
          });</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClve9-lu-nJWthDhT17BgadylmCwkOx6k&libraries=places&callback=initAutocomplete"
            async defer></script>
  <?php include_once('footer.php');?>
