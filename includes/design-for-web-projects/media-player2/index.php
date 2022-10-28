
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Teko&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@600&family=Orbitron:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>


    <div class="product-card" id="main-image">
        <div class="headings">
            <h1 id="p-card">DA-ZONE!</h1>
            <p id="p-track">Music Player</p>
        </div>
        <div class="ratings">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
        </div>
       
<div class="container">
        <table>
            <h3 id="demo">TRACKS</h3>
            <tr>
               <td><img src="images/musicnote2.png" ></td>
               <td class="orange">Wolves - Warriors</td>
               <audio id="myAudio1">
                  <source src="audio/Warriors.mp3"  type="audio/mpeg">
               </audio>
               <td> <a class="btn" id="btn"><i class="fas fa-play" onclick="togglePlay1()" id="foo1"></a></i></td>
            </tr>
            <tr>
               <td><img src="images/vesta6by6.jpg"></td>
               <td class="orange">Vesta Williams - A good thing</td>
               <audio id="myAudio2">
                  <source src="audio/AGoodThing.mp3"  type="audio/mpeg">
               </audio>
               <td> <a class="btn"><i class="fas fa-play" onclick="togglePlay2()" id="foo2"></a></i></td>
            </tr>
            <tr>
               <td><img src="images/akirajimbo.jpeg"></td>
               <td class="orange">Akira Jimbo - Meet in Monterey</td>
               <audio id="myAudio3">
                  <source src="audio/meetinmonterey.mp3"  type="audio/mpeg">
               </audio>
               <td> <a class="btn"><i class="fas fa-play" onclick="togglePlay3()" id="foo3"></a></i></td>
            </tr>
            <tr>
               <td><img src="images/sandkimi.jpg"></td>
               <td class="orange">Stayce & Kimiko - R U Available</td>
               <audio id="myAudio4">
                  <source src="audio/RUAvailable.mp3"  type="audio/mpeg">
               </audio>
               <td> 
                  <a class="btn"><i class="fas fa-play" onclick="togglePlay4()" id="foo4"></a></i>
               </td>
               </td>
            </tr>
         </table>
         </div>
      
        <footer class="icons">
            <i class="fas fa-home"></i>
            <i class="fas fa-map-marker-alt"></i>
            <i class="fa fa-search"></i>
            <i class="fas fa-user"></i>
        </footer>


        <script>
         function togglePlay1() {
         document.getElementById("p-card").innerHTML = "Warriors";
         document.getElementById("p-track").innerHTML = "Wolves";
         var myAudio = document.getElementById("myAudio1");
         document.getElementById('foo1').classList.toggle('fa-play')
         document.getElementById('foo1').classList.toggle('fa-pause')
         var img = document.getElementById('main-image').style.backgroundImage= "url('images/musicnote2.png')";
         return myAudio.paused ? myAudio.play() : myAudio.pause();
         };
         
         function togglePlay2() {
         document.getElementById("p-card").innerHTML = "A good thing";
         document.getElementById("p-track").innerHTML = "Vesta Williams";
         var myAudio = document.getElementById("myAudio2");
         document.getElementById('foo2').classList.toggle('fa-play')
         document.getElementById('foo2').classList.toggle('fa-pause')
         var img = document.getElementById('main-image').style.backgroundImage= "url('images/vesta6by6.jpg')";
         return myAudio.paused ? myAudio.play() : myAudio.pause();
         };
         
         function togglePlay3() {
         document.getElementById("p-card").innerHTML = "Meet in Monterrey";
         document.getElementById("p-track").innerHTML = "Akira Jimbo";
         var myAudio = document.getElementById("myAudio3");
         document.getElementById('foo3').classList.toggle('fa-play')
         document.getElementById('foo3').classList.toggle('fa-pause')
         var img = document.getElementById('main-image').style.backgroundImage= "url('images/akirajimbo.jpeg')";
         return myAudio.paused ? myAudio.play() : myAudio.pause();
         };
         
         function togglePlay4() {
         document.getElementById("p-card").innerHTML = "R U Available";
         document.getElementById("p-track").innerHTML = "Stayce and Kimiko";
         var myAudio = document.getElementById("myAudio4");
         document.getElementById('foo4').classList.toggle('fa-play');
         document.getElementById('foo4').classList.toggle('fa-pause');
         var img = document.getElementById('main-image').style.backgroundImage= "url('images/sandkimi.jpg')";
         return myAudio.paused ? myAudio.play() : myAudio.pause();
         };
         
         
         
         
      </script>
    
    </div>
  </body>
 </html>

