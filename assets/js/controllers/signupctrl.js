(function(){
	'use strict'

	angular
	.module('app')
	.controller('SignupCtrl' , SignupCtrl)

	function SignupCtrl($scope){
		var vm = this;

		vm.displayMsg = true;
		vm.msg = "No file selected. Please select file to upload";
		

		vm.selectFile = function(file){
			vm.fileList = file;
			console.log(vm.fileList);
			vm.displayMsg = false;
			
		};
		
	}
})();