(function() {
    'use strict';

    angular
        .module('app')
        .controller('LoginCtrl', LoginCtrl )

    	function LoginCtrl($scope,$location) {
    			
    		var vm =this;

    		vm.go = function ( path ) {
    			$location.path( path );
    		};
    	}

})();