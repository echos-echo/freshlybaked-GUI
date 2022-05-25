<?php
    $path = "../";
    $page = "Lesson 2 | Freshly Baked and GUI";
    include "header.php";
?>

<!-- The php makes variables that are used in the header and footer template
to keep track of what page the header and footer is on-->
<section class="main">
    <div class="content">
        <div class="lesson-footer">
            <a href="lesson1.php">&lt; Lesson 1</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="quiz2.php" class="quiz-link">&nbsp;Take the Quiz&nbsp;</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="lesson3.php">Lesson 3 &gt;</a>
        </div><br>
        <h1 class="lesson">Lesson 2: Working with Directories</h1><hr>
        <p>
            Now that you know how to access a common directory structure, it’s time to understand how to create your own. The way to create a directory is through the command <code>mkdir &lt;directory name&gt;</code>. This command will create a directory within your current one with the name that you inputted.
        </p>
        <p>
            By contrast, if you wanted to remove a directory, simply use the command <code>rmdir &lt;directory name&gt;</code>. It is important to note that the directory must be empty in order for this to work.
        </p>
        <p>
            Once you create and enter a directory, the easiest way to create a file is to try and edit one. If the file does not exist, the system will create a file with that name. The format for file editing is <code>nano/vi/vim (any of these work; only 1 is required) &lt;filename.extension&gt;</code>. For example: <code>vi myfile.html</code>
        </p>
        <!-- uses the variables crated in php to make image have proper path-->
        <img <?php echo 'src="' . $path . 'assets/images/lesson2.png"';?> alt="lesson 2">
        <br>
        <div class="lesson-footer">
            <a href="lesson1.php">&lt; Lesson 1</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="quiz2.php" class="quiz-link">&nbsp;Take the Quiz&nbsp;</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="lesson3.php">Lesson 3 &gt;</a>
        </div>
    </div>
</section>
</div>
<!-- This places the footer code inside of the current page-->
<?php
    include "footer.php";
?>
