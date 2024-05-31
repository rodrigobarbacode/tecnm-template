var capas = ["NMS", "NS"]; 
	function mostrar(capa) { 
		for (i = 0, total = capas.length; i < total; i ++) 
		document.getElementById(capas[i]).style.display = (capas[i] == capa) ? "block":"none"; 
	}

function recargar(obj){
   
	document.getElementById('mapbusca').style.display="block";
	document.getElementById('map').style.display="none";
	if(obj.id=='CECyT 1'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.7390990152167!2d-99.09301028555393!3d19.466812386864937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fbdb373b1425%3A0xec874bd4180cfa44!2sCECyT+1+Gonzalo+V%C3%A1zquez+Vela!5e0!3m2!1sen!2smx!4v1516315739223";	
	}
	if(obj.id=='CECyT 2'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.098381082614!2d-99.21521718555418!3d19.451324686873612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2023fc381d09f%3A0x75e119f8d7dfc312!2sCECyT+2+Miguel+Bernard+Perales!5e0!3m2!1sen!2smx!4v1516316315876";	
	}
	if(obj.id=='CECyT 3'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.30977950206!2d-99.02141618555201!3d19.571224786805722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f02f2509ccbd%3A0xf0e8224c80f4ee7c!2sCECyT+3+%22ESTANISLAO+RAMIREZ+RUIZ%22!5e0!3m2!1sen!2smx!4v1516316386652";	
	}
	if(obj.id=='CECyT 4'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.350265563637!2d-99.21667148555522!3d19.39726638690442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201b8f05f5dc3%3A0x5eb9ba560d4e9213!2sCECyT+4+L%C3%A1zaro+C%C3%A1rdenas!5e0!3m2!1sen!2smx!4v1516316528999";	
	}
	if(obj.id=='CECyT 5'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5605377256343!2d-99.15242398555455!3d19.431384886885024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff2b6e0540e3%3A0x73e89933939aab17!2sCentro+de+Estudios+Cient%C3%ADficos+y+Tecnol%C3%B3gicos+5+Benito+Ju%C3%A1rez!5e0!3m2!1sen!2smx!4v1516316762232";	
	}
	if(obj.id=='CECyT 6'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.714362267313!2d-99.16108488555393!3d19.46787828686428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8f02004cadb%3A0xd0d73dd0768f47b5!2sCECYT+6+Miguel+Oth%C3%B3n+de+Mendizabal!5e0!3m2!1sen!2smx!4v1516317209742";	
	}
	if(obj.id=='CECyT 7'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.544843000805!2d-99.02924168555614!3d19.34554728693379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fd586196a101%3A0xb960e4d31b06396e!2sCECYT+N.7+%22Cuauht%C3%A9moc%22!5e0!3m2!1sen!2smx!4v1516317284253";	
	}
	if(obj.id=='CECyT 8'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.266255518949!2d-99.17667248555352!3d19.48717738685335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8644b770315%3A0x91cc6de15f5a7b2f!2sIPN-Centro+de+Estudios+Cient%C3%ADficos+y+Tecnol%C3%B3gicos+No.+8+Narciso+Bassols!5e0!3m2!1sen!2smx!4v1516317413285";	
	}
	if(obj.id=='CECyT 9'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.047793821886!2d-99.17748638555415!3d19.453506086872483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8bd9777a765%3A0x57501a5479751d18!2sCECyT+9+Juan+de+Dios+Batiz!5e0!3m2!1sen!2smx!4v1516317480324";	
	}
	if(obj.id=='CECyT 10'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.033217723614!2d-99.08245188555414!3d19.454134586872122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fbeb5dc1a4df%3A0x6e3f80fcb8450804!2sCentro+de+Estudios+Cient%C3%ADficos+y+Tecnol%C3%B3gicos+10+Carlos+Vallejo+M%C3%A1rquez!5e0!3m2!1sen!2smx!4v1516317578428";	
	}
	if(obj.id=='CECyT 11'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.040054747!2d-99.16786188555415!3d19.45383978687227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8c0485ddcef%3A0x8284c3cef93733ae!2sCentro+de+Estudios+Cient%C3%ADficos+y+Tecnol%C3%B3gicos+No.11+Wilfrido+Massieu!5e0!3m2!1sen!2smx!4v1516317678673";	
	}
	if(obj.id=='CECyT 12'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.8325433897085!2d-99.15440228555397!3d19.462785386867182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8e41a158e5d%3A0x562515911255e28!2zQ0VDeVQgMTIgIkpvc8OpIE1hcsOtYSBNb3JlbG9zIg!5e0!3m2!1sen!2smx!4v1516317786993";	
	}
	if(obj.id=='CECyT 13'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.6602435823925!2d-99.13121568555623!3d19.340543986936655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fe274ca24ac1%3A0x3acd2890a5365a7a!2sCECyT+13+%22Ricardo+Flores+Magon%22!5e0!3m2!1sen!2smx!4v1516317861384";	
	}
	if(obj.id=='CECyT 14'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.1989202304185!2d-99.11734558555435!3d19.446988586876152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f945780d3bb9%3A0xc8ae18bc4414d38a!2sLuis+Enrique+Erro+No.14+CECyT!5e0!3m2!1sen!2smx!4v1516317977344";	
	}
	if(obj.id=='CECyT 15'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3218.089179180296!2d-98.99757!3d19.2217695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1b3c000ba467%3A0x881307d3a341da19!2sCenter+for+Science+and+Technology+Studies+No.15!5e1!3m2!1sen!2smx!4v1516318746973";	
	}
	if(obj.id=='CECyT 16'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.7952919357945!2d-98.84802818554174!3d20.11227858650187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1755712bd645f%3A0xe26ecc2e057477!2sCECyT+16+%22HIDALGO%22!5e0!3m2!1sen!2smx!4v1516318815923";	
	}
	if(obj.id=='CECyT 17'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.4290251008824!2d-101.73793568552179!3d21.135318085940742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bc0bd29ea405b%3A0x3a9d60d7b222d0e3!2sNational+Polytechnic+Institute+CECyT+17!5e0!3m2!1sen!2smx!4v1516318963393";	
	}
	if(obj.id=='CECyT 18'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.4971425799245!2d-102.6187097854875!3d22.7840356850744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824dfe0d97040d%3A0x122d4de38c3830d3!2sCECyT+18+-+IPN!5e0!3m2!1sen!2smx!4v1516319075936";	
	}
	if(obj.id=='CET 1'){
		document.getElementById("framerecargar").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.016108494267!2d-99.06356448555412!3d19.45487228687166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fb9ea72fcc21%3A0x64d94c6a91838a36!2sCET+1+%22Walter+Cross+Buchanan%22!5e0!3m2!1sen!2smx!4v1516319126055";	
	}
  	
 }
	  		