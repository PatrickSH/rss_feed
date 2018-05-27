<?php

namespace App\Integration;

class FeedReader{

    public static function getFeed($feed_url) {

        $content = file_get_contents($feed_url);
        $x = new SimpleXmlElement($content);

        return $x;
    }

}
