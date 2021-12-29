var ikona = "";
var query = "SELECT * FROM obrazki join uzytkownicy using(id_uzytkownika) join obrazek_kategorie USING(id_obrazka) join kategorie USING(id_kategorii) order by data_wygasniecia";
//console.log(query);
document.onload = new function () {
	function show(query)
	{
	$.ajax({
		type: "POST",
		url: "show.php",
		data: { id: query },
		dataType: "json",
		success: function (data) {
			var tab = JSON.parse(JSON.stringify(data));
			//console.log(tab);
			let ikona="";
			let ik=[];
			for (var i = 0; i < tab.length-1; i++) 
			{
				console.log(tab[i].nazwa_kategorii);
				if(tab[i].id_obrazka == tab[i+1].id_obrazka)
				{
					ik.push(tab[i].nazwa_kategorii);
				}else
				{
					ik.push(tab[i].nazwa_kategorii);
					console.log(ik);
					ikona = ikona + '<div class="szot"><div class="szot__nick szot--text">#' + tab[i].login +'</div><div class="szot__tags horizontal-container">';
					for(var x = 0; x<ik.length; x++)
					{
						ikona = ikona + '<div class="szot__tag szot--text">#'+ik[x]+'</div>';
					}

					ikona = ikona + '</div><img src="'+tab[i].obrazek+'"><div class="szot__title">'+tab[i].tytul+'</div><div class="szot__desc">'+tab[i].opis+'</div><div class="szot__like_plus horizontal-container"><form><input type="submit" value="" class="plus_btn"></form>22</div><div class="szot__time">Ważny do: 21'+ tab[i].data_wygasniecia+'</div></div>';
					ik=[];
				}
				
			}
		

			//for (var i = 0; i < tab.length; i++) 
			//{
		//		ikona = ikona + '<div class="szot"><div class="szot__nick szot--text">#' + tab[i].login +'</div><div class="szot__tags horizontal-container"><div class="szot__tag szot--text">#'+tab[i].nazwa_kategorii+'</div></div><img src="'+tab[i].obrazek+'"><div class="szot__title">'+tab[i].tytul+'</div><div class="szot__desc">'+tab[i].opis+'</div><div class="szot__like_plus horizontal-container"><div class="plus_btn"></div>22</div><div class="szot__time">Ważny do: 21'+ tab[i].data_wygasniecia+'</div></div>';
	///		}

			document.getElementById("szot_hook").innerHTML = ikona;
		}
		
	});
	}

	show(query);

	$(document).ready(function() {
		$("#author_search").click(function() {
			var name = document.getElementById("author_name").value;
			query = "SELECT * FROM obrazki join uzytkownicy using(id_uzytkownika) join obrazek_kategorie USING(id_obrazka) join kategorie USING(id_kategorii) where login = '"+name+"' order by data_wygasniecia";
			console.log(query);
			show(query);
		});

		$("#category_search").click(function() {
			var chceck_przygodowa = document.getElementById("chceck-smieszne");
			var chceck_kryminal = document.getElementById("chceck-krajobraz");
			var chceck_akcji = document.getElementById("chceck-sztuka");
	
			query = "SELECT * FROM obrazki join uzytkownicy using(id_uzytkownika) join obrazek_kategorie USING(id_obrazka) join kategorie USING(id_kategorii)";
			var ifchceck=0;
			if (chceck_przygodowa.checked == true)
			{
				query += "WHERE (id_kategorii = 1";
				ifchceck =1;
			}
			if (chceck_kryminal.checked == true)
			{
				if(ifchceck==1)
				{
					query += " OR id_kategorii = 2";
				}else
				{
					query += "WHERE (id_kategorii = 2";
					ifchceck=1;
				}
			}
			if (chceck_akcji.checked == true)
			{
				if(ifchceck==1)
				{
					query += " OR id_kategorii = 3";
				}else
				{
					query += "WHERE (id_kategorii = 3";
					ifchceck=1;
				}
			}
			if(ifchceck==1)
			query+=")";
	
	
			endofquery = "order by data_wygasniecia;";
			fullquery = query + endofquery;
			console.log(fullquery);
			show(fullquery);		
		});
	})
}

