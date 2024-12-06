<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(RazorpayService::class, function ($app) {
            return new RazorpayService();
        });
    }
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Sharing unread notification count to all views
        View::composer('*', function ($view) {
            // Ensure user is authenticated before fetching notifications
            if (Auth::check()) {
                // Fetch count of unread notifications for authenticated user
                $unreadCount = Notification::where('user_id', Auth::id())
                    ->where('is_read', false)
                    ->count();
                
                // Share the unread count variable with all views
                $view->with('unreadCount', $unreadCount);
            }
        });
    }
}
