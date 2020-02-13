<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Relations\Relation;
use App;
use Config;
//use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    { 
        App::singleton('options', function() {
	    return new \App\Models\Options();
	});
        /*App::singleton('widget', function() {
            return new \App\Widgets\Widget();
        });
        */
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $morphMap = Config::get('modules.morphMap');
        Relation::morphMap($morphMap);

        /* Blade::directive('widget', function($name) {
            return "<?php echo app('widget')->show($name);?>";
        });
        */
    }
}
