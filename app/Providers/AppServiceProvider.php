<?php

namespace App\Providers;

use App\Models\About;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        // Fetch the about information from the database
        $aboutInfo = About::first([
            'title',
            'description',
            'phone',
            'phone_2',
            'email',
            'email_2',
            'address',
            'facebook',
            'twitter',
            'instagram',
            'linkedin',
            'sunday_schedule',
            'monday_schedule',
            'tuesday_schedule',
            'wednesday_schedule',
            'thursday_schedule',
            'friday_schedule',
            'saturday_schedule',
        ]);

        // Share the about information with all views
        if ($aboutInfo) {
            view()->share('aboutInfo', $aboutInfo);
        } else {
            view()->share('aboutInfo', [
                'title' => 'About Us',
                'description' => 'We are a team of professionals',
                'phone' => '123-456-7890',
                'phone_2' => '123-456-7890',
                'email' => 'address',
                'email_2' => 'address',
                'address' => '1234 Street Name, City Name',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://www.twitter.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
                'sunday_schedule' => 'Closed',
                'monday_schedule' => 'Open',
                'tuesday_schedule' => 'Open',
                'wednesday_schedule' => 'Open',
                'thursday_schedule' => 'Open',
                'friday_schedule' => 'Open',
                'saturday_schedule' => 'Closed',
            ]);
        }
    }
}
