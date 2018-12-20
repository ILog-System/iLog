(function(){
	'use strict'

	angular
	.module('app' , ['ui.router','webcam'])
	.config(function($stateProvider,$urlRouterProvider){
		$stateProvider
		.state({
			name: 'report',
			 url:  '/report',
			templateUrl: 'Assets/partials/report.html'
		})
		.state({
			name: 'employee',
			 url:  '/employee',
			templateUrl: 'Assets/partials/employee.html'
		})
		.state({
			name: 'register',
			 url:  '/register',
			templateUrl: 'Assets/partials/register.html'
		})
		.state({
			name: 'login',
			 url:  '/login',
			templateUrl: 'Assets/partials/landing.html'
		})
		.state({
			name: 'signup',
			 url:  '/signup',
			templateUrl: 'assets/partials/signup.html'
		})
		.state({
			name: 'home',
			url:  '/',
			templateUrl: 'Assets/partials/home.html'
		});
		$urlRouterProvider.otherwise('/');
	}).run(function($state){
        $state.go("/");
	});



})();