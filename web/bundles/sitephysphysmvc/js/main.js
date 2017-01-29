
function initTab(){
	$("#tabs-container").hide();
}

function showTab(e){
	e.preventDefault();
	var linkedTab = $(this).attr("href");
	$("#tabs-nav a").removeClass("selected");
	$(this).addClass("selected");
	$("#tabs-container article").hide();
	$(linkedTab).removeClass("fontarticleini");
	$(linkedTab).addClass("fontarticle");
	$(linkedTab).show();
}
$("#tabs-nav a").on("click", showTab);
// $("#tabs-container article:nth-child(1n+2)").hide();


function preloader() 
{
     var i = 0;
     imageObj = new Image();
     images = new Array();
     images[0]="bundles/sitephysphysmvc/images/schemaphysmvcsimple1.png";
     images[1]="bundles/sitephysphysmvc/images/schemaphysmvcsimple2.png";
     images[2]="bundles/sitephysphysmvc/images/schemaphysmvcsimple3.png";
     images[3]="bundles/sitephysphysmvc/images/schemaphysmvcsimple4.png";
     images[4]="bundles/sitephysphysmvc/images/schemaphysmvcsimple5.png";
     images[5]="bundles/sitephysphysmvc/images/schemaphysmvcsimple6.png";
     
     for(i=0; i<=5; i++) 
     {
          imageObj.src=images[i];
     }
} 


//validation du formulaire
function validateNewsletterForm(e){
	//empêche la soumission du formulaire
	e.preventDefault();
	//vide les éventuelles erreurs
	$("#newsletter-email-error").empty();

	//récupère la valeur inscrite dans le champs, en enlevant les espaces blancs au début et à la fin
	var emailVal = $("#email-input").val().trim();

	//si c'est vide
	if (emailVal == ""){
		//injecte une erreur dans l'élément
		$("#newsletter-email-error").html("Veuillez fournir un email !");
	}
	//si ça ne correspond pas à cette regexp
	else if(!/^[a-z0-9.-]+@[a-z0-9.-]+\.[a-z]{2,25}$/.test(emailVal)){
		$("#newsletter-email-error").html("Email invalide !");
	}

	//si le champ comportant les erreurs est toujours vide...
	//c'est que c'est valide !
	if ($("#newsletter-email-error").html() == ""){
		//enlève l'event listener 
		$("#newsletter-form").off("submit");
		//resoumet le formulaire
		$("#newsletter-form").submit();
	}
}
//met sous écoute la soumission du formulaire, pour déclencher la validation
$("#newsletter-form").on("submit", validateNewsletterForm);