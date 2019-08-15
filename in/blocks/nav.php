<?php /* session_start();

  if(isset($_SESSION["uziv"])){
    header("Location: index.php");
  }
 */
?>



<aside class="navigace_in">
  <img src="img/sokol_admin.png" alt="logo_admin">
  <dl>
    <dt><a id="hls" href="home.php">Hlavní stránka</a></dt>
    <dt><a id="akt"href="aktuality.php">Aktuality</a></dt>
      <dd id="akt_dd1"> <a href="aktuality.php">Seznam aktualit</a> </dd>
      <dd id="akt_dd2"> <a href="pridat_aktualitu.php">Přidat aktualitu</a> </dd>
    <dt><a id="akc"href="pridat_akci.php">Akce</a></dt>
    <dt><a id="sv"href="sv_admin.php">SV</a></li>
    <dt><a id="ost"href="#">Ostatní</a></dt>

    <dt>Přihlášen jako: <?php echo $_SESSION["prave_jmeno"] . " " . $_SESSION["prave_prijmeni"] ?><br> <a href="odhlaseni.php">Odhlásit</a> </dt>
  </ul>
</aside>
