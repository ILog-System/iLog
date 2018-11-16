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
		})
		.state({
			name: 'signup',
			 url:  '/signup',
			templateUrl: 'assets/partials/signup.html'
		});
		$urlRouterProvider.otherwise('/');
	})


})();