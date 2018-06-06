var capturando = "";
function capturar() {
	var alvo;
	alvo = document.getElementById('palavralvo').value;
	if(alvo == ""){
		alert("Você deve inserir uma palavra alvo!");
		document.getElementById('palavralvo').focus();
	}
	else{
		capturando = document.getElementById('textantes').value;
		if(alvo == 'aluno'){
			document.getElementById('textdepois').innerHTML = capturando.replace(alvo, 'estudante');
		}
		else if(alvo == 'bola'){
			document.getElementById('textdepois').innerHTML = capturando.replace(alvo, 'esfera');
		}
		else if(alvo == 'bola'){
			document.getElementById('textdepois').innerHTML = capturando.replace(alvo, 'esfera');
		}
		
	}
      
}

function sintetizarAntes(){ 
	responsiveVoice.setDefaultVoice("Brazilian Portuguese Female");
	responsiveVoice.speak(document.getElementById('textantes').value);
}
function sintetizarDepois(){ 
	responsiveVoice.setDefaultVoice("Brazilian Portuguese Female");
	responsiveVoice.speak(document.getElementById('textdepois').value);
}