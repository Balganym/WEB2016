'use strict';
window.onload = function(){
	
	var but = document.getElementById('but');
	var divv = document.getElementById('div1');
	var but2 = document.getElementById('but2');
	var cls = document.getElementById('close');
	var cart = document.getElementById('cart');
	var btncart = document.getElementById('btncart');

	but2.onclick = function(){
		divv.style.top = -1200 + 'px';
		but.style.display = 'inline-block';
	}
	but.onclick = function(){

		divv.style.top = 100 + 'px';
		but.style.display = 'none';	
	}
	cls.onclick = function(){

		divv.style.top = -1000 + 'px';
		but.style.display = 'inline-block';
	}
};