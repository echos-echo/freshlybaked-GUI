<?php
    $path = "../";
    $page = "Lesson 5 | Freshly Baked and GUI";
    include "header.php";
?>

<!-- The php makes variables that are used in the header and footer template
to keep track of what page the header and footer is on-->

<section class="main">
    <div class="content">
        <div class="lesson-footer">
            <a href="lesson4.php">&lt; Lesson 4</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="quiz5.php" class="quiz-link">&nbsp;Take the Quiz&nbsp;</a>
        </div><br>
        <h1 class="lesson">Lesson 5: Learning More Commands</h1><hr>
        <p>
            If you are ever confused by what exactly a command does, you can use the command <code>man &lt;command name&gt;</code>.  The <code>man</code> command will print out a comprehensive explanation of the requested command, such as: name, synopsis, description, options, exit status, return values, errors, files, versions, examples, authors and see also. It is the best way to learn extensively about any one command that may be hard to understand.
        </p>
        <p>
            Another useful command would be the <code>echo</code> command. Similar to the printf command, this is used to display strings of text to the user. It can also be used to call variables.  For example, if I set X to 10 then use the command <code>echo X = $X</code>, you would receive the message <code>X= 10</code>.  This can be useful for displaying messages to the user, without too many additional statements.
        </p><br>
        <div class="lesson-footer">
            <a href="lesson4.php">&lt; Lesson 4</a>
            &nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;
            <a href="quiz4.php" class="quiz-link">&nbsp;Take the Quiz&nbsp;</a>
        </div>
    </div>
</section>
</div>
<!-- This places the footer code inside of the current page-->
<?php
    include "footer.php";
?>
