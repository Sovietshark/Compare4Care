<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title> Compare4Care.org</title>
  <link href="compare4care.css" rel="stylesheet" type "text/css">

</head>

  <body>
    <?php include_once('header.php');?>
    <div class="Surgerybanner">
      <div id="typeofsurg">
        <div class="optype">Select type of Operation:</div>
        <select id="Typeofsurgery">
        <option value = "1">Rhinoplasty</option>
        <option value = "2">Hip replacement</option>
        <option value = "3">Bowtox</option>
        <option value = "4">Breast Reconstruction</option>
	    	<option value = "5">Kidney Transplant</option>
	    	<option value = "6">Knee replacement</option>
    </select>
      </div>
      <div id="typeofinsur">
        <div class="insurtype">Select Insurance Plan</div>
          <select id="Insuranceplans">
            <option value = "1">Blue Cross Blue Shield</option>
            <option value = "2">United HealthGroup</option>
            <option value = "3">Wellpoint</option>
            <option value = "4">Humana</option>
		        <option value = "5">Highmark</option>
	          <option value = "6">Cigna Health</option>
          </select>
      </div>
    </div>
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="2000px" height="1000" id="gmap_canvas" src="https://maps.google.com/maps?q=Iowa City&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
      </div>
    </div>
    <p style="clear:both"><br></p>
  </body>

  </html>
