$(document).ready(function() {
	i=0;
	fetchJSON();

	createCard(i);

	//JS for magnific popup plugin
	$(".img-popup-link").magnificPopup({type : 'image'});
});


/**
	membuat card list dari form
	data diambil dari input user
**/
function createCard(i){
	$('#btn-submit').click(function() {
		var filename = $('#file-photo').val().replace(/C:\\fakepath\\/i, '');
		var image =
		"<a class='img-popup-link' href = 'img/" + filename + "'>" +
		"<img class='card-img-top' src='img/" + filename  + "' alt='Card image cap'></a>";
			
		var title = "<h3 class='card-title'>" + $('#event-name').val() + "</h3>";
		var subtitle = "<h6 class='card-subtitle text-muted pb-3'>" + $('#event-crreator').val() + "</h6>";
		var content = "<p class='card-text pt-2'>" + $('#deskripsi').val() + "</p>";
					
		var terkumpul = "<li class='list-inline-item text-center card-list-border card-list-footer'>"+
									"<a class='card-list-text'><b>Terkumpul</br></b></a><a class='card-list-subtext'>0</a></li>";
		var tercapai ="<li class='list-inline-item text-center card-list-border card-list-footer'><a class='card-list-text'><b>Tercapai</br></b></a>" + 
								  "<a class='card-list-subtext'>0%</a></li>";
		var hari ="<li class='list-inline-item list-subtext3 text-center card-list-footer'><a class='card-list-text'><b>Sisa Hari</br></b></a>" +
							  "<a class='card-list-subtext'>" + $('#event-time').val() + "</a></li>";

		var cardBody = "<div class='card-body'>" +title+subtitle+content+ "<a href='detail.html' class='event-card-link'></a></div>";
		var cardFooter = "<div><ul class='list-inline'>" +terkumpul+tercapai+hari+"</ul><div>"

		$("#list-event-card").append("<div id='card-containerc" + i + "' class='col-lg-4 col-md-6 col-sm-6 pb-5'></div>");
		$("#card-containerc"+ i.toString()).append("<div id='cardc" +i + "' class='card'></div>");
		$("#cardc"+ i.toString()).append(image, cardBody, cardFooter);
		i++;

		$('#modal').css('display','none');
	});
}



/**
	Mengambil data event dari JSON
	serta membuat card untuk list
**/
function fetchJSON(){
	$.getJSON('data.json', function(data) {
		$.each(data.event, function(i) {
				var image =
				"<a class='img-popup-link' href = '" + this.img + "'>" +
				"<img class='card-img-top' src='" + this.img + "' alt='Card image cap'></a>";
				
				var title = "<h3 class='card-title'>" + this.name + "</h3>";
				var subtitle = "<h6 class='card-subtitle text-muted pb-3'>" + this.creator + "</h6>";
				var content = "<p class='card-text pt-2'>" + this.content + "</p>";
				
				var terkumpul = "<li class='list-inline-item text-center card-list-border card-list-footer'>"+
								"<a class='card-list-text'><b>Terkumpul</br></b></a><a class='card-list-subtext'>" + this.terkumpul + "</a></li>";
				var tercapai ="<li class='list-inline-item text-center card-list-border card-list-footer'><a class='card-list-text'><b>Tercapai</br></b></a>" + 
							  "<a class='card-list-subtext'>" + this.tercapai + "%</a></li>";
				var hari ="<li class='list-inline-item list-subtext3 text-center card-list-footer'><a class='card-list-text'><b>Sisa Hari</br></b></a>" +
						  "<a class='card-list-subtext'>" + this.hari + "</a></li>";

				var cardBody = "<div class='card-body'>" +title+subtitle+content+ "<a href='detail.html' class='event-card-link'></a></div>";
				var cardFooter = "<div><ul class='list-inline'>" +terkumpul+tercapai+hari+"</ul><div>"

				$("#list-event-card").append("<div id='card-container" + i + "' class='col-lg-4 col-md-6 col-sm-6 pb-5'></div>");
				$("#card-container"+ i.toString()).append("<div id='card" +i + "' class='card'></div>");
				$("#card"+ i.toString()).append(image, cardBody, cardFooter);
		});
	});
}