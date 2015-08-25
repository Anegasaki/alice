<?php
namespace Ajax;
class AjaxTestController extends \BaseController
{
    public function anyAjaxTest()
    {
        $response = \Input::all();

        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($response);
   }
}
