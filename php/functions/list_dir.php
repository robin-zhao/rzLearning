<?php

function listDir($dir)
{
    if (is_dir($dir)) {
        if ($handle = opendir($dir))
        {
            while (false !== ($entry = readdir($handle)))
            {
                if ( $entry === '.' || $entry === '..')
                {
                    continue;
                }

                $entry = $dir . '/' . $entry;

                if (is_dir($entry))
                {
                    echo $entry . "/\n";
                    listDir($entry);
                } else {
                    echo $entry . "\n";
                }
            }
        }
        closedir($handle);
    }
}

listDir('.');
