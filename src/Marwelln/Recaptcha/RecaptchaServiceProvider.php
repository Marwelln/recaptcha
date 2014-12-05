<?php namespace Marwelln\Recaptcha;

use Illuminate\Support\ServiceProvider;
use Marwelln\Recaptcha\Laravel\Validator;

class RecaptchaServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('marwelln/recaptcha');

		$this->app->validator->resolver(function($translator, $data, $rules, $messages) {
			return new Validator($translator, $data, $rules, $messages);
		});
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
