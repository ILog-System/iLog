(function(){
	'use strict'


	angular
	.module('app')
	.controller('RegisterCtrl' , RegisterCtrl)

	function RegisterCtrl($scope){

		var vm = this;
		
		
		$('#timepicker1,#timepicker2,#timepicker3,#timepicker4,#timepicker5,#timepicker6,#timepicker7,#timepicker8,#timepicker9,#timepicker10,#timepicker11,#timepicker12').timepicker();
		

	}

	

})();