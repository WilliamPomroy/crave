<?php 
   $_SESSION['POST'] = $_POST;
   echo $_POST['email'];
   echo $_POST['password'];
   $location = $_GET['location'];
   if ($_POST['email'] == 'email@gmail.com' && $_POST['password'] == 'P@ssword321' || $_POST['email'] == 'test@gmail.com' && $_POST['password'] == 'P@ssword321') {
      header("Location: signed-in.html");
   } else {
      if (!$_POST['email'] == 'email@gmail.com') {
         $reason = "No account with that email";
      } else if (!$_POST['password'] == 'P@ssword321') {
         $reason = "Incorrect Password";
      }
      header("Location: " . $location . ".php?login=false&reason=" . $reason);
   }
?>