(function(){
	'use strict'

	angular
	.module('app')
	.controller('MainCtrl' , MainCtrl)

	function MainCtrl($scope,$location){

		var vm = this;
		vm.isLogin = false;

		vm.go = function ( path ) {
    			$location.path( path );
    		};
	}




})();