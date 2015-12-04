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
        return '<p>'.$this->getLoremContent().'</p>';
    }

    private function getLoremContent ( $base = 40, $variation = 10 )
    {
        $ipsum = ['ad','adipiscing','aliqua','aliquip','amet','anim','aute','cillum','commodo','consectetur','consequat','culpa','cupidatat','deserunt','do','dolor','dolor','dolore','dolore','duis','ea','eiusmod','elit','enim','esse','est','et','eu','ex','excepteur','exercitation','fugiat','id','in','in','in','incididunt','ipsum','irure','labore','laboris','laborum','lorem','magna','minim','mollit','nisi','non','nostrud','nulla','occaecat','officia','pariatur','proident','qui','quis','reprehenderit','sed','sint','sit','sunt','tempor','ullamco','ut','ut','ut','velit','veniam','voluptate'];

        shuffle($ipsum);

        $count = $base + ( rand(0,$variation) * rand(0,1) ? 1 : -1 );
        $words = array_slice( $ipsum, 0, $count );

        $words[0] = ucfirst($words[0]);

        $p = implode( ' ', $words ) . '.';

        return $p;
    }
}
