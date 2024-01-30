<footer>
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Tech</h4>
                    <ul>
                        <li><a target="_blank" href="https://www.tutorialspoint.com/tutorialslibrary.htm">Tutorials</a></li>
                        <li><a target="_blank"href="https://www.tutorialspoint.com/computer_programming_tutorials.htm">Programing</a></li>
                        <li><a target="_blank" href="https://www.tutorialspoint.com/web_development_tutorials.htm">Development</a></li>
                        <li><a target="_blank" href="https://www.tutorialspoint.com/python_technologies_tutorials.htm">Technology</a></li>
                    </ul>
                </div>

                <!-- 2nd Column -->
                <div class="footer-col">
                    <h4>Properties</h4>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="update/about.php">About</a></li>
                        <li><a href="#" onclick="setFocus()">Contact US</a></li>
                        <li><a href="">Team</a></li>
                        <li><a target="_blank" href="https://en.wikipedia.org/wiki/Pondicherry_University">Our History</a></li>
                    </ul>
                </div>

                <!-- 3rd Column -->
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a target="_blank" href="https://tray.io/blog/what-is-an-api-integration-for-non-technical-people">API Integration</a></li>
                        <li><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Learn">Web Development</a></li>
                        <li><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/Guide/Mobile">Mobile Development</a></li>
                        
                    </ul>
                </div>

                <!-- 3th Column -->
                <?php
 include('database/dbconnection.php');

 
 
if (isset($_POST['submit'])) {

    $name= $_POST['name'];
    $email= $_POST['email'];
    $message=$_POST['message'];
    
    // ********************** //

    $query = "INSERT INTO `contact` (`name`,`email`,`message`) VALUES(?,?,?)";
    $mysql = mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($mysql, "sss", $name, $email, $message);
    
    $result = mysqli_stmt_execute($mysql);
    if ($result == true) {
        echo "<script>alert('Data inserted successfully')</script>";
    } else {
        echo 'Data not inserted. Error: ' . mysqli_error($conn);
    }
}
    

    ?>


                <div class="footer-col" id="contact">
                    <h4 >Contact Us</h4>
                    <form method="post">
                        <input type="text" placeholder="Your Name" class="inputName" name="name" id="myInput">
                        <input type="email" placeholder="Enter Company Email" class="inputEmail" name="email">
                        <input type="text" placeholder="Your message" class="inputName" name="message">
                        <input type="submit" value="Submit" class="inputSubmit"  name="submit">
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <p>&#169; 2023 Pondicherry_University. All Rights Reserved.</p>
                </div>
                <div class="socialIcons">
                    <a target="_blank" href="https://www.facebook.com/PondicherryUniversityCentralUniversity"><i class="fa-brands fa-facebook"></i></a>
                    <a target="_blank"href="https://www.instagram.com/pondicherry_university/?hl=en"><i class="fa-brands fa-instagram"></i></a>
                    <a target="_blank" href="https://twitter.com/PU_PondyUni"><i class="fa-brands fa-twitter"></i></a>
                    <a target="_blank" href="https://www.youtube.com/@educastpondicherryuniversi8917"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <script>
        function setFocus() {
            // Get the input element by its ID
            var inputElement = document.getElementById('myInput');

            // Set focus on the input element
            if (inputElement) {
                inputElement.focus();
            }
        }
    </script>
    </footer>