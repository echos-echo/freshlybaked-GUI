
    <footer>
        <div class="footerLogo">
            <a href=# id="toTop"> <!-- will need to put an anchor tag at the top of page-->
                <img <?php echo 'src="' . $path . 'assets/images/cookie.png"';?> alt="group logo">
                <p>Back to Top</p>
            </a>
        </div>
        <div class="footerMap">
            <ul>
                <li><a <?php echo 'href="' . $path . 'index.php"';?>>Homepage</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/lessons.php"';?>>Lessons</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/quizzes.php"';?>>Quizzes</a></li>
                <li><a <?php echo 'href="' . $path . 'pages/learnMore.php"';?>>More UNIX</a></li><br>
                <li>&copy; RIT 2020</li>
            </ul>
        </div>
        <!-- creator profiles -->
        <div class="footerProfiles">
            <h2>Follow Us:</h2><br>
            <div class="container">
                <a href="https://people.rit.edu/~sav7972/ISTE240/" target="_blank">
                    <div class="zoom"><img alt="image of Steven" class="image" <?php echo 'src="' . $path . 'assets/images/steven.png"';?>/>
                        <div class="overlay" id="steven" style="opacity:0.0" onmouseover="overlay(this.id)" onmouseout="mouseoutevent(id)">
                            <div class="profile">
                                <u>Steven Salazar</u><br>
                                Role: Team Leader<br>
                                Contact: sav7972@g.rit.edu
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="container">
                <a href="https://people.rit.edu/~mlg4789/ISTE240/" target="_blank">
                    <div class="zoom"><img alt="image of Max" class="image" <?php echo 'src="' . $path . 'assets/images/max.JPG"';?>/>
                        <div class="overlay" id="max" style="opacity:0.0" onmouseover="overlay(this.id)" onmouseout="mouseoutevent(this.id)">
                            <div class="profile">
                                <u>Max Gerber</u><br>
                                Role: UX<br>
                                Contact: mlg4789@rit.edu
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="container">
                <a href="https://people.rit.edu/~jxo7257/ISTE240/" target="_blank">
                    <div class="zoom"><img alt="image of Joel" class="image" <?php echo 'src="' . $path . 'assets/images/joel.JPG"';?>/>
                        <div class="overlay" id="joel" style="opacity:0.0" onmouseover="overlay(this.id)" onmouseout="mouseoutevent(this.id)">
                            <div class="profile">
                                <u>Joel Owens</u><br>
                                Role: Strategist<br>
                                Contact: jxo7257@g.rit.edu
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="container">
                <a href="https://people.rit.edu/~fjs9830/ISTE240/" target="_blank">
                    <div class="zoom"><img alt="image of Francis" class="image" <?php echo 'src="' . $path . 'assets/images/francis.JPG"';?>/>
                        <div class="overlay" id="francis" style="opacity:0.0" onmouseover="overlay(this.id)" onmouseout="mouseoutevent(id)">
                            <div class="profile">
                                <u>Francis Sanchez</u><br>
                                Role: Info Architect<br>
                                Contact: fjs9830@g.rit.edu
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="container">
                <a href="https://people.rit.edu/~eec5213/ISTE240/" target="_blank">
                    <div class="zoom"><img alt="image of Eve" class="image" <?php echo 'src="' . $path . 'assets/images/eve.jpg"';?>/>
                        <div class="overlay" id="eve" style="opacity:0.0" onmouseover="overlay(this.id)" onmouseout="mouseoutevent(this.id)">
                            <div class="profile">
                                <u>Eve Cho</u><br>
                                Role: Graphic Design<br>
                                Contact: eec5213@g.rit.edu
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <script>
            $('.icon').click(function(){
                $('span').toggleClass("cancel");
            });
        </script>

        <script <?php echo 'src="' . $path . 'assets/js/footer.js"';?>></script>
    </footer>
</body>
</html>