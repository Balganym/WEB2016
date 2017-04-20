'use strict';
window.onload = function(){

	console.log("Dom is ready");

	var plus = document.getElementById('plus');
	var minus = document.getElementById('minus');
	var i = document.getElementById('count');


	var cnt = 0;

	plus.onclick = function(){
		cnt++;
		i.value = cnt;
	}
	minus.onclick = function(){
		if(cnt>0){
			cnt--;
			if(cnt>0)
				i.value = cnt;
			else
				i.value = '';
		}
	}


};