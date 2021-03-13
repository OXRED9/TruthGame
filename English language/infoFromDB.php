 <?php
   require_once('confing.php');
   $query = "SELECT * FROM question";
   $result = $db->query($query);

   $arrayOfAll = array();
   $count = 0;

   while ($row = $result->fetch_assoc()) {
      $arrayOfAll[$count] = $row['question1'];
      $count++;
      $arrayOfAll[$count] = $row['question2'];
      $count++;
      $arrayOfAll[$count] = $row['question3'];
      $count++;
   }

   $db->close();
