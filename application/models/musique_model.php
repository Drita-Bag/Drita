<?php
    class Musique_model extends CI_Model
    {
        function lecture()
        {
                $Return ='';
                $dir='G:\music';
                if ($dh = opendir($dir)!==false)
                {
                    while (($file = readdir($dh)) !== false)
                    {
                        $info = new SplFileInfo($file);
                        if($info->getExtension()=='mp3')
                        {
                            $Return[$file]=$file;
                        }
                    }
                    closedir($dh);
                }
                else
                {
                   $Return=false;
                }
            return $Return;
        }
    }