<?php

namespace RepoTest;

class GenClass
{

    public function __construct() 
    {
        echo __FUNCTION__;
    }

    public function test()
    {
        echo 'test';
    }

    public function test2()
    {
        echo 'test2';
    } 
}
