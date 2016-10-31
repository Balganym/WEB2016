$(document).ready(function(){

	console.log("Dom is ready");

	var a = $('#header')[0];
	var b = $('a');
	b.click(function(event){
		$(this).addClass('bold');
		event.preventDefault();
	});

	var winner = $('#winner');
	winner.hide();
	
	var words = $('p').text().split(' ');
	console.log(words);

	var i = $('input');
	par = words[0].split('');
	console.log(par);
	var allp = words.join(' ').split('');
	console.log(allp);
	i.keypress(function(event){

		var cur = String.fromCharCode(event.which);
		console.log(event.which);
		console.log(String.fromCharCode(event.which));

		if(cur == par[0] || cur == allp[0]){
			
			if(i[0].style.background == "red"){
				i[0].style.background = "green";
				i.val('');
			}
			par.shift();
			allp.shift();
			console.log(par);
			i[0].style.background = "green";
		}
		else{
			if(words.length != 0){
				i.val('');
				i.val(words[0]);
				par = words[0].split('');
				allp = words.join(' ').split('');
				i[0].style.background = "red";
			}	
					
		}
		
		if(par.length == 0){
			words.shift();

			if(words.length!=0){
				par = words[0].split('');

			}
			else{

				console.log("");
				winner.fadeIn('slow');

			}
			
		}

	});
});

