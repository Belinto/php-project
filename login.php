<?php
  include_once 'header.php';
?>

       <section class="login">
         <br><br>
         <center>
         <h2>LOGIN</h2>
         <br>
           <div class="login-form-form">
              <form action="login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username/Email..."><br>
                <input type="password" name="pwd" placeholder="Password..."><br><br>
                <button type="submit" name="submit" style="width: 100px; height: 50px; background-color:springgreen; color: darkorchid;">Log In</button>
              </form>
           </div>
         </center>
           
    <?php
        if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
          echo "<p>Incorrect login information!</p>";
        }
        
     }
   ?>  
       </section>

      
<?php
  include_once 'footer.php';
?>