<!DOCTYPE html>
<?php session_start(); ?>
<html lang="ar">

<head>
   <title>Back To Work</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="align.css">

</head>

<body class="bg">
   <h1 style="text-align: center;margin-top:40px;font-size:60px;"><b>لعبة الصراحة</b></h1>
   <div style=" text-align: center; margin-top:240px; text-align: center;">
      <div class="btn-group-vertical">
         <a href="admin.php?login" class="btn btn-danger btn-lg" style="width: 360px; height:90px; color:black; margin-top:-70px;">
            <h3 style="text-align: center; margin-top:17px;">مشرف</h3>
         </a>
         <br>
         <a href="Ghuest.php?questPage" class="btn btn-success btn-lg" style="width: 360px; height:90px; color:black;">
            <h3 style="text-align: center; margin-top:17px;">ضيف</h3>
         </a>
      </div>
   </div>

</body>

</html>