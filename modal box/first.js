'use strict';
window.onload = function(){
	var h = document.getElementById('header');
	console.log(h);
	var arr = h.childNodes;
	console.log(arr);
	for(var i = 1; i<arr.length; i+=2){
		arr[i].onclick = function(){
			document.body.style.background = this.id;
		}
	}

	var button = document.getElementById('but');
	var divv = document.getElementById('div1');
	var but2 = document.getElementById('but2');

	but2.onclick = function(){
		divv.style.top = -160 + 'px';
		but.style.display = 'block';
	}
	but.onclick = function(){

		divv.style.top = 300 + 'px';
		but.style.display = 'none';	
	}
};