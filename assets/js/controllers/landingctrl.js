(function(){
	'use strict'

	angular
	.module('app')
	.controller('LandingCtrl' , LandingCtrl)

	function LandingCtrl($scope){
		var vm = this;
		
		$('.carousel').carousel({
		interval: 3000
	})
	
	}
})();