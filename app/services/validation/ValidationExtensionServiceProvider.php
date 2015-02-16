<?php //namespace services\validation;
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 2/5/2015
 * Time: 3:46 PM
 */

use Illuminate\Support\ServiceProvider;
use services\validation\PeriValidator;

class ValidationExtensionServiceProvider extends ServiceProvider {

    public function register() {}

    public function boot() {
        $this->app->validator->resolver( function( $translator, $data, $rules, $messages = array(), $customAttributes = array() ) {
            return new PeriValidator( $translator, $data, $rules, $messages, $customAttributes );
        } );
    }

}