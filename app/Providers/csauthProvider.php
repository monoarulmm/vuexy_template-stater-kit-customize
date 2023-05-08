<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use laravel\Fortify\Fortify;


class csauthProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::loginView(function () {
          
            return view('content.authentications.auth-login-basic');
        });


        Fortify::registerView(function () {
       
            return view('content.authentications.auth-register-basic' );
        });

        Fortify::verifyEmailView(function () {
            $pageConfigs = ['myLayout' => 'blank'];
            return view('content.authentications.auth-verify-email-basic', ['pageConfigs' => $pageConfigs]);
        });

        Fortify::resetPasswordView(function () {
            $pageConfigs = ['myLayout' => 'blank'];
            return view('content.authentications.auth-reset-password-basic', ['pageConfigs' => $pageConfigs]);
        });

        Fortify::requestPasswordResetLinkView(function () {
            $pageConfigs = ['myLayout' => 'blank'];
            return view('content.authentications.auth-forgot-password-basic', ['pageConfigs' => $pageConfigs]);
        });


        Fortify::twoFactorChallengeView(function () {
            return view('content.authentications.auth-two-steps-basic');
        });


        Fortify::confirmPasswordView(function () {
            return view('content.authentications.auth-update-password-basic');
        });
    }
}
