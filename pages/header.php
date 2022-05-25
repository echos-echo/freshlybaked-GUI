<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $page;?></title>
        <link <?php echo 'href="' . $path . 'assets/css/main.css"';?> type="text/css" rel="stylesheet">
        <link <?php echo 'href="' . $path . 'assets/css/lessons.css"';?> type="text/css" rel="stylesheet">
        <link <?php echo 'href="' . $path . 'assets/css/header.css"';?> type="text/css" rel="stylesheet">
        <link <?php echo 'href="' . $path . 'assets/css/footer.css"';?> type="text/css" rel="stylesheet">
        <script <?php echo 'src="' . $path . 'assets/js/main.js"';?>></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

    <body>
      <!-- div class sticky -->
      <nav>
        <div class="logo">
          <a href="#">
            <img <?php echo 'src="' . $path . 'assets/images/logo.png"';?> alt="logo">
          </a>
        </div>

        <label for="btn" class="icon">
          <span class="fa fa-bars"></span>
        </label>

        <input type="checkbox" id="btn">
          <ul>
            <li><a <?php echo 'href="' . $path . 'index.php"';?> title="Home">Home</a></li>
            <li>
              <label for="btn-1" class="show">Tutorials +</label>
              <a <?php echo 'href="' . $path . 'pages/lessons.php"';?>  title="Lessons">Lessons</a>
              <input type="checkbox" id="btn-1">
              <ul>
                <li><a <?php echo 'href="' . $path . 'pages/lesson0.php"';?>>Lesson 0 - Installing Software</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/lesson1.php"';?>>Lesson 1 - What is Unix</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/lesson2.php"';?>>Lesson 2 - Directories</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/lesson3.php"';?>>Lesson 3 - Paths</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/lesson4.php"';?>>Lesson 4 - Working with Files</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/lesson5.php"';?>>Lesson 5 - Advance Commands</a></li>
              </ul>
            </li>
            <li>
              <label for="btn-2" class="show">Quizzes +</label>
              <a <?php echo 'href="' . $path . 'pages/quizzes.php"';?>>Quizzes</a>
              <input type="checkbox" id="btn-2">
              <ul>
                <li><a <?php echo 'href="' . $path . 'pages/quiz1.php"';?>>Lesson 1 Quiz</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/quiz2.php"';?>>Lesson 2 Quiz</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/quiz3.php"';?>>Lesson 3 Quiz</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/quiz4.php"';?>>Lesson 4 Quiz</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/quiz5.php"';?>>Lesson 5 Quiz</a></li>
              </ul>
            </li>
            <li><a <?php echo 'href="' . $path . 'pages/learnMore.php"';?>>More Unix</a></li>
          </ul>
      </nav>
