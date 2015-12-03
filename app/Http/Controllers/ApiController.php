<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
    public function imgSrc ()
    {
        $type = rand(0,1) ? 'cat' : 'monkey';

        $path = base_path().'/public/img/'.$type.'/';
        $files = array_values(array_diff(scandir($path), array('..', '.')));
        $filename = $files[rand(0,count($files)-1)];

        $filepath = url('img').'/'.$type.'/'.$filename;

        return response( $filepath, 200 );
    }
}
