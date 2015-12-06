<?php

namespace App\Http\Controllers;

use App\Services\RandomStuffGenerator;

class ApiController extends Controller
{
    function __construct ( RandomStuffGenerator $rsg )
    {
        $this->rsg = $rsg;
    }

    public function imgSrc ()
    {
        return response( $this->rsg->getImageUrl(), 200 );
    }

    public function imgTag ()
    {
        $url = $this->rsg->getImageUrl();

        return view('img.tag')->with(compact('url'));
    }

    public function lorem ( $count = 1 )
    {
        $output = '';

        for ( $i = 0 ; $i < $count ; $i++ )
        {
            $output .= $this->rsg->getParagraph();
        }

        return response( $output, 200 );
    }

    // Custom content
    //
    // Support JHTML
    //
    // {
    //    "div.items" : {
    //        "h3" : "List of items:",
    //        "ul[data-state=loading]" : [
    //            "li*5"
    //        ]
    //    }
    // }
}
