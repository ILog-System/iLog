(function(){
	'use strict'

	angular
	.module('app',['ui.router','ngFileUpload'])
	.config(function($stateProvider,$urlRouterProvider){
		$stateProvider
		.state({
			name: 'home',
			url: '/home',
			templateUrl: 'assets/html/landing.html'
		})
		.state({
			name: 'signup',
			url: '/signup',
			templateUrl: 'assets/html/signup.html'
		})
		.state({
			name: 'login',
			url: '/login',
			templateUrl: 'assets/html/login.html'
		});

		$urlRouterProvider.otherwise('/');
	})

})();