<?php
const CONSTANT_TEST = "test";

$var = "There is the variable";
echo "<h1>Here is the text</h1>" . "<h2>Here is another text</h2>"; //works with and without brackets
include("header.php");

if ($var === "232") {
    $var2 = "another text";
}

if (!isset($_COOKIE["color"])) {
    setcookie("color", "red");
} else {
    echo "<h1> The color is red" . $_COOKIE . "</h1>";
}

// //OR
// if (!isset($_COOKIE["color"])) :
//     setcookie("color", "red");
// else :
//     echo "<h1> The color is red" . $_COOKIE . "</h1>";
// endif;

$vari = "1555we";
$intval = intval($vari);
$res = $intval + 9;
$res++;
echo "<h1 style='color:green;'>" . $res++ . "</h1>";
echo "<h1 style='color:green;'>" . ++$res . "</h1>";
echo "<h1 style='color:green;'>" . $res . "</h1>";


$boolval = true;
$boolval = false;

$arr[0] = "value 1";
$arr["key"] = "value 2";
echo $arr[0];
echo $arr["key"];


$text_part1 = 'Lala ';
$text_full = "$text_part1 Baba";
echo $text_full;

$arr2 = [];
$arr2[] = "el 1";
$arr2[] = "el 2";
$arr2[] = "el 3";
echo "<br>", $arr2[0], $arr2[1], $arr2[2];

$res = $arr2[0] <> $arr2[1]; //same as  $arr2[0] != $arr2[1];
$res = $arr2[0] !== $arr2[1];
echo "<br>";
echo 1 == "1"; // prints 1 (true)
echo 1 === "1"; //prints space (false)

$result = (1 == "1") ? "true" : "false";
echo $result;
$result = (1 === "1") ? "true" : "false";
echo $result;
echo "<br>", 0 == "A" ? "true" : "false";
echo "<br>", 1 == "1" ? "true" : "false";
echo "<br>", 1 === "1" ? "true" : "false";

if (1 == 1 and 2 === 2) {
    echo "<br>", "labas";
}
?>

<?php
foreach ($arr2 as $key => $value) {
    echo "<br>", $key;
    echo "<br>", $value;
    echo "<br>", $arr[$key];
}
?>

<body>
    <?php

    include("navbar.php");
    ?>
    <p><?= "Here is the text \n and here it continues" ?></p>
    <?= "<h1>Here is the text</h1>"
    ?>
    <?= $nd ?>
    <?= $var2 ?>
</body>