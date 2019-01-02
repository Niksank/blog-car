//QUAND ON CLIQUE SUR l'Image Ajout Util cela cache la div des image pour afficher la div requete
		document.querySelector("#Bouton").onclick = function() 
		
		{
			
			if (window.getComputedStyle(document.querySelector('.requete')).display=='none'){
				document.querySelector(".requete").style.display="block";
				document.querySelector("main").style.display="none";
			} 
			
			else {
				document.querySelector(".requete").style.display="none";
				document.querySelector("main").style.display="block";
				}	
		}
		
		//QUAND ON CLIQUE SUR le bouton retour cela cache la div requete pour afficher la div image
		document.querySelector("#BoutonRetour").onclick = function() {
			if (window.getComputedStyle(document.querySelector('.requete')).display=='block'){
				document.querySelector(".requete").style.display="none";
				document.querySelector("main").style.display="block";
				} 
		}
		
	// /////////////////////////////////// SUPPR UTIL ///////////////////////////////////////////////////////////// 
		
		//QUAND ON CLIQUE SUR l'Image SUPPR Util cela cache la div des image pour afficher la div requete
		document.querySelector("#Bouton2").onclick = function() {
			
			if (window.getComputedStyle(document.querySelector('.supprimer')).display=='none'){
				document.querySelector(".supprimer").style.display="block";
				document.querySelector("main").style.display="none";
			} 
			
			else {
				document.querySelector(".supprimer").style.display="none";
				document.querySelector("main").style.display="block";
				}	
		}
		
		//QUAND ON CLIQUE SUR le bouton retour cela cache la div requete pour afficher la div image
		document.querySelector("#BoutonRetour").onclick = function() {
			if (window.getComputedStyle(document.querySelector('.supprimer')).display=='block'){
				document.querySelector(".supprimer").style.display="none";
				document.querySelector("main").style.display="block";
				} 
		}
		
		// //////////////////////////////// AJOUT PLAQUE  ////////////////////////////////////////////////////////// 
		
		//QUAND ON CLIQUE SUR l'Image Ajout plaque cela cache la div des image pour afficher la div requete
		document.querySelector("#Bouton_ajout_plaque").onclick = function() {
			
			if (window.getComputedStyle(document.querySelector('.ajout_plaque')).display=='none'){
				document.querySelector(".ajout_plaque").style.display="block";
				document.querySelector("main").style.display="none";
			} 
			
			else {
				document.querySelector(".ajout_plaque").style.display="none";
				document.querySelector("main").style.display="block";
				}	
		}
		
		//QUAND ON CLIQUE SUR le bouton retour cela cache la div requete pour afficher la div image
		document.querySelector("#BoutonRetour").onclick = function() {
			if (window.getComputedStyle(document.querySelector('.ajout_plaque')).display=='block'){
				document.querySelector(".ajout_plaque").style.display="none";
				document.querySelector("main").style.display="block";
				} 
		}
		
		
		// //////////////////////////////// SUPPR PLAQUE  ////////////////////////////////////////////////////////// 
		
		//QUAND ON CLIQUE SUR l'Image SUPPR plaque cela cache la div des image pour afficher la div requete
		document.querySelector("#Bouton_suppr_plaque").onclick = function() {
			
			if (window.getComputedStyle(document.querySelector('.supprimer_plaque')).display=='none'){
				document.querySelector(".supprimer_plaque").style.display="block";
				document.querySelector("main").style.display="none";
			} 
			
			else {
				document.querySelector(".supprimer_plaque").style.display="none";
				document.querySelector("main").style.display="block";
				}	
		}
		
		//QUAND ON CLIQUE SUR le bouton retour cela cache la div requete pour afficher la div image
		document.querySelector("#BoutonRetour").onclick = function() {
			if (window.getComputedStyle(document.querySelector('.supprimer_plaque')).display=='block'){
				document.querySelector(".supprimer_plaque").style.display="none";
				document.querySelector("main").style.display="block";
				} 
		}
		
		
		// //////////////////////////////// SUPPR PLAQUE  ////////////////////////////////////////////////////////// 
		
		//QUAND ON CLIQUE SUR l'Image SUPPR plaque cela cache la div des image pour afficher la div requete
		document.querySelector("#Bouton_importer_csv").onclick = function() {
			
			if (window.getComputedStyle(document.querySelector('.importer_csv')).display=='none'){
				document.querySelector(".importer_csv").style.display="block";
				document.querySelector("main").style.display="none";
			} 
			
			else {
				document.querySelector(".importer_csv").style.display="none";
				document.querySelector("main").style.display="block";
				}	
		}
		
		//QUAND ON CLIQUE SUR le bouton retour cela cache la div requete pour afficher la div image
		document.querySelector("#BoutonRetour").onclick = function() {
			if (window.getComputedStyle(document.querySelector('.importer_csv')).display=='block'){
				document.querySelector(".importer_csv").style.display="none";
				document.querySelector("main").style.display="block";
				} 
		}
		
		// //////////////////////////////// INTERDIRE PLAQUE  ////////////////////////////////////////////////////////// 
		
		//QUAND ON CLIQUE SUR l'Image SUPPR plaque cela cache la div des image pour afficher la div requete
		document.querySelector("#Bouton_interdire_plaque").onclick = function() {
			
			if (window.getComputedStyle(document.querySelector('.interdire_plaque')).display=='none'){
				document.querySelector(".interdire_plaque").style.display="block";
				document.querySelector("main").style.display="none";
			} 
			
			else {
				document.querySelector(".interdire_plaque").style.display="none";
				document.querySelector("main").style.display="block";
				}	
		}
		
		//QUAND ON CLIQUE SUR le bouton retour cela cache la div requete pour afficher la div image
		document.querySelector("#BoutonRetour").onclick = function() {
			if (window.getComputedStyle(document.querySelector('.interdire_plaque')).display=='block'){
				document.querySelector(".interdire_plaque").style.display="none";
				document.querySelector("main").style.display="block";
				} 
		}
		
		
		
		// //////////////////////////////// Voir log  ////////////////////////////////////////////////////////// 
		
		//QUAND ON CLIQUE SUR l'Image Voir logs cela cache la div des image pour afficher la div requete
		document.querySelector("#Bouton_voir_log").onclick = function() {
			
			if (window.getComputedStyle(document.querySelector('.voir_log')).display=='none'){
				document.querySelector(".voir_log").style.display="block";
				document.querySelector("main").style.display="none";
			} 
			
			else {
				document.querySelector(".voir_log").style.display="none";
				document.querySelector("main").style.display="block";
				}	
		}
		
		//QUAND ON CLIQUE SUR le bouton retour cela cache la div requete pour afficher la div image
		document.querySelector("#BoutonRetour55").onclick = function() {
			if (window.getComputedStyle(document.querySelector('.voir_log')).display=='block'){
				document.querySelector(".voir_log").style.display="none";
				document.querySelector("main").style.display="block";
				} 
		}
		
		
		///////////////// BOUTON RETOUR POUR CAMERA //////////////////////
		