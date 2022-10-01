<?php
echo "name file to tar.gz: ";
$filename = trim(fgets(STDIN));
echo "format do you want? \n 1. .GZ \n 2. .BZ2 \n\n >> ";
$format = trim(fgets(STDIN));

if ($format == 1) {
    $tarfile = "./data/$filename.tar";
    $zip = new \PharData($tarfile);
    $zip->buildFromDirectory("./files/");
    $zip->compress(\Phar::GZ);
    echo "done $tarfile.gz";
    
} elseif ($format == 2) {
    $tarfile = "./data/$filename.tar";
    $zip = new \PharData($tarfile);
    $zip->buildFromDirectory("./files/");
    $zip->compress(\Phar::BZ2);
    echo "done $tarfile.bz2";
    
} else {
    echo "input the correct format!";
}
?>
