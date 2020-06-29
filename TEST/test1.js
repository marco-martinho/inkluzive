$(document).ready(function(){
    
    //Bereiche anzeigen und verstecken
	$("#login form").hide();
	
	$("#login img").click(function(){
		
		//$(this).next("form").show();
		//$(this).next("form").fadeToggle();
		//$(this).next("form").animate({"height":"toggle"},700);
		
		//width/height => nimmt nur werten = px, %, em, show, hide, toggle
		$(this).next("form").animate({"width":"toggle"},700);
	});

	    //++++++++++++++++++++++++++++++++++++++++++++
        //Formular1
        $("#form1").validate();
		
		//++++++++++++++++++++++++++++++++++++++++++++
        //Formular2  (this Form has no class or title in html)
		$("#form2").validate({
			/*
			rules: {Feldname: "ValidierungsTyp"},
			messages: {Feldname: "Meldung"}
			*/
			rules: {
				nn: "required",
				vn: "required",
				mail: "required",
				ort: "required",
				plz: "required"
				
			},
			messages: {
			    nn: "Por favor escreva o seu nome!",
				vn: "Por favor escreva o seu pre-nome!",
				mail: "Por favor escreva o seu e-mail!",
				ort: "Por favor escreva a sua morada!",
				plz: "Por favor escreva o seu codigo postal!"				
		    }
			
		});//ende form2
		
        
		//++++++++++++++++++++++++++++++++++++++++++++
		//JSON - ist ein ObjektLiteral, eine Sammlung von Name/Wert-Paaren
		var a = {
			    //Name: Wert
				nname: "Oliveira",
				alter: "39"
		        };
		/*
		alternative in xml:
		<a>
		    <nname>Merkel</nname>
			<alter>39</alter>
		</a>
		*/	
		
	    //Json in html anzeigen (im Bereich id="box1")
		$("#box1").html(a.nname);
		$("#box1").html(a.alter);
	    //++++++++++++++++++++++++++++++++++++++++++++
		var b = {
			    teilnehmer: {nachname: "Venzke", vorname: "David"},
			    alter: 25,
				maennlich: true,
				hobby: ["Wasserski","Tanzen","Lesen","Malern"]
		        };
        

		$("#box2").html(b.teilnehmer.nachname);    
        $("#box2").html(b.hobby);    
		$("#box2").html(b.hobby[1]);    
		$("#box2").html(b.alter); 
        $("#box2").html(b.maennlich);  
        //++++++++++++++++++++++++++++++++++++++++++++
		var daten = {
			        "nName" : "Peters",
					"vName" : "Dennis",
					"Telefon" : "030336699",
					"alter" : "28"
		            };
					
					/*
					    <p>
					        Kontaktdaten<br />
						    Nachname: Peters <br />
						    Vorname: Dennis
					    </p>
					*/
		            var info = "<p class='werte'>Kontaktdaten <br />";
					
					    info += "Nachname: "+daten.nName+"<br />";
					    info += "Vorname: "+daten.vName+"<br />";
						info += "telefonNr.: "+daten.Telefon+"<br />";
						info += "Alter: "+daten.alter+"<br />";
						
					    info += "</p>";
						
                    $("#box2").html(info);
					
					
					//++++++++++++++++++++++++++++++++++++++++++++
					/*
					    <datenkomplex>
						    <teilnehmer>
							    <nachname></nachname>
								<vorname></vorname>
							</teilnehmer>
						    <teilnehmer>
							    <nachname></nachname>
								<vorname></vorname>
							</teilnehmer>							
						</datenkomplex>
					*/
                    //komplexe Struktur in Json
					var datenkomplex = {
						                t1: {
											"nachname" :  "Oliveira",
											"vorname"  :  "Marco",
											"klasse"   :  "webp22"
										},
										
										t2: {
											"nachname" :  "Jalowy",
											"vorname"  :  "Peter",
											"klasse"   :  "webp22"									
										},
										
										t3: {
											"nachname" :  "Soares",
											"vorname"  :  "Manuel",
											"klasse"   :  "webp22"											
										},
										
						                t4: {
											"nachname" :  "Van Dahrlen",
											"vorname"  :  "Horst",
											"klasse"   :  "webp22"											
										}
					                    };
					
					var info2 = "<p class='werte'>";
					
					    info2 += datenkomplex.t4.nachname+"<br />";
						info2 += datenkomplex.t4.vorname+"<br />";
						info2 += datenkomplex.t4.klasse+"<br />";
					
					    info2 +="</p>";
						
						$("#box3").html(info2);
						
					
		//+++++++++++++++++++++++++++++++++++++++++++++++++++++++
        //Alle Werte anzeigen
        /*
		    each() - Funktion
		*/
        var info3 = "";
		$.each(datenkomplex,function(teilnehmer,tinfo){
			
			info3 += "<p class='werte'>";
			info3 += tinfo.nachname+"<br />";
			info3 += tinfo.vorname+"<br />";
			info3 += tinfo.klasse+"<br />";
			
			info3 += "</p>";
			

		});//ende each

		
        $("#box4").html(info3);


					
});//ende ready










































