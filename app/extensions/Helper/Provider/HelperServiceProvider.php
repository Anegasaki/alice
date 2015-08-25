<?php
namespace Helper;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider {

    public function register()
    {
/*
        $this->app['html'] = $this->app->share(
            function($app){
                return new HtmlBuilder($app['url']);
            }
        );
*/
    }
}
