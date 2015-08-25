<?php
namespace Index;
class IndexController extends \BaseController 
{

	public function anyIndex()
	{
        return \View::make('alice');
	}

}
