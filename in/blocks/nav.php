

<aside class="navigace_in">
  <img src="img/sokol_admin.png" alt="logo_admin">
  <ul>
    <li><a id="hls" href="home.php">Hlavní stránka</a></li>
    <li><a id="akt"href="pridat_aktualitu.php">Aktuality</a></li>
    <li><a id="akc"href="pridat_akci.php">Akce</a></li>
    <li><a id="sv"href="#">SV</a></li>
    <li><a id="ost"href="#">Ostatní</a></li>
    <?php session_start() ?>
    <li>Přihlášen jako: <?php echo $_SESSION["prave_jmeno"] . " " . $_SESSION["prave_prijmeni"] ?><br> <a href="index.php">Odhlásit</a> </li>
  </ul>
</aside>
