<?php /* vis-alle-fag */
/*
/* Programmet skriver ut alle registrerte fag
*/
 include("start.html");
 include("dbtilkobling.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
 $sqlSetning="SELECT * FROM student ORDER BY brukernavn;";
 $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
 /*SQL-setning sendt til database-serveren */
 
 $antallRader=mysqli_num_rows($sqlResultat); /* antall rader i resultatet beregnet */
 print ("<h3>Registrerte studenter </h3>");
 print ("<table class='data-table'>");
 print ("<caption>Registrerte studenter</caption>");
 print ("<thead><tr><th scope='col'>brukernavn</th><th scope='col'>fornavn</th><th scope='col'>etternavn</th><th scope='col'>klassekode</th></tr></thead>");
 print ("<tbody>");
 for ($r=1;$r<=$antallRader;$r++)
 {
 $rad=mysqli_fetch_array($sqlResultat); /* ny rad hentet fra spørringsresultatet */
 $brukernavn=$rad["brukernavn"];
 $fornavn=$rad["fornavn"];
 $etternavn=$rad["etternavn"];
 $klassekode=$rad["klassekode"];
 print ("<tr> <td> $brukernavn </td> <td> $fornavn </td> <td> $etternavn </td> <td> $klassekode </td> </tr>");
 }
 print ("</tbody>");
 print ("</table>");
 include("slutt.html");
?>
