<?php
  $path = "../";
  $page = "Quiz 1";
  include('header.php');
  ?>
  <section class="main">
    <div class="content">
  <?php

  include "../../dbConn.php";

  $query= "SELECT * FROM LessonOne";

  echo '<h1>Quiz</h1>';

  echo '<form name="quizForm" action="quizprocess.php"  onsubmit="return validateForm();" method="post">';

  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
      $id = $row["id"];
      $question = $row["question"];
      $option1 = $row["option_one"];
      $option2 = $row["option_two"];
      $option3 = $row["option_three"];
      $right = $row["right"];

        echo '<p>'.$question.': <span id= "wrong'.$id.'" style = "color: red; display: none;"> Must select an answer</span> </p>
        <!-- Note the <label> tags below that allow the user to click on the text! -->
        <input type="radio" name ="question'.$id.'" value = "W" id="optionone'.$id.'"/><label for="optionone'.$id.'">'.$option1.'</label><br/>
        <input type="radio" name ="question'.$id.'" value = "W" id="optiontwo'.$id.'"/><label for="optiontwo'.$id.'">'.$option2.'</label><br/>
        <input type="radio" name ="question'.$id.'" value = "W"  id="optionthree'.$id.'"/><label for="optionthree'.$id.'">'.$option3.'</label><br/>
        <input type="radio" name ="question'.$id.'" value = "R"  id="right'.$id.'"/>
        <label for="right'.$id.'">'.$right.'</label>
        ';

    }
    $result->free();
  }

  echo '<p>
  <input type="submit"  name="Submit"  value="Send Form"  />
  </p>
  </form>';
  ?>
</div>
</section>
</div>

<?php   include('footer.php'); ?>
  <script>
  function validateForm(){
    var num = <?php echo $id ?>;
    var i;
    var bool = true;
    for(i = 1; i <= num; i++){
      var x = document.forms["quizForm"]["question"+i].value;
      if(x == null || x == ""){
        document.getElementById("wrong"+i).style.display = "inline-block";
        bool = false;
      }else{
        document.getElementById("wrong"+i).style.display = "none";
      }
    }
    return bool;
  }
  </script>