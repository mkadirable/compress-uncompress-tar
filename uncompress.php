<?php 
echo "your file name : ";
$filename = trim(fgets(STDIN));
echo "your file format : \n 1. .tar \n 2. tar.gz \n 3 tar.bz2 \n\n >> ";
$format = trim(fgets(STDIN));

if($format == 1){
    $tarfile = "./data/$filename.tar";
    $zip = new Phardata("$tarfile");
    $zip -> extractTo('./extract/');
    echo "succes to extract $tarfile";

} else if($format == 2){
    $tarfile = "./data/$filename.tar.gz";
    $zip = new Phardata("$tarfile");
    $zip -> extractTo('./extract/');
    echo "succes to extract $tarfile";
    
} else if($format == 3){
    $tarfile = "./data/$filename.tar.bz2";
    $zip = new Phardata("$tarfile");
    $zip -> extractTo('./extract/');
    echo "succes to extract $tarfile";
    
} else {
    echo "input the correct format! ";
}

?>
