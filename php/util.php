<?php
namespace Utils;

class Util {
    static function deleteFolder($folderPath) {
        if (is_dir($folderPath)) {
            $files = glob($folderPath . '/*');
            foreach ($files as $file) {
                if (is_file($file)) unlink($file);
                elseif (is_dir($file)) deleteFolder($file);
            }
            rmdir($folderPath);
        }
    }

    static function printClass($expected, $current) {
        echo 'class="'.(!strcasecmp($expected, $current) ? 'currentPage' : '') . ' phoneHeaderText"';
    }

    /**
     * Compute the name for a path
     * (remove all unwanted chars, trim the string, replacing spaces by underscores, etc.)
     */
    static function computeNameForPath($name) {
        /* A list of all unwanted chars */
        $unwanted_array = array(
            'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A',
            'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I',
            'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U',
            'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a',
            'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i',
            'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u',
            'û'=>'u', 'ü'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y'
        );

        /* Proceed removal of unwanted chars */
        $name = strtr($name, $unwanted_array);
        $name = preg_replace('/[^A-Za-z0-9\-\_\s]/', '', $name);
        $name = trim($name);
        $name = str_replace(' ', '_', $name);
        $name = strtolower($name);
                
        return $name;
    }

    /**
     * Search for a string in another string (case insensitive)
     * @return bool true if the search result is found in the string, false otherwise
     */
    static function search($searchResult, $string) {
        if($searchResult == null) return true;
    
        /* Handling coma (,) and spaces (+) as separator */
        if(Util::searchLoop($searchResult, ',', $string) || Util::searchLoop($searchResult, '+', $string) || Util::searchLoop($searchResult, ' ', $string))
            return true;

        /* Default case (No separator(s)) */
        return str_contains(strtolower($string), strtolower($searchResult));
    }

    static function searchLoop($searchResult, $char, $string) {
        if(strpos($searchResult, $char) !== false) {
            $searchResult = explode($char, $searchResult);
            foreach($searchResult as $search) {
                if(str_contains(strtolower($string), strtolower($search))) return true;
            }
        }
        return false;
    }

    static function getDefaultValue($type) {
        if(!isset($_SESSION["devweb_user"]) || !is_string($_SESSION["devweb_user"])) return "";
        $user = unserialize($_SESSION["devweb_user"]);

        echo 'value="';
        switch($type) {
            case "user_mail":
                echo $user->emailUser;
                break;
            case "user_name":
                echo $user->nameUser . " " . $user->lastnameUser;
                break;
        }
        echo '"';
    }
}
?>