/*JQUERY CODE FOR SLOW DROP DOWN TO PRODUCTS SECTION*/        
       $(document).ready(function() {
       $(".btn").on('click', function(e) {
         e.preventDefault();
       $('html, body').animate({ 
        scrollTop: $(this.hash).offset().top - $('.btn').height()
    }, 1500);
  });
  
 });




/*JAVASCRIPT CODE FOR CHANGING BODY COLOUR*/


function changeStuff(){
   var bodyContent = document.getElementsByClassName("body-content");
   bodyContent[0].style.padding = "50px 0";
   bodyContent[0].style.backgroundColor = "#fff";

}
            
function changeBack(){
   var bodyContent = document.getElementsByClassName("body-content");
   bodyContent[0].style.padding = "50px 0";
   bodyContent[0].style.backgroundColor = "#fff2cc";

}
            

var change = document.getElementById("change");
change.onclick = changeStuff;

var back = document.getElementById("back");
back.onclick = changeBack;



















