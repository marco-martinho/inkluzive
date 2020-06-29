function zeit()
{
	var heute = new Date();
	var std = heute.getHours();
	var minute = heute.getMinutes();
	var sek = heute.getSeconds();
	var tag = heute.getDate();
	//--------------------------------------
	if(tag < 10)
	{
		tag = "0"+tag;
	}
	if(std < 10)
	{
		std = "0"+std;
	}
	if(minute < 10)
	{
		minute = "0"+minute;
	}
	if(sek < 10)
	{
		sek = "0"+sek;
	}
	document.getElementById("hour").innerHTML = tag+"/"+
							(heute.getMonth()+1)+"/"+
							heute.getFullYear()+" "+
							"<span>"+std+"</span>:"+
							"<span>"+minute+"</span>:"+
							"<span>"+sek+"</span>";
}//ende Date and Time
setInterval("zeit()",100);



$(document).ready(function(){
	
    //cycleGallery
	$("#gallery1").cycle({
		fx: "wipe",
		pause: true
		
	});	
	
	$("#gallery2").cycle({
		fx: "toss",
		pause: true
		
	});	

	$("#gallery3").cycle({
		fx: "blindY",
		pause: true
		
	});	

		$("#gallery4").cycle({
	    fx: "shuffle",
		shuffle: {top: 60, left: 250}
		
	});
	
		$("#gallery5").cycle({
		fx: "fadeZoom",
		pause: true
		
	});	 
	
	    $("#gallery6").cycle({
	    fx: "curtainY",
		pause: true
	
	});	 

	$("#galleryLG1").cycle({
		
		fx: "turnDown", 
		speed: 1000,
		timeout: 600
    });
	
	$("#galleryLG2").cycle({
		
		fx: "turnDown", 
		speed: 1000,
		timeout: 600
    }); 
	

	$("#gallerypage a").lightBox({
		
	    //Bildtext ändern (Standard Image - 1 of 20)
	    txtImage: "Photo",
	    txtOf: "of",
	    imageBtnClose: "bilder/lightbox-btn-close.gif",
	    imageBtnPrev: "bilder/lightbox-btn-prev.gif",
	    imageBtnNext: "bilder/lightbox-btn-next.gif",
	    overlayBgColor: "#610B21",
	    overlayOpacity: 0.6,
		imageLoading: "bilder/lightbox-ico-loading.gif"
	});	
	
	$("#accordion").accordion({ 
		
		/*
		das aktuell offene panel (index, 0 ist das 1.panel)
		
		heightStyle = höhe des widjets
		auto = Höhe des höchsten panels
		fill = höhe des parent-Containers
		content = individuel (an den Inhalt anpassen)
		
		header = Überschrift von panel
		event = click (default), mouseover
		*/
		active: false,
		heightStyle: "content",
		collapsible: true,
		header: "h2",
		event: "mouseover"
	});	
	

});//ende ready    


	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	//JSON
$(document).ready(function(){
	
	var daten = {
		person1: {
			"tt"  : "CEO",
			"nn"  : "De Oliveira",
			"vn"  : "Marco",
			"tel" : "030606080-1",
			"add" : "Reichenbergerstr. 120",
			"plz" : "10999 Berlin"
		},
		person2: {
			"tt"  : "Project Director",
			"nn"  : "Schafer",
			"vn"  : "John",
			"tel" : "030606080-2",
			"add" : "Reichenbergerstr. 120",
			"plz" : "10999 Berlin" 			
		},
		person3: {
		"tt"  : "Project Manager",
		"nn"  : "Albrecht",
		"vn"  : "Manuel",
		"tel" : "030606080-5",
		"add" : "Reichenbergerstr. 120",
		"plz" : "10999 Berlin"		
		}
	};

	//--------------------------------
	//Daten in box1 anzeigen
	var info = "";
	
	$.each(daten,function(wert1,wert2){
		info += "<p class='werte'>";
		info += wert2.tt+": ";
		info += wert2.vn+"  "+wert2.nn+"<br />";
		info += wert2.tel+"<br />";
		info += wert2.add+"<br />";
		info += wert2.plz;
		info += "</p>";
		
			
	});//ende each
	
	//document.getElementById("box1").innerHTML = info;
	$("#box1").html(info);



});//ende ready  






