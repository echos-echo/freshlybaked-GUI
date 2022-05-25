<?php
    $path = "../";
    $page = "Lesson 0 | Freshly Baked and GUI";
    include "header.php";
?>
<!-- The php makes variables that are used in the header and footer template
to keep track of what page the header and footer is on-->

</template> -->
<section class="main">
    <div class="content">
        <div class="lesson-footer">
            <a href="lesson1.php">Continue to Lesson 1 &gt;</a>
        </div><br>
        <h1 class="lesson">Lesson 0: Installing Software</h1><hr>
        <p>
            In order to use some of these protocols, it is necessary to download software.  To use an ssh window, you must download a program such as PuTTY. On MacOS, you may already have a built-in program named Terminal.
        <p>
            Vi and Nano are examples of editors that you can get; these allow you to edit files directly, something the other protocols cannot do.
        </p>
        <p>
            Finally, a program such as Filezilla will allow you to properly and easily use the sftp protocol.
        </p><br>
        <div class="lesson-footer">
            <a href="lesson1.php">Continue to Lesson 1 &gt;</a>
        </div>
    </div>
</section>
</div>

<!-- This places the footer code inside of the current page-->
<?php
    include "footer.php";
?>
