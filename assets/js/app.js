(function(){
	'use strict'

	angular
	.module('app' , ['ui.router' , 'webcam'])
	.config(function($stateProvider,$urlRouterProvider){
		$stateProvider
		.state({
			name: 'register',
			 url:  '/register',
			templateUrl: 'assets/partials/register.html'
		})
		.state({
			name: 'login',
			 url:  '/login',
			templateUrl: 'assets/partials/landing.html'
		})
		.state({
			name: 'signup',
			 url:  '/signup',
			templateUrl: 'assets/partials/signup.html'
		})
		.state({
			name: 'home',
			url:  '/',
			templateUrl: 'assets/partials/home.html'
		});
		$urlRouterProvider.otherwise('/');
	}).run(function($state){
        $state.go("/");
	});



})();