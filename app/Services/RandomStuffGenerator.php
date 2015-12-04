<?php

namespace App\Services;

class RandomStuffGenerator
{
    public function getImageUrl ()
    {
        $folder = 'cats';

        $path = base_path().'/public/img/'.$folder.'/';
        $files = array_values(array_diff(scandir($path), array('..', '.','.DS_Store')));
        $fileName = $files[rand(0,count($files)-1)];

        $fileUrl = url('img').'/'.$folder.'/'.$fileName;

        return $fileUrl;
    }

    public function getParagraph ()
    {
        return '<p>'.RandomStuffHelper::getLoremContent().'</p>';
    }
}