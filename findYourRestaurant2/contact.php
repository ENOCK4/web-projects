<!-- DOCTYPE -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FindYourRestaurant</title>
   <link rel = "icon" type = "image/png" href = "img/conix.jpg">
    <meta charset="utf-8">
    <!-- Viewport Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


      <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
          <style type="">
      .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }
  /* carousel */
#quote-carousel 
{
  padding: 0 10px 30px 10px;
  margin-top: 30px;
}

/* Control buttons  */
#quote-carousel .carousel-control
{
  background: none;
  color: #222;
  font-size: 2.3em;
  text-shadow: none;
  margin-top: 30px;
}
/* Previous button  */
#quote-carousel .carousel-control.left 
{
  left: -12px;
}
/* Next button  */
#quote-carousel .carousel-control.right 
{
  right: -12px !important;
}
/* Changes the position of the indicators */
#quote-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the color of the indicators */
#quote-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
#quote-carousel .carousel-indicators .active 
{
  background: #333333;
}
#quote-carousel img
{
  width: 250px;
  height: 100px
}
/* End carousel */

.item blockquote {
    border-left: none; 
    margin: 0;
}

.item blockquote img {
    margin-bottom: 10px;
}

.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}
   .fixed-footer{
        width: 100%;       
        background: #313231;
        padding: 10px 0;
        color: #fff;
         bottom: 0;
margin-top:40px;
         align-content: center;

    }
    .container1{
      text-align: center;



    }
    .container2{
      word-spacing: 20px;
    }
    .link{
      text-decoration: none;
      font-size: 15px;
      color: white;

          }


/**
  MEDIA QUERIES
*/

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    #quote-carousel 
    {
      margin-bottom: 0;
      padding: 0 40px 30px 40px;
    }
    
}

/* Small devices (tablets, up to 768px) */
@media (max-width: 768px) { 
    
    /* Make the indicators larger for easier clicking with fingers/thumb on mobile */
    
    #quote-carousel .carousel-indicators {
        bottom: -20px !important;  
    }
    #quote-carousel .carousel-indicators li {
        display: inline-block;
        margin: 0px 5px;
        width: 15px;
        height: 15px;
    }
    #quote-carousel .carousel-indicators li.active {
        margin: 0px 5px;
        width: 20px;
        height: 20px;
    }
}
          </style>
  </head>
  <body style="background-color:white;">
   <div class="container-fluid">
   <div style="background-color:white;" class="row">
     <div class="col-md-3">
       <img src="image2/mylogo2.png">
     </div>
     <div class="col-md-9"> <h1><strong><em style="color:darkgreen;font-family:georgia;">Find</em> <em style="color:darkorange;font-family:georgia;">Your</em> <em style="color:blue;font-family:georgia;">Restaurant</em></strong></h1>
      <p><b><em style="color:#052E22;">Save time <b><i class="fa fa-clock-o"></i></b>, Save money <b><i class="fa fa-money"></i></b></em></b></p></div>
   </div> 
    <!-- YOUR CONTENT STARTS HERE -->
<nav style="background-color:darkgreen;border:1px solid darkgreen;" class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div height:20px; class="container-fluid">
    <div class="navbar-header">
        <button style="border:1px solid white;background-color:darkgreen;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a style="color: white;" class="navbar-brand" href="index.html">Find Your Restaurant</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
             <li><a style="color: white;" href="index.html">Home</a></li>
          <li><a style="color: white;" href="about.html">About Us</a></li>
          <li><a style="color: white;" href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<form style="text-align:center;margin-top:20px;" class="form-inline" action="/action_page.php">
  <div style="color:black;" class="form-group">
    <h3><b>Contact Us Now</b></h3>
    <label for="email">Email address:</label>
    <input <input style="width:400px;"  type="email" class="form-control" id="email">
  </div>
  <br>
  <div style="margin-top:10px;color:black" class="form-group">
    <label for="text">Message:</label>
    <input style="width:400px;margin-left:25px;" type="text" class="form-control" id="pwd">
  </div>
  <br><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <footer>
    <div class="fixed-footer">
      <div class="container2" style="text-align: center;">
      <img src="img/conix.jpg" alt="..." class="" width="50px" height="30px">  <a class="link" href="">About-us</a>  <a class="link" href="">Contact-us</a></div>
        <div class="container1" style="align-content: center;"> &copy; 2018 Designed by Like mindz, All rights reserved</div>   
  </footer> 

</div>
<script>
  // When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
})
</script>
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  </body>
</html>