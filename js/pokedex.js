$(function () {
    $.ajax({
        "url": "../lib/pokemons.json",
        "type": "GET",
        "datatype": "JSON",
        success: function (pokemons) {
            var pokeImgUrl = 'http://img.pokemondb.net/artwork/';
            var affiche = '';
            for (var i in pokemons) {
                affiche += pokemons[i].name;
                affiche += "<br>";
                affiche += "<img src='"+pokeImgUrl+pokemons[i].name.toLowerCase()+".jpg'>";
                affiche += "<br>";
                affiche += "<hr>";
            }

            $("body").append(affiche);
        }
    })
});
