function HoussamAffiche(method,url,data,zoneAffichage) {
    document.getElementById(zoneAffichage).innerHTML=  "<img src = 'public/images/ajax-loader.gif' />";      //***//

    const xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange  = function()

    { 
         if(xhttp.readyState  == 4)
         {
              if(xhttp.status  == 200) { 
                document.getElementById(zoneAffichage).innerHTML = this.responseText;
              }else 
                 alert ("Error code " + xhttp.status);
         }

    } 


    xhttp.onload = function() {
      document.getElementById(zoneAffichage).innerHTML = this.responseText;
    }



    if (method== "GET"){
        xhttp.open( "GET",url+"?"+data,true);
        xhttp.send();
    }
    else if (method== "POST") {
        xhttp.open("POST", url,true);                               
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send(data);
    }


  }