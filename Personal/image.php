<?php
include "../Php/Header1.php";
$picture = null;
?>
<META name="description" content="My Modeling Portfolio">
<META name="keywords" content="CAD Modeling ProE AutoCAD">
<TITLE>CAD Portfolio</TITLE>
<?php include "../Php/Header2.php"; ?>
<Div class="imageArea">
<IMG SRC="./<?php print $_GET['picture']; ?>">
</Div>
<?php include "../Php/Footer.php"; ?>
