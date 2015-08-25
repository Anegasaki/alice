<?php
namespace Test;
class TestController extends \BaseController
{
    public function anyIndex()
    {
        return \View::make('testform');
    }
}
