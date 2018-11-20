(function(){
	'use strict'


	angular
	.module('app')
	.controller('RegisterCtrl' , RegisterCtrl)

	function RegisterCtrl($scope){

		var vm = this;

		$(document).ready(function(){
			$('#time').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});

		$(document).ready(function(){
			$('#time2').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});

		$(document).ready(function(){
			$('#time3').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});
		
		$(document).ready(function(){
			$('#time4').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});

		$(document).ready(function(){
			$('#time5').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});

		$(document).ready(function(){
			$('#time6').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});

		$(document).ready(function(){
			$('#time7').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});

		$(document).ready(function(){
			$('#time8').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});

		$(document).ready(function(){
			$('#time9').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});

		$(document).ready(function(){
			$('#time10').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});

		$(document).ready(function(){
			$('#time11').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});

		$(document).ready(function(){
			$('#time12').timepicker({
				timeFormat: 'h:mm:ss p'
			});
		});

	}

	

})();