<?php
Route::get('routes', function () {\Artisan::call('route:list'); return '<pre>' . \Artisan::output() . '</pre>'; });
Route::get('/r', function () {
    function philsroutes()
    {
        $routeCollection = Route::getRoutes();

        echo "<table style='width:100%'>";
        echo "<tr>";
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='10%'><h4>Route</h4></td>";
        echo "<td width='80%'><h4>Corresponding Action</h4></td>";
        echo "</tr>";
        foreach ($routeCollection as $value) {
            echo "<tr>";
            echo "<td>" . $value->getMethods()[0] . "</td>";
            echo "<td><a href='" . $value->getPath() . "' target='_blank'>" . $value->getPath() . "</a>    </td>";
            echo "<td>" . $value->getActionName() . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    return philsroutes();
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    /*
    |--------------------------------------------------------------------------
    | Customer Routes
    |--------------------------------------------------------------------------
    |
    | Routes for public users of application
    |
    */

    Route::group(['namespace' => 'Customer'], function () {

        Route::get('/', function () {
            return view('welcome');
        });

        Route::controllers([

        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    |
    | Routes for internal admin users of application
    |
    */

    Route::group(['namespace' => 'Admin', 'prefix' => config('route.prefix.admin'), 'middleware' => 'auth'], function () {

        Route::get('/', function () {
            return view('admin.home');
        });

        Route::controllers([

        ]);

    });

    /*
    |--------------------------------------------------------------------------
    | Auth Routes
    |--------------------------------------------------------------------------
    |
    | Routes for authentication of application
    |
    */

    Route::group(['namespace' => 'Auth'], function () {
        Route::controllers([
            'auth' => 'AuthController',
            'password' => 'PasswordController'
        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | Examples Routes
    |--------------------------------------------------------------------------
    |
    | Routes for examples valid only in test environments
    |
    */

    Route::group(['namespace' => 'Examples'], function () {

        if (App::environment() != 'production') {
            Route::controllers([
                'api-test' => 'APITestController',
                'billing' => 'BillingController',
                'mailer' => 'MailerController',
                'test' => 'TestController'
            ]);
        }
    });

});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Routes for api endpoints
|
*/

Route::group(['middleware' => ['api'], 'namespace' => 'API\V1', 'prefix' => 'api'], function () {

    Route::get('/user/search', array('uses' => 'UserController@search'));

    Route::resources([
        'user' => 'UserController'
    ]);

});


/*
|--------------------------------------------------------------------------
| Development Routes
|--------------------------------------------------------------------------
|
| Routes for developer information
|
*/

Route::get('env', function () {
    dd(App::environment());
});

Route::get('info', function () {
    if (App::environment() != 'production') {
        phpinfo();
    }
});

Route::get('/r', function () {
    function philsroutes() {
        $routeCollection = Route::getRoutes();
        echo "<table style='width:100%'>";
        echo '<tr>';
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='10%'><h4>Route</h4></td>";
        echo "<td width='80%'><h4>Corresponding Action</h4></td>";
        echo '</tr>';
        foreach ($routeCollection as $value) {
            echo '<tr>';
            echo '<td>' . $value->getMethods()[0] . '</td>';
            echo "<td><a href='" . $value->getPath() . "' target='_blank'>" . $value->getPath() . '</a> </td>';
            echo '<td>' . $value->getActionName() . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    return philsroutes();
});

Route::get('migrate', function () {
    \Artisan::call('migrate:refresh');
    return '<pre>' . \Artisan::output() . '</pre>';
//  return '<a href="' . $value->getPath() . '"  target="_blank">' . \Artisan::output() . '</a>';
//  echo "<td><a href='" . $value->getPath() . "' target='_blank'>' . \Artisan::output() . '</a>    </td>";
});

Route::get('routes', function () {
    \Artisan::call('route:list');
    return '<pre>' . \Artisan::output() . '</pre>';

});

Route::get('/paths', function () {
    function philspaths()
    {
    // $routeCollection = Route::getRoutes();
        foreach (Route::getRoutes() as $route) {
            $compiled = $route->getCompiled();
            if(!is_null($compiled))
            {
                var_dump($compiled->getStaticPrefix());
            }
        }
    }
    return philspaths();
});


Route::get('/', array('as' => 'home', function() {return View::make('welcome'); }));

// View::creator('*', function ($view)
// {
//     View::share('viewName', $view->getName());
// });

// // debug view name in views
// View::creator('*', function ($view)
// {
//     echo '<pre class="debug viewname">' . $view->getName() . '</pre>';
// });



