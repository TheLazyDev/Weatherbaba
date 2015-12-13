
<!--

© 2015-2016 TheLazyDev(Bhavarsh Singh)

Original Author:- TheLazyDev(Bhavarsh Singh)

This is a PHP File and it includes HTML and Little PHP Code for now. I have used PHP File Because I might include Some more PHP Code in near future and Apache Server Can run HTML code in PHP file But cannot Run PHP code in a HTML File.Bootstrap and its Components are widely used in this Project for improving User Experience.
-->

<?php

/*Turn off error reporting because some apache servers have Error reporting turned on by default */
error_reporting(0);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    jQuery Added-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
<!--    scrollto jQuery ScrollTo Plugin Added-->
    <script src="js/jquery-scrollto.js"></script>
    
<!--    Added TypeIt plugin-->
    <script src="js/typeit.min.js"></script>
<!--    Local JavaScript Added-->
    <script src="js/index.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  
<!--   Local CSS File -->
   <link rel="stylesheet" href="css/main.min.css" type="text/css">
   
<!--   TypeIt's required CSS File-->
   
   <link rel="stylesheet" href="css/typeit.min.css" type="text/css">
   
<!--   Website's favicons-->
   <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
<!--Theme for Google Chrome(Mobile version)-->
<meta name="theme-color" content="#ffffff">
<!--   Title of Website-->
    <title>Welcome To WeatherBaba.com</title>
</head>

<!--Some Bootstrap Components Added in "body" tag to improve User Experience-->
<body data-spy="scroll" data-target=".navbar-collapse"> 
   
<!--   Nav Bar-->
    <div class="navbar navbar-default navbar-fixed-top">
        
        <div class="container">
           
           <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                   
               </button>
               <a href="#" class="navbar-brand">WeatherBaba.com</a>
           </div>
            
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active" id="first"><a  href="#topContainer"> Home</a></li>
                   
                    <li id="secondblock"><a href="#aboutbaba"> About Me</a></li>
                    <li id="third"><a href="#baba">Meet Me</a></li>
                    <li id="forth"><a href="#contactdev">Contact </a></li>
                </ul>
                    <p id="info">&copy; 2015-16 &nbsp; &nbsp; &nbsp; &nbsp;<a href="https://github.com/TheLazyDev">TheLazyDev</a></p>
            </div>
            
            
        
        </div>
        
    </div>
    
<!--    Nav Bar Stuff ends Here-->
   
<!-- First div of Welcome Text -->
    
    <div class="container" id="topContainer">
       
       <div class="row">
          
<!--          Used Grid System of Bootstrap-->
           <div class="col-md-6 col-md-offset-3" id="topRow">
           
         <h1 id="welcomeText">
             
<!--         Place Holder for Welcome Text(used TypeIt plugin To give Typing Effect)-->

         </h1>
              
               
           </div>
       </div>
        
<!--        Welcome Div Ends Here-->
        
    </div> 
    
    
    
<!--    Div of Introduction of Weatherbaba Starts From Here-->
    <div class="container" id="aboutbaba">
        
        <div class="row">
            
            <u><h1 class="bold center" id="secondtext">Introduction</h1></u>
            
            <h2 id="introaboutbaba">
<!--         Place Holder for Intro Text(used TypeIt plugin To give Typing Effect)-->
            </h2>
        </div>
        
<!--        Introduction Div Ends here-->
    </div>
    
<!--    Main Div of Prediction stuff starts from here-->
    <div class="container" id="baba">
        <div class="row">
<!--           Button used to FadeIn All Stuff when its clicked-->
            <button type="button" class="btn btn-success" id="button">Baba Ji Give Darshan </button>
                 
<!--                 Weatherbaba Avator-->
           <img src="img/baba.png" class="img-responsive"  id="toggle" alt="Responsive image">
<!--             Just Welcome Text From Weatherbaba-->
            <h1 id="babajiwelcome">I am Here My Friend </h1>
            
            <h3 id="babajiwords"> Now Enter your Name and city of your choice and see my powers</h3>
    
<!--            Form used for Getting User Input        -->
<form class="form-horizontal">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
<!--     Visitor's Name -->
      <input type="text" class="form-control" id="name" placeholder="Your Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">City</label>
    <div class="col-sm-10">
     
     <!-- City Name  -->
      <input type="text" class="form-control" id="city" placeholder="For Example Jalandhar,Amritsar">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
<!--     Submit Button To submit Name and City Inputs To Php Script by jQuery stuff-->
      <button id="predictor" type="submit" class="btn btn-success btn-lg">Click Here To Get Weather Update </button>
    </div>
  </div>
      
<!--      Danger Alert Used To Warning User If he enters invalid city name-->
       <div class="alert alert-danger" id="failed"> My friend Please Enter a Valid City or try its old name </div>
       <div class="alert alert-success show-hide" id="msg">
<!--       Place Holder For A custom Message to User-->
        
          </div>
       <div class="alert alert-success show-hide" id="alert">
       <!--       Place Holder For Weather Prediction Message to User-->
        </div>
         <div class="alert alert-danger" id="#nocity"> My Friend Please enter a city name ! </div>
         

      <!--    Main Div of Prediction stuff Ends Here-->
    </div>
    
    
    
</body>
</html>