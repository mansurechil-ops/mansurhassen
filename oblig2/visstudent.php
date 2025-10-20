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
        print("<table class='data-table'>");
        print("<caption>Valgt student</caption>");
        print("<thead><tr><th scope='col'>brukernavn</th><th scope='col'>fornavn</th><th scope='col'>etternavn</th><th scope='col'>klassekode</th></tr></thead>");
        print("<tbody>");
        print("<tr><td>" . htmlspecialchars($rad['brukernavn']) . "</td><td>" . htmlspecialchars($rad['fornavn']) . "</td><td>" . htmlspecialchars($rad['etternavn']) . "</td><td>" . htmlspecialchars($rad['klassekode']) . "</td></tr>");
        print("</tbody>");
        print("</table>");
    } else {
        print("Fant ingen student med brukernavn $brukernavn");
    }
}
include("slutt.html");
?>
