<?php 
/*
/* Programmet lar deg velge en student og viser detaljer
*/
include("start.html");
?>

<h3>Vis student</h3>
<form method="post" action="" id="visstudentskjema" name="visstudentskjema">
  Student 
  <select name="brukernavn" id="brukernavn" required>
    <?php 
      include("dynamiskefunksjoner.php"); 
      listeboksbrukernavn(); 
    ?>
  </select>
  <input type="submit" value="Vis" id="visstudentknapp" name="visstudentknapp"/>
</form>

<?php
if (isset($_POST['visstudentknapp'])) {
    include("dbtilkobling.php");
    $brukernavn = $_POST['brukernavn'];
    $sql = "SELECT brukernavn, fornavn, etternavn, klassekode FROM student WHERE brukernavn='$brukernavn'";
    $res = mysqli_query($db, $sql) or die("ikke mulig &aring; hente data fra databasen");
    if ($rad = mysqli_fetch_assoc($res)) {
        print("<h4>Valgt student</h4>");
        print("<table border=1>");
        print("<tr><th align=left>brukernavn</th><th align=left>fornavn</th><th align=left>etternavn</th><th align=left>klassekode</th></tr>");
        print("<tr><td>{$rad['brukernavn']}</td><td>{$rad['fornavn']}</td><td>{$rad['etternavn']}</td><td>{$rad['klassekode']}</td></tr>");
        print("</table>");
    } else {
        print("Fant ingen student med brukernavn $brukernavn");
    }
}
include("slutt.html");
?>

