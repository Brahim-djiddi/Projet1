function utiliserAjax(method,url,data,zoneAffichage)
{ 
  //   alert("something wrong 2");
     

//*******************  afficher une Annimation  ********************************//***//

document.getElementById(zoneAffichage).innerHTML=  "<img src = 'public/images/ajax-loader.gif' />";      //***//

//****************************************************************************//***//


/**************** Cr�er un objet XMLHttpRequest /********************************
/********************************************************************************
*********************************************************************************/
 var xhr; 
    try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
    catch (e) 
    {
        try {   xhr = new ActiveXObject('Microsoft.XMLHTTP');    }
        catch (e2) 
        {
          try {  xhr = new XMLHttpRequest();      }
          catch (e3) {  xhr = false;   }
        }
     }




//*************************** Attendre la r�ception de la r�ponse,
//*************************** quand elle est pr�te (readyState = 4) 
//*************************** et sans erreurs (status = 200), 
//*************************** on consomme le texte re�u (responseText)
//***************************



 
    xhr.onreadystatechange  = function()

    { 
         if(xhr.readyState  == 4)
         {
              if(xhr.status  == 200) { 
				alert(zoneAffichage);	
alert(document.getElementById(zoneAffichage).innerHTML);				
                 document.getElementById(zoneAffichage).innerHTML= xhr.responseText;
				 alert(document.getElementById(zoneAffichage).innerHTML);
              }else 
                 alert ("Error code " + xhr.status);
         }

    } 


/***** Ouverture et envoie de la requ�te  ****/

if (method== "GET"){
	xhr.open( "GET", url + "?" + data, true);
	xhr.send(null);
}
else if (method== "POST") {
	xhr.open("POST", url,  true);                               
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send(data);
}




} 

