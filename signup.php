<?php
include_once 'header.php';
?>
 <section>
    <div class="centrat">
        <h2>Sign UP</h2>
        <form action="php/signup.inc.php" method="POST">
               <input type="text" name="nume" placeholder="Full Name"> 
               <input type="email" name="email" placeholder="Email"> 
               <input type="text" name="uid" placeholder="Username"> 
               <input type="password" name="pwd" placeholder="Password"> 
               <input type="password" name="pwdrepeat" placeholder="Repeat Password">
               <button type="submit" name="submit">Sign Up</button> 
        </form>
    </div>
<?php
if(isset($_GET['error'])){
    if($_GET['error'] == "emptyinput"){
        echo "<p>Te rog completeaza toate campurile</p>";
    }
    elseif ($_GET['error']== "invalidUsername"){
        echo "<p>Username-ul nu este introdus corect!</p>";
    }
    elseif ($_GET['error']== "invalidEmail"){
        echo "<p>Email-ul nu este introdus corect!</p>";
    }
    elseif ($_GET['error']== "passworddontmatch"){
        echo "<p>Parolele introduse nu sunt asemanatoare</p>";
    }
    elseif ($_GET['error']== "stmtfailed"){
        echo "<p>Ceva nu a mers! Va rugam sa reveniti</p>";
    }
    elseif ($_GET['error']== "usernametaken"){
        echo "<p>Username nu este disponibil!</p>";
    }
    elseif ($_GET['error']== "none"){
        echo "<p>Te-ai inscris cu succes!</p>";
    }elseif (!isset($_GET['error'])){
        echo "<p>Te rog sa-ti introduci datele</p>";
    }
}
         
?>
 <img src="img/background.jpg" class="background">
</section>


<?php
include_once 'footer.php'
?>