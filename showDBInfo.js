 //var arrayOf = <?php echo json_encode($arrayOfAll); ?>;
 shuffleArray(arrayOf);
 var counter = 0;
 var numOfQuest = 0;
 var endOfQues = 0;

 function nextPage() {
     if (typeof(arrayOf[counter]) == "undefined") {
         document.getElementById('pointer').innerHTML = null;
         document.getElementById('first').innerHTML = "(: إنتهت الأسئلة";
         numOfQuest = arrayOf.length + 1;
         counter = arrayOf.length + 1;
     } else {
         document.getElementById('first').innerHTML = "<script>alert(1)</script>";
         counter++;
         numOfQuest++;
         numOfQuestMeth();
     }
 }

 function previousPage() {
     if ((typeof(arrayOf[counter - 1]) == "undefined" || numOfQuest - 1 == 0) && counter != arrayOf.length + 1) {
         document.getElementById('first').innerHTML = "(: اضغط على زر التالي لاستعراض أول سؤال";
         document.getElementById('pointer').innerHTML = null;
         counter = 0;
         numOfQuest = 0;
     } else {
         counter = counter - 2;
         document.getElementById('first').innerHTML = arrayOf[counter];
         counter++;
         numOfQuest--;
         numOfQuestMeth();
     }
 }

 function numOfQuestMeth() {
     document.getElementById('pointer').innerHTML = "السؤال رقم | " + numOfQuest;
 }

 function shuffle(array) {
     for (var i = 0; i < array.length; i++) {

     }
 }

 function shuffleArray(array) {
     for (var i = 0; i < array.length; i++) {
         const j = Math.floor(Math.random() * (i + 1));
         [array[i], array[j]] = [array[j], array[i]];
     }
 }