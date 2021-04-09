<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<style>
.mySlides {display:none}
.sliding{
}

.w3-container{
  text-align: center;
  padding-top: 60px;
}
.white{
  color: white;
  font-family: 'Syncopate', sans-serif;
}
.colorpaste{
background-color: #01bacf;
color: white;
}
.colorpaste:hover{
  background-color: black;

}
.pad
{
  padding-bottom: 60px;
}
</style>
<div class="sliding">

<div class="w3-container">
 <h3 class="shadowing check">Partnered With</h3>
  <p class="onwhitesubsec">we are partnered with one of the best universities in the world!</p>
</div>

<div class="w3-content backg" style="max-width:800px">
  <img class="mySlides" src="img/alberta1.jpg" style="width:100%">
  <img class="mySlides" src="img/calgary.jpg" style="width:100%">
  <img class="mySlides" src="img/chicago.jpg" style="width:100%">
</div>

<div class="w3-center pad">
  <div class="w3-section">
    <button class="w3-button w3-light-grey colorpaste" onclick="plusDivs(-1)">❮ Prev</button>
    <button class="w3-button w3-light-grey colorpaste" onclick="plusDivs(1)">Next ❯</button>
  </div>
  <button class="w3-button demo colorpaste" onclick="currentDiv(1)">1</button> 
  <button class="w3-button demo colorpaste" onclick="currentDiv(2)">2</button> 
  <button class="w3-button demo colorpaste " onclick="currentDiv(3)">3</button> 
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
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " ";
}
</script>

</div>

