$( document ).ready(function() { // jQuery Will start When All the components of this website are ready 
 
    $("#topContainer").css("min-height",$(window).height()); // set height  of first div according to the window size
    $("#baba").css("min-height",$(window).height()); // set height of second div according to the window size
    $("#aboutbaba").css("min-height",$(window).height());
    // set height of second div according to the window size
       
 $('#welcomeText').typeIt({
     whatToType: ["Welcome To WeatherBaba.com.", "The Home of Weather Baba.","Don't Know Him?","Not to worry.","Just Scroll Down and read intro about the baba."],
     typeSpeed: 50
}); // used TypeIt jQuery Plugin's Function to give typing effect

 $('#introaboutbaba').typeIt({
     whatToType: ["Hi Welcome To My Website","I am Weather Baba from India","I Have Some Special Powers By which","I can Predict Weather of 3 days","You will Get Weather Update in 2 secs without refreshing this webpage or visiting any other page","Want To try just scroll down "],
     typeSpeed: 30
}); // used TypeIt jQuery Plugin's Function to give typing effect
                   
                   
          
$("#button").on("click",function(){
    
    // when button is clicked then function will run
    
    
    
    
    $("#toggle").fadeIn("slow"); // fades In weather baba Avator 

   
     $("#babajiwelcome").fadeIn("4000"); // fades In welcome text in slow motion 
     
      $("#babajiwords").fadeIn("4000"); // fades In welcome text in slow motion 
        
    $(".form-group").fadeIn("4000"); // fades In input area in slow motion 
    
    
}

 );

    
    $("#predictor").click(function(event){
         // when button is clicked then function will run
        
        $("#nocity").hide(); // hides div with an id of nocity on webpage load
        
        event.preventDefault(); // disables the default submit function
        
        
        
        var username= $("#name").val(); // stores the value of input with an id of name 
        var usercity= $("#city").val(); // stores the value of input with an id of city
        var msgtouser= username+" " + "My Friend Weather of "+ usercity +" " +"would be"; // stores custom msg 
        
        $("#msg").html(msgtouser); // displays custom msg
        
        if($("#city").val()!="" ){ 
            
            // this function will only run when value of input with an id of city is not empty
        
        
       $.get("weather.php?city="+$("#city").val(), function(data){
         
           // I have used Ajax function of jQuery to get weather.php from root directory and sets the value of city to which user inputs and then a function run to store data which weather.php displays and display it later on
         
         
           
           if (data=="" ) { // if data is empty then it will throw an error to user to type a vaild city name 
                $("#msg").hide(); // hides custom msg div
                $("#alert").hide(); // hides weather prediction div
                $("#failed").fadeIn("slow"); // shows failed msg when if data is empty 
               } else {
                   // runs when everything is fine
                    $("#failed").hide(); // hides failed msg div
                  $("#msg").show(); // shows weather prediction div
                    $("#alert").html(data).fadeIn("slow"); // shows weather prediction div with the data we got with ajax function
               }
           
           
       });
            // just place holder
        
            } else {
                $("#nocity").show();
            }
        
        
    })
 
             
                
               
 $("#first").click(function(){
     
     // scrolls to first div when clicked on home with a delay of 2 sec
     $('#topContainer').ScrollTo({
    duration: 2000,
    easing: 'linear'
});
     
 });              

     $("#secondblock").click(function(){
      // scrolls to second div when clicked on about me  with a delay of 2 sec
     $('#aboutbaba').ScrollTo({
    duration: 2000,
    easing: 'linear'
});
     
 }); 
               
         $("#third").click(function(){
          // scrolls to third div when clicked on meet me with a delay of 2 sec
     $('#baba').ScrollTo({
    duration: 2000,
    easing: 'linear'
});
     
 }); 
    
        
    

    
});