<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title> Compare4Care.org</title>
  <link href="compare4care.css" rel="stylesheet" type "text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
	$('.navbar-nav > li > a[href="'+pathname+'"]').parent().addClass('active');
})
</script>
<script>
$("#Insuranceprov").change(function(){
    if($("#Insuranceprov").val != "0"){
      $('#Insuranceplans').attr("disabled", false);
    }
    else{
        $('#Insuranceplans').attr("disabled", true);
    }
    });</script>
  <body>
<div id = "header">

  <span id="logo"></span>
  <div class="banner">
    <div id="bannerimage">
      <a href="Compare4care.html"><img src="Compare4carelogo.png"></a>
    </div>
    <div id="login">
      <form>
        <div class = "loginUsername">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username">
        </div>
        <div class="loginPassword">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
      </div>
        <div id="lower">
          <input type="checkbox"><label for="checkbox">Keep me logged in</label>
          <input type="submit" value="Login">
        </div>
      </form>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-comp-red">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/" >Home<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/database.php">Database</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/submitInfo.php">Submit Info</a>
      </li>
    </ul>
  </div>
</nav>


</div>
