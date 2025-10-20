<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="utf-8" />
  <title>Obligatorisk oppgave 2</title>
</head>
<body>

  <?php include __DIR__ . '/start.html'; ?>

  <main>
    <?php
      // make sure these files echo the tables (and do NOT contain a full <html> document)
      require __DIR__ . '/dbtilkobling.php';
      include __DIR__ . '/visalleklasser.php';
      include __DIR__ . '/visallestudenter.php';
      // include __DIR__ . '/visstudent.php';   // if you want the single-student view too
    ?>
  </main>

  <?php include __DIR__ . '/slutt.html'; ?>

</body>
</html>









