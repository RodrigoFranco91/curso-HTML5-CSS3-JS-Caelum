 var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
 var bannerAtual = 0;
 var controle = document.querySelector("#botao-troca-banner");
 var troca = setInterval(trocaBanner, 4000);
 function trocaBanner(){
	 bannerAtual = (bannerAtual + 1) % 2;
	 document.querySelector(".destaque img").src = banners[bannerAtual];
 }
 
	controle.addEventListener('click', function(){
		if(controle.className == "pause"){
			desativaATroca();
		}
		else{
			ativaATroca();
		}
	}
);

function ativaATroca(){
	troca = setInterval(trocaBanner, 4000);
	controle.className = "pause";
}

function desativaATroca(){
	clearInterval(troca);
	controle.className = "pausado";
}