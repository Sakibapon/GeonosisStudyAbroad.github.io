<?php
   $title = "Scholarships"; 
   include ('header.php') ;
  ?>




<style type="">

.scholarship{
	padding: 60px;
	font-family: 'Syncopate', sans-serif;
}	
.col-text {
  height:30em;
}
.grid-flex {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  flex-direction: row; 
  -webkit-flex-direction: row;
  -webkit-flex-wrap: wrap;
  -webkit-justify-content: space-around;
}
.col {
  -webkit-box-flex: 1;
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
}
.col-left {
  -webkit-box-ordinal-group:-1;
  -webkit-order: -1;
  -ms-flex-order: -1;
  order: -1;
}
.col-text{
  display: flex;
  align-items: center;
  justify-content: center;
}
.Aligner-item {
  width: 60%;
}
.col-image {
  background-size: cover;
  background-position:center center;
}
.col:hover{
	opacity: 75%;
}
@media (max-width: 640px) {
  .grid-flex {
    height: 40em;
    display: -webkit-flex;
    -webkit-flex-direction: column;
    flex-direction: column; 
   }
  .col {
    order:vertical;
  }
  .col-left {
    -webkit-box-ordinal-group:0;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
  }
  .col-text div p {
    padding: 1em;
  }
  .Aligner-item {
    width: 90%;
  }
}

.photoa{
	background-color: black;
	color: white;
}

</style>



<div class="scholarship">
<!--Griglia alternata testo e immagine, resposive con flexbox.-->
<section>
  <div class="grid-flex photoa">
    <div class="col col-image" style="background-image: url(img/daad.jpg);">
    </div>
    <div class="col col-text">
      <div class="Aligner-item">
      	<h3 class="whiting check">German Academic Exchange Service DAAD</h3>

        <p>Would you like to study, carry out research or learn German in Germany and are you looking for funding? Then look no further! Every year, the German Academic Exchange Service supports well over 100,000 German and international students and researchers around the globe.

         <p class="subsec check">Offered Money : Fully Funded</p>
         <p class="subsec check">Deadline : 17 July 2021</p>
<a href="https://www.daad.de/en/" class="btn btn-primary">Apply</a>
        </p>

      </div>
    </div>
  </div>
  
  <div class="grid-flex">
    <div class="col col-image" style="background-image: url(img/great.jpg);">
      &nbsp;
    </div>
    <div class="col col-text col-left">
      <div class="Aligner-item">
      	<h3 class="shadowing check">GREAT Scholarships - Bangladesh</h3>
        <p>
GREAT Scholarships offers 11 scholarships from UK universities, across a variety of subjects for students from Bangladesh. Each scholarship is worth a minimum of £10,000 towards tuition fees for a one-year postgraduate course.
            <p class="subsec check">Offered Money : 10,000$</p>
         	<p class="subsec check">Deadline : 21 March 2021</p>
         	<a href="https://study-uk.britishcouncil.org/scholarships/great-scholarships/bangladesh?utm_campaign=GREAT_Scholarships_2020&utm_medium=ppc&utm_source=google&utm_content=Scholarships_Bangladesh_EN_BMM&utm_term=scholarships&gclid=Cj0KCQjw0oCDBhCPARIsAII3C_EFusz85b2u94WRzVkuUrmKCUTto7JF2YywnhMfcKgHIo8VXBqn6tgaAuHYEALw_wcB&gclsrc=aw.ds" class="btn btn-primary">Apply</a>
        </p>
      </div>
    </div>
  </div>

  <div class="grid-flex photoa">
    <div class="col col-image" style="background-image: url(img/csc.jpg);">
      &nbsp;
    </div>
    <div class="col col-text">
      <div class="Aligner-item">
      	<h3 class="whiting check">China Scholarship Council CSC</h3>
        <p>The China Scholarship Council is the Chinese Ministry of Education's non-profit organization that provides support for international academic exchange with China and is the primary vehicle through which the Chinese government awards scholarships.
            <p class="subsec check">Offered Money : 17,000$</p>
         	<p class="subsec check">Deadline : 7 july 2021</p>
         	<a href="https://www.chinesescholarshipcouncil.com/" class="btn btn-primary">Apply</a>
        </p>
      </div>
    </div>
  </div>

  <div class="grid-flex">
    <div class="col col-image" style="background-image: url(img/stanford.jpg);">
      &nbsp;
    </div>
    <div class="col col-text col-left">
      <div class="Aligner-item">
      	<h3 class="shadowing check">Stanford University </h3>
        <p>
Stanford is a private graduate school in Stanford, California in the San Francisco Bay Area. It has a large graduate student body with an enrollment of 10,294 graduate students. Of the 80 graduate programs offered at Stanford University, 11 are offered online or through graduate distance education programs. The most popular graduate school programs at Stanford University are Business, Computer Science, and Electrical Engineering.
            <p class="subsec check">Offered Money : Fully Funded</p>
         	<p class="subsec check black">Deadline : 27 May 2021</p>
         	<a href="https://www.niche.com/graduate-schools/stanford-university/" class="btn btn-primary">Apply</a>
        </p>

      </div>
    </div>
  </div>

  <div class="grid-flex photoa">
    <div class="col col-image" style="background-image: url(img/mit.jpg);">
      &nbsp;
    </div>
    <div class="col col-text">
      <div class="Aligner-item">
      	<h3 class="whiting check">Massachusetts Institute of Technology</h3>
        <p>MIT is a private graduate school in Cambridge, Massachusetts in the Boston Area. It has a big graduate student body with an enrollment of 6,972 graduate students. The 38 graduate programs at Massachusetts Institute of Technology are all on-campus only and none are offered online. 
            <p class="subsec check">Offered Money : Fully Funded</p>
         	<p class="subsec check">Deadline : 1 October 2021</p>
         	<a href="https://www.niche.com/graduate-schools/massachusetts-institute-of-technology/" class="btn btn-primary">Apply</a>
        </p>
      </div>
    </div>
  </div>
</section>	
</div>



  
<?php include ('footer.php') ?>