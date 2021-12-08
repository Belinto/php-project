<?php
  include_once 'header.php';
?>

       <section class="signup">
         <br><br>
         <center>
         <h2>SIGN UP</h2>
         <br>
           <div class="signup-form-form">
              <form action="signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Full name..."><br>
                <input type="text" name="Email" placeholder="Email..."><br>
                <input type="text" name="uid" placeholder="Username..."><br>
                <input type="password" name="pwd" placeholder="Password..."><br>
                <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                <br><br>
                <button type="submit" name="submit" style="width: 100px; height: 50px; background-color: springgreen; color: darkorchid;">Sign up</button>
              </form>
           </div>
         </center>
           
    <?php
        if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invalideuid") {
          echo "<p>Choose a proper username!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
          echo "<p>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
          echo "<p>Passwords doesn't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
          echo "<p>something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
          echo "<p>Username already taken!</p>";
        }
        else if ($_GET["error"] == "none") {
          echo "<p>You have signed up!</p>";
        }
     }
   ?>  
       </section>

   
       
<?php
  include_once 'footer.php';
?>