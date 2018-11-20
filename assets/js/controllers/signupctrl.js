(function(){
	'use strict'


	angular
	.module('app')
	.controller('SignupCtrl' , SignupCtrl)


	function SignupCtrl($scope,$location){

		var vm = this;

		vm.go = function ( path ) {
    			$location.path( path );
    		};
	}

})();