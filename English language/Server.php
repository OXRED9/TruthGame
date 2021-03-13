<?php

require_once 'confing.php';
session_start();

function filter_str($value)
{
   global $db;
   $temp = filter_var($value, FILTER_SANITIZE_STRING);
   return mysqli_real_escape_string($db, $temp);
}

// Ghuest Functions
if (isset($_POST['sendBtn'])) {
   if (empty(trim($_POST['firstQu'])) || empty(trim($_POST['secondeQu'])) || empty(trim($_POST['thiredQu']))) {
      $_SESSION['error'] = "You have to write all the questions";
      $_SESSION['input1'] = filter_str($_POST['firstQu']);
      $_SESSION['input2'] = $_POST['secondeQu'];
      $_SESSION['input3'] = filter_str($_POST['thiredQu']);
      header('location: /Truth/Ghuest.php?questPage');
   } else {
      $question1 = filter_str($_POST['firstQu']);
      $question2 = $_POST['secondeQu'];
      $question3 = filter_str($_POST['thiredQu']);

      $query = "INSERT INTO question (question1,question2,question3) VALUES ('$question1','$question2','$question3')";
      $result = $db->query($query);

      if ($result) {
         $_SESSION['done'] = "Sent successfully";
         $_SESSION['checkSend'] = "done";
         header('location: /Truth/Ghuest.php?done');
      } else {
         $_SESSION['error'] = "Something went wrong";
         header('location: /Truth/Ghuest.php');
      }
   }
}

// Admin Functions 
if (isset($_POST['adminBtn'])) {
   if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
      $_SESSION['adminMsg'] = "You have to fill all the fields";
      header('location: /Truth/admin.php?login');
   } else {
      $username = filter_str($_POST['username']);
      $password = filter_str($_POST['password']);

      $query = "SELECT * FROM admin_login WHERE username = '$username' && password = '$password'";
      $result = $db->query($query);

      if ($result->num_rows > 0) {
         // Loggied succussfully

         // To show admin page 
         $_SESSION['loggedin'] = true;
         header('location: /Truth/admin.php?deshboard');
      } else {
         $_SESSION['adminMsg'] = "Username or password is not correct";
         header('location: /Truth/admin.php?login');
      }
   }
}
