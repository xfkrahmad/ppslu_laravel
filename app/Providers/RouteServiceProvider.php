<?php

namespace App\Providers;

use App\Models\News;
use App\Models\RegistrationApplication;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard/admin/system';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
        Route::model('news', News::class);
        Route::bind('news', function ($value) {
            // First, try to find the News model by slug
            $news = News::where('slug', $value)->first();

            // If not found by slug, try to find the News model by id
            if (!$news) {
                $news = News::findOrFail($value);
            }

            return $news;
        });

        Route::model('registerApplication', RegistrationApplication::class);
        Route::bind('registerApplication', function ($value) {
            // First, try to find the News model by slug
            $news = RegistrationApplication::where('registration_number', $value)->first();

            // If not found by slug, try to find the News model by id
            if (!$news) {
                $news = News::findOrFail($value);
            }

            return $news;
        });
    }
}
