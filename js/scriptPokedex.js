function capitalizeFirstLetter(string) {
    return string.charAt(0).toLowerCase() + string.slice(1);
}

$(function(){
	$.ajax({
	    type: "GET",
	    url: "../lib/pokemons.json",
	    dataType: "json",
	    success: function(pokemons){
	    	for(var i in pokemons){
	    		if(typeof pokemons[i] === 'undefined'){
	    			i++;
	    			$('body').append('<div class="pokemonBlock">'+pokemons[i].name+'<br><img src=http://img.pokemondb.net/artwork/'+capitalizeFirstLetter(pokemons[i].name)+'.jpg></div>');
	        		$('div.pokemonBlock').css({
	        			borderBottom:'1px solid black',
	        			textAlign :'center'
	        		});
	    		}else{
	    			$('body').append('<div class="pokemonBlock">'+pokemons[i].name+'<br><img src=http://img.pokemondb.net/artwork/'+capitalizeFirstLetter(pokemons[i].name)+'.jpg></div>');
	        		$('div.pokemonBlock').css({
	        			borderBottom:'1px solid black',
	        			textAlign :'center'
	        		});
	    		}
	    	}
    	}
    });
});