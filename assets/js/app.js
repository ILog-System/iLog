(function(){
	'use strict'

	angular
	.module('app' , ['ui.router'])
	.config(function($stateProvider,$urlRouterProvider){
		$stateProvider
		.state({
			name: 'landing',
			url:  '/',
			templateUrl: 'assets/partials/landing.html'
		});
		$urlRouterProvider.otherwise('/');
	})


})();