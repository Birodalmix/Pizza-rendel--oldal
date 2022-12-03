<nav>
<div class="topnav">
    <a href="Index.php"><img src="images/home.png" alt="home icon" width="18" height="18"> Főoldal</a>
<?php
if(isset($_SESSION["username"])){
    echo "<a href=Profile.php><img src=images/profile.png alt=home icon width=18 height=18> Profil</a>";
    if($_SESSION["isadmin"]){
      require("parts/AdminMenu.php");
      }
    echo "<button onclick=logout()>Kijelentkezés <img src=images/logout-in.png alt=home icon width=18 height=18></button>";
}else{
echo "<a href=Registration.php><img src=images/profie.png alt=home icon width=18 height=18> Regisztráció</a>";
?>
      <button data-modal-target="#modal">Bejelentkezés <img src=images/logout-in.png alt=home icon width=18 height=18></button>
      <div class="modal" id="modal">
      <div class="modal-header">
      <div class="title">Bejelentkezés</div>
      <button data-close-button class="close-button">&times;</button>
      </div>
    <div class="modal-body">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <form class="modal-content animate" action="/action_page.php">
         <div class="container" style="background-color: #Ba181b;">
            <input type="text" name="username" placeholder="Felhasználónév" required><br>
            <input type="password" name="password" placeholder="Jelszó" required>
            <button type="submit" name="user">Bejelentkezés</button>
         </div>
      </form>
    </form>
    </div>
  </div>
  <div id="overlay"></div>
<?php
}
?>
</div>
</nav>