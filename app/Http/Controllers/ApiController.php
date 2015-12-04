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
