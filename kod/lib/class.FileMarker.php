<?
defined('CONFIG') or die('class.Marker.php require config.php');


/**
 * Implementacja interfejsu Marker dzia³aj±ca na plikach. Swoje dane zapisuje w
 * plikach w katalogu $CFG->adresKatalogu . FileMarker::$marker_dir
 * @version 1.0.0
 */
class FileMarker implements Marker{

    /**
     * Katalog w którym trzymane s± znaczniki wzglêdem katalogu g³ównego.
     * Musi mieæ prawa zapisu dla wykonywanego skryptu.
     * @static
     * @access private
     * @var string
     */
    private static $marker_dir = "data/markers";



    public static function set($markerName, $markerValue){
        global $CFG;

        $dir = $CFG->adresKatalogu . FileMarker::$marker_dir;
        if($fh = fopen("$dir/$markerName", 'w')){
            if(flock($fh, LOCK_EX)){
                @fwrite($fh, serialize($markerValue));
                @fclose($fh);
                chmod("$dir/$markerName", 0666);
                return true;

            }else{
                @fclose($fh);
                @unlink("$dir/$markerName");
                return false;

            }

        }else{
            return false;

        }
    }



    public static function exists($markerName){
        global $CFG;

        $dir = $CFG->adresKatalogu . FileMarker::$marker_dir;
        if(file_exists("$dir/$markerName")){
            return true;

        }else{
            return false;

        }
    }



    public static function getValue($markerName){
        global $CFG;

        $dir = $CFG->adresKatalogu . FileMarker::$marker_dir;
        if($fh = @fopen("$dir/$markerName", 'r')){
            if(flock($fh, LOCK_SH)){
                $data = fread($fh, 8192);
                @fclose($fh);
                if($data !== false){
                    return unserialize($data);

                }else{
                    return NULL;

                }

            }else{
                @fclose($fh);
                return NULL;
            }

        }else{
            return NULL;

        }
    }



    public static function remove($markerName){
        global $CFG;

        @unlink($CFG->adresKatalogu . FileMarker::$marker_dir . "/$markerName");
    }
}

?>