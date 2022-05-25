<?php
    $path = "../";
    $page = "Lesson 3 | Freshly Baked and GUI";
    include "header.php";
?>

<!-- The php makes variables that are used in the header and footer template
to keep track of what page the header and footer is on-->

<section class="main">
    <div class="content">
        <div class="lesson-footer">
            <a href="lesson2.php">&lt; Lesson 2</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="quiz3.php" class="quiz-link">&nbsp;Take the Quiz&nbsp;</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="lesson4.php">Lesson 4 &gt;</a>
        </div><br>
        <h1 class="lesson">Lesson 3: Relative and Absolute Paths</h1><hr>
        <p>
            For many projects, it is important to know which directory you are working in.  This can be done with the <code>pwd</code> command.  The command will print out your exact file path, which can allow you to call that path when necessary.
        </p>
        <p>
            In addition, to move up or down the directory tree into a different directory, the <code>cd</code> command is used. Moving farther down is simple, with the command <code>cd &lt;directory name&gt;</code>. It is important to note that the directory must be in the current directory to do this. It is possible to go down multiple directories at the same time, as long as you follow the correct structure.  To do this simply put a <code>/</code>, followed by the second directory you wish to access. For example, if I was in directory A, and I wanted to access directory C, which was in directory B, which A has access to, I would use <code>cd B/C</code> to achieve this. On the other hand, to go up one directory, you use the symbol <code>..</code>.  Going back to my earlier example, if I was in directory C, and wanted to go back up to B, I just need to use the command <code>cd ..</code>, and I would end up in directory B.
        </p>
        <p>
            It is also possible to move “sideways” in a directory tree, using a combination of the commands mentioned above. In this new example, Directory A has access to directories B and C.  If I wanted to move from directory B to directory C, I can do this. The way this is done is through the command <code>cd ../C</code>.  Internally, this will cause the user account to move up one directory, to directory A, and then back down to directory C. However, this is simply seen to the user as moving from directory B to directory C.
        </p><br>
        <div class="lesson-footer">
            <a href="lesson2.php">&lt; Lesson 2</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="quiz3.php" class="quiz-link">&nbsp;Take the Quiz&nbsp;</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="lesson4.php">Lesson 4 &gt;</a>
        </div>
    </div>
</section>
</div>
<!-- This places the footer code inside of the current page-->
<?php
    include "footer.php";
?>
