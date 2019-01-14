<?php

namespace Nayhtwe\Bmi_calculator;

use Illuminate\Support\ServiceProvider;

class BMICalculatorServiceProvider extends ServiceProvider {
	function boot() {
		$this->loadRoutesFrom(__DIR__ . '/routes/web.php');
		$this->loadViewsFrom(__DIR__ . '/views', 'bmi_calculator');

	}

	function register() {

	}
}
