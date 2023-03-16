<?php $dir = new RecursiveDirectoryIterator(getcwd());
$files = new RecursiveIteratorIterator($dir);

foreach($files as $file){
    $name_of_file = $file->getFileName();
    $path_of_file = $file->getPath()."/".$file->getFileName(); 
    //need to concatenate "/" otherwise it shows all attached (path and file name)
    if ($name_of_file == ".htaccess") {
        //echo $path_of_file . "<br />";
        unlink($path_of_file);
    }
}
