<?php namespace Peri\Providers\Validation;

use Illuminate\Support\ServiceProvider;
use Peri\Providers\Validation\PeriValidator;

class ValidationExtensionServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
    public function register() {}

    /**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
    public function boot() {
        $this->app->validator->resolver( function( $translator, $data, $rules, $messages = array(), $customAttributes = array() ) {
            return new PeriValidator( $translator, $data, $rules, $messages, $customAttributes );
        } );
    }

}