<?php
    $path = "./";
    $page = "Home | Freshly Baked and GUI";
    include $path . "pages/header.php";
?>
        <section class="main">
            <div class="content">
                <div id="banner">
                    <h2>Freshly Baked and GUI</h2>
                    <img src="assets/images/cookie.png" alt="Picture of cookie" />
                </div>
                <h1><span id= "changing">What is UNIX?</span></h1>
                <!-- word changing script for the span has been commented out for now -->
                <p>
                    Unix is an operating system network that was designed to be accessed by multiple users.  As a result, the system can be used over multiple machines in order to allow this functionality to be achieved. The primary way this happens is through SSH and SFTP. SSH stands for Secure Shell. An SSH protocol’s main purpose is to remotely log in to another machine without needing to physically access it, making web development easier from long distances. SFTP on the other hand, stands for SSH File Transfer Protocol. It’s primary task is to allow SSH windows to share files between machines while one is remotely logging into another. The combination of these two protocols are meant to allow access to a series of directories.  It’s easy to imagine directories as a tree, with the “root” directory splitting out into multiple “branches”, that can give way to branches of their own.  All of these can be done in Terminal or Bash windows, which are simply interfaces that the user can access to manipulate things directly.
                </p>
                <p>
                    Continue to the lessons pages in order to learn more about UNIX and the specifics of how to use it!
                </p>
            </div>
        </section>
    </div>
<?php
    include $path . "pages/footer.php";
?>