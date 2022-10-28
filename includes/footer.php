 <!--FOOTER-->
      <!-- SECTION: Footer -->
      <footer id="footer">
        <p>© 2020 Dotun Designs</p>
        <div class="footer_lite">
          <p>Project Work | UX/UI | MySQL Databases | PHP | Javascript | Version Ctrl.</p>
        </div>
     </footer>
     <!--NAVIGATION SCRIPT FOR SIDE NAV-->
     <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
     </script>
     <!--NAVIGATION SCRIPT FOR SIDE NAV END-->
     <!--GEAR SPINNER FOR FLOATING SOCIAL MEDIA-->
     <script>
        $(document).ready(function(){
           $(".fa-gear").click(function(){
           $(".float-bar").slideToggle(700);
           });
           });
            
     </script>
     <!--GEAR SPINNER FOR FLOATING SOCIAL MEDIA END-->
     <!--SLOW REVEAL ELEMENTS-->
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
       AOS.init({
       offset:100,
       duration:1000
       });
       </script>
       <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '7b3becad-5277-49bd-8cda-25134a0530e5', f: true }); done = true; } }; })();</script>
  </body>
</html>