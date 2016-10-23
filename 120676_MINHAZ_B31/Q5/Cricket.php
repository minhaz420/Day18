<?php


class Cricket
{
    public function __construct()
    {
        echo "This is Cricket Construct Data";
    }
}

class Movie extends Cricket
{
    public function __construct()
    {
        echo "This is Movie Construct Data <br/>";
        parent::__construct();
    }
}
