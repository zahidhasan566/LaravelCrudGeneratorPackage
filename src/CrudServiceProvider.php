<?php
namespace Crudoperation;
use Crudoperation\Console\MakeApiCrud;
use Crudoperation\Console\MakeCommentable;
use Crudoperation\Console\MakeCrud;
use Crudoperation\Console\MakeViews;
use Crudoperation\Console\RemoveApiCrud;
use Crudoperation\Console\RemoveCommentable;
use Crudoperation\Console\RemoveCrud;


class CrudServiceProvider extends \Carbon\Laravel\ServiceProvider{
public function boot(){
//    $this->loadRoutesFrom((__DIR__.'/routes/web.php'));
    //publish config file
    $this->publishes([__DIR__.'/config/crudgen.php' => config_path('crudgen.php')]);

    //default-theme
    $this->publishes([__DIR__.'/stubs/default-theme/' => resource_path('crudgen/views/default-theme/')]);

    //and default-layout
    $this->publishes([__DIR__.'/stubs/default-layout.stub' => resource_path('views/default.blade.php')]);
}
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/crudgen.php', 'crudgen');

        $this->commands(
            MakeCrud::class,
            MakeViews::class,
            RemoveCrud::class,
            MakeApiCrud::class,
            RemoveApiCrud::class,
            MakeCommentable::class,
            RemoveCommentable::class,
        );
    }
}
