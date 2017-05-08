<?php
    class Musique_model extends CI_Model
    {
        function lecture()
        {
            $dir='G:\music';
            if ($dh = opendir($dir))
            {
                while (($file = readdir($dh)) !== false)
                {
                    echo $file.PHP_EOL;
                }
                closedir($dh);
            }
            return 'plop';
        }
    }