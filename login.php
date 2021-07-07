<?php
include_once 'header.php';
?>
 <section>
    <div class="centrat">
        <h2>Log In</h2>
        <form action="php/login.inc.php" method="POST">
               <input type="text" name="uid" placeholder="Username/Email"> 
               <input type="password" name="pwd" placeholder="Parola"> 
               <button type="submit" name="submit">Log In</button> 
        </form>
    </div>
    <?php
    if(isset($_GET['error'])){
    if($_GET['error'] == "emptyinput"){
        echo "<p>Te rog completeaza toate campurile</p>";
    }
    elseif ($_GET['error']== "wronglogin"){
        echo "<p>Datele de logare sunt incorecte!</p>";
    }
}
?>
         <img src="img/background.jpg" class="background">  
</section>

<?php
include_once 'footer.php'
?>