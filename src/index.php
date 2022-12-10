<?php declare(strict_types=1);

$filename = "data";
if (!file_exists($filename))
{
    $fp = fopen($filename, "w");
    fwrite($fp, serialize([]));
    fclose($fp);
}

$data = unserialize(file_get_contents($filename));

require "header.php"
?>

<h1><?= serialize($data) ?></h1>

<?php require "footer.php" ?>