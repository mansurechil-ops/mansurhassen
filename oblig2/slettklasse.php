<?php /* slett-klasse */
/*
/* Programmet lager et skjema for å kunne slette en klasse
/* Programmet sletter den valgte klassen
*/
include("start.html");
?>

<script src="funksjoner.js"></script>
<h3>Slett klasse</h3>
<form method="post" action="" id="slettklasseSkjema" name="slettklasseSkjema" onSubmit="return bekreft()">
    Klasse 
    <select name="klassekode" id="klassekode" required>
        <?php 
        include("dynamiskefunksjoner.php"); 
        listeboksklassekode(); 
        ?>
    </select>
    <br/>
    <input type="submit" value="Slett klasse" name="slettklasseKnapp" id="slettklasseKnapp" />      
</form>

<?php
if (isset($_POST["slettklasseKnapp"])) {
    include("dbtilkobling.php");
    $klassekode = $_POST["klassekode"];

    // Sjekk om klassen har studenter først
    $sjekkSql = "SELECT COUNT(*) AS antall FROM student WHERE klassekode='$klassekode'";
    $sjekkRes = mysqli_query($db, $sjekkSql) or die("ikke mulig &aring; hente data fra databasen");
    $rad = mysqli_fetch_assoc($sjekkRes);

    if ((int)$rad['antall'] > 0) {
        print("Du m&aring; slette studentene i klassen $klassekode f&oslash;r du kan slette klassen.<br />");
    } else {
        $sqlSetning = "DELETE FROM klasse WHERE klassekode='$klassekode';";
        mysqli_query($db, $sqlSetning) or die("ikke mulig &aring; slette data i databasen");
        print("F&oslash;lgende klasse er n&aring; slettet: $klassekode <br />");
    }
}
include("slutt.html");
?>

