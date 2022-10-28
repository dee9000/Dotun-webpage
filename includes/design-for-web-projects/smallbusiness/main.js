        
       $(document).ready(function() {
       $(".btn").on('click', function(e) {
         e.preventDefault();
       $('html, body').animate({ 
        scrollTop: $(this.hash).offset().top - $('.btn').height()
    }, 1500);
  });
  
 });

function changeStuff(){
   var wrapper = document.getElementsByClassName("wrapper");
   wrapper[0].style.backgroundColor = "red";
   wrapper[0].style.height = "80vh";
   wrapper[0].style.borderTop = "none";
   wrapper[0].style.maxWidth = "75%";
   wrapper[0].style.marginLeft = "auto";
   wrapper[0].style.marginRight = "auto";
   wrapper[0].style.textAlign = "center";
}
            
function changeBack(){
   var wrapper = document.getElementsByClassName("wrapper");
   wrapper[0].style.backgroundColor = "#FFFAE9";
   wrapper[0].style.height = "80vh";
   wrapper[0].style.borderTop = "4px solid darkgoldenrod";
   wrapper[0].style.maxWidth = "75%";
   wrapper[0].style.marginLeft = "auto";
   wrapper[0].style.marginRight = "auto";
   wrapper[0].style.textAlign = "center";
}

            

var change = document.getElementById("change");
change.onclick = changeStuff;

var back = document.getElementById("back");
back.onclick = changeBack;