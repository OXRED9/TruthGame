<!DOCTYPE html>
<?php
session_start();

function saveText($text)
{
   if (isset($_SESSION[$text])) {
      echo $_SESSION[$text];
   }
}
?>
<html>

<head>
   <title>Back To Work</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="align.css">
</head>

<body class="bg" style="background-image: url('scary4.jpg');background-attachment: fixed;">

   <?php if (isset($_GET['questPage']) && !isset($_SESSION['checkSend'])) { ?>
      <form method="POST" action="Server.php">
         <div class="form-row" style="text-align: center; margin-top:30px; justify-content: center;">
            <div class="col-md-4 mb-3 justify-content-center md-form">
               <?php if (isset($_SESSION['error'])) { ?>
                  <span style="color: red; font-size:30px;">
                     <?php
                     echo $_SESSION['error'];
                     echo "<br>";
                     unset($_SESSION['error']);
                     ?>
                  </span>
                  <br>
               <?php } ?>
               <h1 style="color:#C4C4C4;">First question</h1>
               <textarea type="text" name="firstQu" class="form-control" style="height: 120px;color:white; background-color: black;border-color: black;text-align: right;"><?php saveText('input1'); ?></textarea>
               <br>
               <h1 style="color:#C4C4C4;">Second question</h1>
               <textarea type="text" name="secondeQu" class="form-control" style="height: 120px;color:white;background-color:black;border-color: black;text-align: right;"><?php saveText('input2'); ?></textarea>
               <br>
               <h1 style="color:#C4C4C4;">Third question</h1>
               <textarea type="text" name="thiredQu" class="form-control" style="height: 120px;color:white;background-color: black;border-color: black;text-align: right;"><?php saveText('input3'); ?></textarea>
               <br>
               <input type="submit" name="sendBtn" value="Submit" class="btn btn-dark" style="width: 200px; height:60px;">
            </div>
         </div>
      </form>
   <?php } else if (isset($_GET['questPage']) && isset($_SESSION['checkSend'])) { ?>
      <div style="text-align: center; margin-top:150px; justify-content: center;">
         <h1 style="color:#C4C4C4;">مايمديك ترسل اسئلة الا مرة وحده بس ياوحش</h1>
      </div>
   <?php } else if (isset($_GET['done'])) { ?>
      <div style="text-align: center; margin-top:160px; justify-content: center;">
         <h1 style="color:#C4C4C4;">
            <?php
            if (isset($_SESSION['done'])) {
               echo $_SESSION['done'];
            }
            ?>
         </h1>
      </div>
   <?php } else {
      header('location: http://localhost/Truth/Ghuest.php?questPage');
   } ?>
</body>

</html>