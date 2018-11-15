(function(){
	'use strict'

	angular
	.module('app')
	.controller('MainCtrl' , MainCtrl)

	function MainCtrl($scope){
		var vm = this;	

		// var ref = firebase.database().ref().child("data");

		// vm.messages = $firebaseArray(ref)

		// data.$bindTo(vm,"data");

		// vm.addMessage = function(){
		// 	vm.data.$add({
		// 		text: vm.newMessageText
		// 	});
		// };
	}
})();