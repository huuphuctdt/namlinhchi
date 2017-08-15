<?php

namespace App\Providers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Validator::extend('less_than', function($attribute, $value, $params, $validator){
            $other = Input::get($params[0]);
            if($other == null) {
                return true;
            }else{
                if(!is_int($other)) {
                    return intval($value) < intval($other);
                }else{
                    return false;
                }
            }
        });

        Validator::replacer('less_than', function($message, $attribute, $rule, $params) {
            return str_replace('_', ' ' , 'Giá mới phải nhỏ hơn giá cũ!');
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
