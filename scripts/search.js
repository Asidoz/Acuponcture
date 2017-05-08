function recherche() {
	var input = $("#search_input");
	var results = $("#search_result");
	
	var liste = "";

	var nbrLettres = (input.val()).length;

	if(nbrLettres == 0) {
		results.css("display","none");
	} else {
		results.css("display","block");
		$.post("../ajax/search.php",
			{
				s:input.val()
			},function(data) {
				var pathos = data.split(" ; ");
				for (var i = 0; i < pathos.length-1; i++) {
					var infos = pathos[i].split(" - ");
					liste += '<a href="'+infos[2]+'" title="'+infos[1]+'">'+infos[1]+'</a><br />';
				}
				results.html(liste);
			}
		);
	}
}