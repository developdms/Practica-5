<?php
/**
 * Description of FileManager
 *
 * @author MARTIN
 */
class FileManager {

    public static function read($filename) {
        if (file_exists($filename)) {
            $content = '';
            $file = fopen($filename, "r");
            while (!feof($file)) {
                $content .= fgets($file);
            }
            fclose($file);
            return $content;
        }
        return NULL;
    }
    
    public static function scan($trace) {
        
        if (file_exists($trace)) {
            $result = array();
            $s = scandir($trace);
            for($i=0; $i<count($s); $i++){
                if($s[$i] != '.' && $s[$i] != '..'){
                    $result[] = $s[$i];
                }
            }
            return $result;
        }
        return NULL;
    }
}
