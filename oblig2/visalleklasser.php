<?php
/* vis-alle-studier */
/*
/* Programmet skriver ut alle registrerte studier
*/
include("start.html");
include("dbtilkobling.php"); // tilkobling til database-serveren utført og valg av database foretatt

$sqlSetning = "SELECT * FROM klasse ORDER BY klassekode;";
$sqlResultat = mysqli_query($db, $sqlSetning) or die("ikke mulig &aring; hente data fra databasen"); // SQL-setning sendt til database-serveren

$antallRader = mysqli_num_rows($sqlResultat); // antall rader i resultatet beregnet
print("<h3>Registrerte klasser </h3>");
print("<table class='data-table'>");
print("<caption>Registrerte klasser</caption>");
print("<thead><tr><th scope='col'>klassekode</th><th scope='col'>klassenavn</th><th scope='col'>studiumkode</th></tr></thead>");
print("<tbody>");
for ($r = 1; $r <= $antallRader; $r++) {
    $rad = mysqli_fetch_array($sqlResultat); // ny rad hentet fra spørringsresultatet
    $klassekode = $rad["klassekode"];
    $klassenavn = $rad["klassenavn"];
    $studiumkode = $rad["studiumkode"];
    print("<tr><td>$klassekode</td><td>$klassenavn</td><td>$studiumkode</td></tr>");
}
print("</tbody>");
print("</table>");
include("slutt.html");
?>


