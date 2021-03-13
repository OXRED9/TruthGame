<!DOCTYPE html>
<?php session_start(); ?>
<html>

<head>
   <title>Back To Work</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="align.css">
   <script src="showDBInfo.js"></script>

</head>

<?php if (isset($_GET['login']) && !isset($_SESSION['loggedin'])) { ?>

   <body class="bg" style="background-image: url('scary3.jpg');">
      <form method="POST" action="Server.php">
         <div class="form-row" style="text-align: center; margin-top:170px; justify-content: center;">
            <div class="col-md-4 mb-3 justify-content-center">
               <h1 style="color:red;">Username</h1>
               <input type="text" name="username" class="form-control col-auto" style="background-color:#222222; ;background-color: transparent;border-color: black;">
               <br>
               <h1 style="color:red;">Password</h1>
               <input type="password" name="password" class="form-control" style="background-color:#222222; ;background-color: transparent;border-color: black;">
               <br>
               <?php if (isset($_SESSION['adminMsg'])) { ?>
                  <span style="color: red; font-size:30px;">
                     <?php
                     echo $_SESSION['adminMsg'];
                     echo "<br>";
                     unset($_SESSION['adminMsg']);
                     ?>
                  </span>
               <?php } ?>
               <br>
               <input type="submit" name="adminBtn" value="login" class="btn btn-dark" style="width: 200px; height:60px;">
            </div>
         </div>
      </form>
   </body>
<?php } else if (isset($_GET['deshboard']) && isset($_SESSION['loggedin'])) { ?>

   <body class="bg" style="background-image: url('t.jpg');">
      <div class="container" style="color: white;justify-content:center;text-align: center;font-size:20px;margin-top:280px;">
         <div style="font-size:90px;">
            <?php require('infoFromDB.php'); ?>
            <script>
               var arrayOf = <?php echo json_encode($arrayOfAll); ?>;
            </script>
         </div>
         <span id="pointer" style="font-size: 70px;color:red;"></span>
         <br>
         <br>
         <span id="first" style="font-size: 70px;"> (: اضغط على زر التالي لاستعراض أول سؤال</span>
         <ul class="pager">
            <li>
               <button style="font-size: 30px;" class="btn btn-secondary" onclick="previousPage()">السابق</button>
            </li>
            <li>
               <button style="font-size: 30px;" class="btn btn-primary" onclick="nextPage()">التالي</button>
            </li>

      </div>

   </body>

<?php } else {
   unset($_SESSION['loggedin']);
   header('location: http://localhost/Truth/admin.php?login');
}  ?>


</body>

</html>