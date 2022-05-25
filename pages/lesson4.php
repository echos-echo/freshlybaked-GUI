<?php
    $path = "../";
    $page = "Lesson 4 | Freshly Baked and GUI";
    include "header.php";
?>

<!-- The php makes variables that are used in the header and footer template
to keep track of what page the header and footer is on-->

<section class="main">
    <div class="content">
        <div class="lesson-footer">
            <a href="lesson2.php">&lt; Lesson 3</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="quiz4.php" class="quiz-link">&nbsp;Take the Quiz&nbsp;</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="lesson5.php">Lesson 5 &gt;</a>
        </div><br>
        <h1 class="lesson">Lesson 4: Working with Files</h1><hr>
        <p>
            When using UNIX, the files in a specific directory are not listed directly.  Instead, the user must use a command to find out what specific files and directories are in the current directory. To do this, you simply need to use the <code>ls</code> command (Note that this is the lowercase "L", not the uppercase "i"). This command will produce a printout of every file and directory in the current directory. Every file will be able to be identified by its file type, whereas directories will not have file types associated with them.
        </p>
        <p>
            For more information, you can use the <code>ls -l</code> command, which will give a rundown of what permissions the user has for each file.  Some will be <code>r</code> for read, <code>w</code> for write, or <code>d</code> for directory. Any combination of these can be displayed.
        </p>
        <!-- uses the variables crated in php to make image have proper path-->
        <img <?php echo 'src="' . $path . 'assets/images/lesson4.png"';?> alt="lesson_4"><br>
        <div class="lesson-footer">
            <a href="lesson2.php">&lt; Lesson 3</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="quiz4.php" class="quiz-link">&nbsp;Take the Quiz&nbsp;</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="lesson5.php">Lesson 5 &gt;</a>
        </div>
    </div>
</section>
</div>
<!-- This places the footer code inside of the current page-->
<?php
    include "footer.php";
?>
