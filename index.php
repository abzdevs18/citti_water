<?php

	include_once 'head.php';
?>

<section>
	<div class="citiwater">
		<h1>Welcome to Citi Water</h1>
	</div>

<div class="w3-content w3-display-container slide">
  <img class="mySlides" src="images/6.jpg">
  <img class="mySlides" src="images/7.jpg">
  <img class="mySlides" src="images/8.jpg">
  <img class="mySlides" src="images/1.jpg">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

	<div>
		<p style="padding-top: 10px;">Your best choice drinking water services around Dumaguete City.</p>
	</div>
</section>

	<a href="admin_form.php"><button class="btn"> Admin</button></a>

<?php
	include_once 'foot.php';
?>
