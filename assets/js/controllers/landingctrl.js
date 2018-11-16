(function(){
	'use strict'


	angular
	.module('app')
	.controller('LandingCtrl' , LandingCtrl)

	function LandingCtrl($scope,$location){

		var vm = this;

		vm.go = function ( path ) {
    			$location.path( path );
    		};
	}

})();