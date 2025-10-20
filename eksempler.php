<?php
// Eksempler-oversikt med separate apper per tema
// Bruk miljøvariabler TEMA01_URL .. TEMA06_URL for å peke til egne domener

function base_url(string $envName, string $fallback): string {
  $v = getenv($envName);
  if ($v && trim($v) !== '') { return rtrim($v, '/'); }
  return '/' . trim($fallback, '/');
}

function link_to(string $base, string $path): string {
  return htmlspecialchars($base . '/' . ltrim($path, '/'));
}

$t1 = base_url('TEMA01_URL', 'tema01');
$t2 = base_url('TEMA02_URL', 'tema02');
$t3 = base_url('TEMA03_URL', 'tema03');
$t4 = base_url('TEMA04_URL', 'tema04');
$t5 = base_url('TEMA05_URL', 'tema05');
$t6 = base_url('TEMA06_URL', 'tema06');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Eksempler</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

<h2>Eksempler til tema 1</h2>
<ul>
  <li><a href="<?= link_to($t1, 'eksempler/eksempel-1.html') ?>" target="_blank">Eksempel 1</a></li>
  <li><a href="<?= link_to($t1, 'eksempler/eksempel-2.html') ?>" target="_blank">Eksempel 2</a></li>
  <li><a href="<?= link_to($t1, 'eksempler/eksempel-3.html') ?>" target="_blank">Eksempel 3</a></li>
  </ul>

<h2>Eksempler til tema 2</h2>
<ul>
  <li><a href="<?= link_to($t2, 'eksempler/eksempel-1.html') ?>" target="_blank">Eksempel 1</a></li>
  <li><a href="<?= link_to($t2, 'eksempler/eksempel-2.php') ?>" target="_blank">Eksempel 2</a></li>
  <li><a href="<?= link_to($t2, 'eksempler/eksempel-3.html') ?>" target="_blank">Eksempel 3</a></li>
  <li><a href="<?= link_to($t2, 'eksempler/eksempel-4.html') ?>" target="_blank">Eksempel 4</a></li>
</ul>

<h2>Eksempler til tema 3</h2>
<ul>
  <li><a href="<?= link_to($t3, 'eksempler/eksempel-1.html') ?>" target="_blank">Eksempel 1</a></li>
  <li><a href="<?= link_to($t3, 'eksempler/eksempel-2.html') ?>" target="_blank">Eksempel 2</a></li>
  <li><a href="<?= link_to($t3, 'eksempler/eksempel-3.html') ?>" target="_blank">Eksempel 3</a></li>
  <li><a href="<?= link_to($t3, 'eksempler/eksempel-4.html') ?>" target="_blank">Eksempel 4</a></li>
  <li><a href="<?= link_to($t3, 'eksempler/eksempel-5.html') ?>" target="_blank">Eksempel 5</a></li>
</ul>

<h2>Eksempler til tema 4</h2>
<ul>
  <li><a href="<?= link_to($t4, 'eksempler/eksempel-1.html') ?>" target="_blank">Eksempel 1</a></li>
  <li><a href="<?= link_to($t4, 'eksempler/eksempel-2.html') ?>" target="_blank">Eksempel 2</a></li>
  <li><a href="<?= link_to($t4, 'eksempler/eksempel-3.html') ?>" target="_blank">Eksempel 3</a></li>
  <li><a href="<?= link_to($t4, 'eksempler/eksempel-4.html') ?>" target="_blank">Eksempel 4</a></li>
  <li><a href="<?= link_to($t4, 'eksempler/eksempel-5.html') ?>" target="_blank">Eksempel 5</a></li>
</ul>

<h2>Eksempler til tema 5</h2>
<ul>
  <li><a href="<?= link_to($t5, 'eksempler/1-vis-alle-poststeder.php') ?>" target="_blank">Eksempel 1</a> (vis alle poststeder)</li>
  <li><a href="<?= link_to($t5, 'eksempler/2-registrer-poststed.php') ?>" target="_blank">Eksempel 2</a> (registrer poststed)</li>
  <li><a href="<?= link_to($t5, 'eksempler/3-slett-poststed.php') ?>" target="_blank">Eksempel 3</a> (slett poststed)</li>
  <li><a href="<?= link_to($t5, 'eksempler/4-endre-poststed.php') ?>" target="_blank">Eksempel 4</a> (endre poststed)</li>
</ul>

<h2>Eksempler til tema 6</h2>
<ul>
  <li><a href="<?= link_to($t6, 'eksempler/1-1-statisk-listeboks.php') ?>" target="_blank">Eksempel 1-1</a> (statisk listeboks)</li>
  <li><a href="<?= link_to($t6, 'eksempler/1-2-statisk-listeboks-med-valgt-rad.php') ?>" target="_blank">Eksempel 1-2</a> (statisk listeboks med valgt rad)</li>
  <li><a href="<?= link_to($t6, 'eksempler/1-3-statisk-listeboks-med-tom-rad.php') ?>" target="_blank">Eksempel 1-3</a> (statisk listeboks med tom rad)</li>
  <li><a href="<?= link_to($t6, 'eksempler/2-1-statiske-sjekkbokser.php') ?>" target="_blank">Eksempel 2-1</a> (statiske sjekkbokser)</li>
  <li><a href="<?= link_to($t6, 'eksempler/2-2-statiske-sjekkbokser-med-valgte-bokser.php') ?>" target="_blank">Eksempel 2-2</a> (statiske sjekkbokser med valgte bokser)</li>
  <li><a href="<?= link_to($t6, 'eksempler/3-dynamisk-listeboks.php') ?>" target="_blank">Eksempel 3</a> (dynamisk listeboks)</li>
  <li><a href="<?= link_to($t6, 'eksempler/4-dynamiske-sjekkbokser.php') ?>" target="_blank">Eksempel 4</a> (dynamiske sjekkbokser)</li>
  <li><a href="<?= link_to($t6, 'eksempler/5-slett-poststed.php') ?>" target="_blank">Eksempel 5</a> (slett poststed)</li>
  <li><a href="<?= link_to($t6, 'eksempler/6-slett-flere-poststeder.php') ?>" target="_blank">Eksempel 6</a> (slett flere poststeder)</li>
 </ul>

</body>
</html>

