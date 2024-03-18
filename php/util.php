<?php
    function deleteFolder($folderPath) {
        if (is_dir($folderPath)) {
            $files = glob($folderPath . '/*');
            foreach ($files as $file) {
                if (is_file($file)) unlink($file);
                elseif (is_dir($file)) deleteFolder($file);
            }
            rmdir($folderPath);
        }
    }
?>