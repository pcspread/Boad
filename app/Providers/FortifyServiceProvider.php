<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
use App\Http\Requests\RegisterRequest;

class FortifyServiceProvider extends ServiceProvider
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
        // view表示：register
        Fortify::registerView(function() {
            return view('auth.register');
        });

        // 新規登録処理
        Fortify::createUsersUsing(CreateNewUser::class);

        // view表示：メール認証
        Fortify::verifyEmailView(function() {
            return view('auth.verify-email');
        });

        // view表示：login
        Fortify::loginView(function() {
            return view('auth.login');
        });
        
        // view表示：パスワードリセット
        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });

        // view表示：パスワード変更
        Fortify::resetPasswordView(function (Request $request) {
            return view('auth.reset-password', ['request', $request]);
        });
        
        // パスワード変更処理
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        // Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        // Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
