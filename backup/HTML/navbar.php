 <div class="phone_nav_button">
      <div class="container_navbarbutton" onclick="myNavbar(this)">
         <br>
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
      </div>
   </div>
   <br>
   <div id="nav_on_phone">


   <!----Navbar----->

      <div class="wrapper">
         
         <div>
            <div class="nav_text">
               <p><a href="startseite.php#aktuelles"><?php echo "$navbar_aktuell"; ?></a></p>
               <p><a href="alle_beitraege.php"><?php echo "$navbar_alle_beitraege"; ?></a></p>
            </div>
         </div>

         <div>
            <div class="nav_text">
               <p><a href="#teilnehmen"><?php echo "$navbar_teilnehmen"; ?></a></p>
            </div>
         </div>

         <div>
            <div class="dropdown">
               <div class="dropbtn">
                  <div class="nav_text">
                     <p><?php echo "$navbar_dokumente"; ?></p>
               </div>
                  
               </div>
               <div class="dropdown-content">
                  <a href="startseite.php#programm"><?php echo $navbar_programm; ?></a>
                  <a href="startseite.php#statuten"><?php echo $navbar_statuten; ?></a>
                  <a href="startseite.php#ueberuns"><?php echo $navbar_ueberuns; ?></a>
                  <a href="startseite.php#parolen"><?php echo $navbar_abstimmungsparolen; ?></a>
                  <a href="startseite.php#kontakt"><?php echo $navbar_kontakt; ?></a>
               </div>
            </div>
         </div>

         <div>
            <div class="nav_text">
               <p><a href="startseite.php#persoenlichkeiten"><?php echo $navbar_grossartigeschweizer; ?></a></p>
            </div>
         </div>

         <div>
            <div class="nav_text">
               <p><a href="startseite.php#buecher"><?php echo $navbar_buecher; ?></a></p>
            </div>
         </div>

		   <div>
            <div class="nav_text">
               <p><?php echo $navbar_shop; ?></p>
            </div>
         </div>

         <div>
            <div class="nav_text">
               <p><?php echo $navbar_radio; ?></p>
               <div class="buttons">
                  <button class="button" id="play-button">▶</button>
                  <button class="button" id="pause-button">⏸</button>
                  <button class="button" id="stop-button">⏹</button>
               </div>
               <!-- Make sure ?enablejsapi=1 is in URL -->
            <iframe id="video" src="https://www.youtube.com/embed/videoseries?enablejsapi=1&list=PLhVGMfXIxYfYXCaX4OA_sRmqhSLLTrion&loop=1" frameborder="0" allowfullscreen allow="autoplay"></iframe>
            </div>
         </div>

         <div>
            <div class="nav_text">
               <p><a href="zugang.php">Administration</a></p>
            </div>
         </div>

         <div>
            <div class="nav_text">
               <div class="buttons">



                  <form method="POST" action="../PHP/sprache.php" class="languagebutton">
                     <input name="sprache" value="ch" hidden="true">
                     <input type="submit" value="🇨🇭">
                  </form>
                  <form method="POST" action="../PHP/sprache.php" class="languagebutton">
                     <input name="sprache" value="de" hidden="true">
                     <input type="submit" value="🇩🇪">
                  </form>
                  <form method="POST" action="../PHP/sprache.php" class="languagebutton">
                     <input name="sprache" value="fr" hidden="true">
                     <input type="submit" value="🇫🇷">
                  </form>
                  <form method="POST" action="../PHP/sprache.php" class="languagebutton">
                     <input name="sprache" value="it" hidden="true">
                     <input type="submit" value="🇮🇹">
                  </form>
                  <form method="POST" action="../PHP/sprache.php" class="languagebutton">
                     <input name="sprache" value="en" hidden="true">
                     <input type="submit" value="🇬🇧">
                  </form>
                  <form method="POST" action="../PHP/sprache.php" class="languagebutton">
                     <input name="sprache" value="rae" hidden="true">
                     <input type="submit" value="RÄ">
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br>
