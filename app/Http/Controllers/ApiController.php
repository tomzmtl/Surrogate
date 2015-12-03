<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
    public function imgSrc ()
    {
        $folder = 'cats';

        $path = base_path().'/public/img/'.$folder.'/';
        $files = array_values(array_diff(scandir($path), array('..', '.','.DS_Store')));
        $filename = $files[rand(0,count($files)-1)];

        $filepath = url('img').'/'.$folder.'/'.$filename;

        return response( $filepath, 200 );
    }
}
