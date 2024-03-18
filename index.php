<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 1</title>
</head>
<body>

<?php
$Name = "Yegor";
echo "Hello! My name is '$Name'";
?>
<br>
<?php
$Age = 16;
echo "I`m " . $Age;
?>
<br>
<?php
$a = 2;
$b = 5;
$rez = $a + $b;
echo "'$a' + '$b' = '$rez'";
?>
<br>
<?php
echo "До перестановки: a = $a, b = $b\n";

$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;

echo " Після: a = $a, b = $b\n";
?>
<br>
<?php
$questions = array(
    'first' => ['A' => true, 'B' => false, 'C' => false, 'D' => false],
    'second' => ['A' => true, 'B' => false, 'C' => true, 'D' => false],
    'third' => 'Answer',
);
?>
<br>

<p><?= array_keys($questions)[0] ?> :</p>
<?php
foreach ($questions['first'] as $key => $value):
    if ($value === true): ?>
        <input type="radio" value="<?= $key ?>">
        <label for="<?= $key ?>" style="color: green;"><?= $key ?></label><br>
    <?php
    else: ?>
        <input type="radio" value="<?= $key ?>">
        <label for="<?= $key ?>"><?= $key ?></label><br>
    <?php
    endif; ?>
<?php
endforeach; ?>
<br>

<p><?= array_keys($questions)[1] ?> :</p>
<?php
foreach ($questions['second'] as $key => $value):
    if ($value === true): ?>
        <input type="checkbox" value="<?= $key ?>">
        <label for="<?= $key ?>" style="color: green;"><?= $key ?></label><br>
    <?php
    else: ?>
        <input type="checkbox" value="<?= $key ?>">
        <label for="<?= $key ?>"><?= $key ?></label><br>
    <?php
    endif; ?>
<?php
endforeach; ?>

<br>
<p><?= array_keys($questions)[2] ?> :</p>
<input type="text" placeholder="<?= $questions['third'] ?>">

<br>
<?php
$tag = 'Hello';
$blue = 'blue';
$red = 'red';
$w100px = '100px';
$h100px = '100px';
echo "<br>background_color : " . $blue;
echo "<br>color: " . $red;
echo "<br>width: " . $w100px;
echo "<br>height: " . $h100px;
?>
<div style="
        background-color: <?= $blue ?>;
        color: <?= $red ?>;
        width: <?= $w100px ?>;
        height: <?= $h100px ?>;">

    <?= $tag ?>
</div>

</body>
</html>