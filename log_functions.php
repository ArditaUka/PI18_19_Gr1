<?php


    include_once 'database.php';
    function log_user_in($email, $password){

      $sql = "SELECT * FROM user WHERE email='$email' AND password='$password' limit 1";
      $result = mysqli_query($conn,$sql);
      if (mysqli_num_rows($result) == 1 ) {
          $_SESSION['email'] = $email;
				    
          header("Location: index.php");
      }else {
          $_SESSION['message'] = "Wrong username/password combination!";
          header("Location: login.php");
      }
      exit();
    }


      function display_message(){
        echo '<div class="msg">';
          echo "<p>".$_SESSION['message']."</p>";
          unset($_SESSION['message']);
        echo "</div>";
      }



 ?>
