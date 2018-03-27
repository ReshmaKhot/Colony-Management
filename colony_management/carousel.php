<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/carousel.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Programs That We Arranged This Year</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicator">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/car1.jpg" alt="tree" style="width:100%;">
        <div class="carousel-caption">
          <h3>Tree Plantation</h3>
          <p>We planted 25 trees this year!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/car2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Tree</h3>
          <p>We planted 25 Trees this year!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/car3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Swach Bharat Abhiyan</h3>
          <p>We maintain Our society clean!</p>
        </div>
      </div>
      <div class="item">
        <img src="images/car4.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Independence day</h3>
          <p>We love our india</p>
        </div>
      </div>
      <div class="item">
        <img src="images/car5.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Ganesh Chaturthi</h3>
          <p>Ganapati bappa Moraya!</p>
        </div>
      </div>
      <div class="item">
        <img src="images/car6.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Diwali</h3>
          <p>Happy divali!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <div id="sspy2">
  <div class="abtxt">About Us</div>
  <div class="abt">
    <div class="abtflex1"> 
      <img src="images/wings.jpg" alt="wings" height="200px" width="200px">
      <h5> Wings</h5>
      <p>We have 15 wings which are neet and clean.</p> 
    </div>
    <div class="abtflex1">
          <img src="images/parking.jpg" alt="parking" height="200px" width="200px">
          <h5> Parking Area</h5>
            <p>We have huge parking area.In which seperated area for 4 wheeler and 2 wheeler</p> 
      
    </div>
    <div class="abtflex1">
   <img src="images/play.jpg" alt="playground" height="200px" width="200px">
      <h5> Playground</h5>
      <p>Our colony has very huge and beautiful playground specially for childrens</p> 
     
    </div>
    <div class="abtflex1">
      <img src="images/swim.jpg" alt="playground" height="200px" width="200px">
      <h5> Swimming Pool</h5>
      <p>Another beuty of our colony is swimming pool</p> 
      </div>
      
 
      </div></div><div id="sspy3">
    <div class="ctu">
      <div id="map">
          <script>
              function myMap() {
                    var location={lat:19.013721,lng:73.087981};
                  var map=new google.maps.Map(document.getElementById("map"),{
                    zoom:15,
                    center: location
                  });
                var marker=new google.maps.Marker({
                  position: location,
                  map: map
                });
                }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy6RWC48SgKTSv3FK0ptxjh8Ikh2_TG5o&callback=myMap"></script>
      </div>
        <div class="ct">
          <div class="ctt" >
              <span style="font-weight:bold;font-size:40px;">CONTACT US</span><br><br>
              <span style="font-weight:geogia;font-size:20px;">Aahinsa housing Society</span><br>
              <span style="font-weight:Italic;font-size:20px;">Sector-18,kamothe,Plot 1 & 2</span><br>
              <span style="font-weight:georgia;font-size:20px;">phone no:22075890</span><br>
          </div>
      </div>
  </div>
  <div class="footer"><span style="font-weight:italic;font-size:20px;">
    All rights are reserved by Aahinsa</span>
      </div></div>
      
</body>
</html>
