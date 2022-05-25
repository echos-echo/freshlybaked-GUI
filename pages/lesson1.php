
<?php
    $path = "../";
    $page = "Lesson 1 | Freshly Baked and GUI";
    include "header.php";
?>
<!-- The php makes variables that are used in the header and footer template
to keep track of what page the header and footer is on-->

<section class="main">
    <div class="content">
        <div class="lesson-footer">
            <a href="lesson0.php">&lt; Lesson 0</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="quiz1.php" class="quiz-link">&nbsp;Take the Quiz&nbsp;</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="lesson2.php">Lesson 2 &gt;</a>
        </div><br>
        <h1 class="lesson">Lesson 1: Basics of Using UNIX</h1><hr>
        <p>
            So, all of these things are well and good, but how do we do any of them? The answer is a Shell. A Shell is, simply put, a window on a computer that takes input from the user, and tells the computer what to do. As a result, this is the way to use ssh and sftp protocols.
        </p>
        <p>
            Standard for using these is <code>username@&lt;the machine you are trying to access&gt;</code>.  For example, if I wanted to access the machine <code>Glados.rit.edu</code> with the username <code>abc1234</code>, I would use <code>abc1234@Glados.rit.edu</code>.  I would then be prompted for a password, which once given would allow me to manipulate the files within the Glados machine. The best use of this manipulation is to transfer files using an sftp protocol.  This can be done with the put and get commands, which send and receive files from a remotely accessed machine, respectively.
        </p>
        <!-- uses the variables crated in php to make image have proper path-->
        <img <?php echo 'src="' . $path . 'assets/images/lesson1.png"';?> alt="lesson 1">
        <br>
        <div class="lesson-footer">
            <a href="lesson0.php">&lt; Lesson 0</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="quiz1.php" class="quiz-link">&nbsp;Take the Quiz&nbsp;</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="lesson2.php">Lesson 2 &gt;</a>
        </div>
    </div>
</section>
</div>
<!-- This places the footer code inside of the current page-->
<?php
    include "footer.php";
?>
