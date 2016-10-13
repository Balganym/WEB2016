'use strict';
window.onload = function(){
	console.log('ok');

	var input = document.getElementById('formInput');
	var span = document.getElementById('formInputIcon');

	span.onclick  = function(){

		if(input.type == 'password'){

			input.type = 'text';
		}
		else{

			input.type = 'password';
		}
	}

}