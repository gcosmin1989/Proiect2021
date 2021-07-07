<?php
include_once 'header.php';
?>
 <section>
     <div class="centrat">

         <img src="img/profile.jpg" class="profile">
         <h1 style="font-size:50px">Long Story Short</h1>
         <br>
         <p style="font-size:20px">Soon-to-gradutate <a href="https://www.link-academy.com/" target="_blank"> LINK ACADEMY</a> PHP Web Development, Looking forward for new oportunities in IT. Love to code and always oppened to new challenges <br> </p>
            <br>
            <br>

            <?php
                if(isset($_SESSION["userid"])){
                    echo "<h2> Welcome!</h2>";
                }
                else{
                    echo "<p>If you have the time and pleasure to see my full profile please Sign Up or Log In.</p>
                        <br>
                        <form>
                            <button type='button' class='btn btn-secondary'><a href='signup.php'>Sign Up</a></button>
                            <button type='button' class='btn btn-secondary'><a href='login.php'>Log In</a></button>
                          </form>";
                }
            ?>
        </div>
        
</section>
<img src="img/background.jpg" class="background">

<?php
include_once 'footer.php'
?>
