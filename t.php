<?php
include "mt.html";
include "m.php";
include "mr.php";
if (isset($_POST["a"])) {
    $x = $_POST["a"];
    $darbas->pirmas($x);
}
if (isset($_POST["b"]) && isset($_POST["c"])) {
    $a = $_POST["b"];
    $b = $_POST["c"];
    $darbas->antras($a, $b);
	$vaikine->rez($a, $b);

}
if (isset($_POST["ba"]) && isset($_POST["ca"]) && isset($_POST["ad"])) {
    $ba = $_POST["ba"];
    $ca = $_POST["ca"];
	$ad = $_POST["ad"];
    $darbas->progresija($ba, $ca, $ad);
}
?>