<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
body{
color:#00205f;
padding-left:50px;

}
.admission{
border red solid;
}

.pic{
align:center;
width:700px;
}
</style>

</head>
<body>
<span class="pic"><img src="https://i.imgur.com/O3XVpoG.png" style="align:center; width:700px;"></span>

<header>
</header><br>
<center><strong><p><span class="admission">FICHE D’ADMISSION</span></p></strong></center><br>
 <br>Année Universitaire
      <input type="date" name="date" value=""><br>
      <br>
     &nbsp;&nbsp;&nbsp; 1 ère année
      <input type="checkbox" id="subscribeNews" name="subscribe1" value="1 ère année">
     &nbsp;&nbsp;&nbsp; 2 ème année
      <input type="checkbox" id="subscribeNews" name="subscribe2" value="2 ème année">
      &nbsp;&nbsp;&nbsp;3 ème année
      <input type="checkbox" id="subscribeNews" name="subscribe3" value="3 ème année">
      &nbsp;&nbsp;&nbsp;4 ème année
      <input type="checkbox" id="subscribeNews" name="subscribe4" value="4 ème année">
     &nbsp;&nbsp;&nbsp; 5 ème année
      <input type="checkbox" id="subscribeNews" name="subscribe5" value="5 ème année"><br>
      
<br><form name="inscription" method="post" action="generate.php">
      
      Filière
      <input type="text" name="filier" value=""><br>
      <br>Etablissement
      <input type="text" name="Etablissement" value=""><br>
      <br><input type="radio" name="civilite1">Bourcier &nbsp;&nbsp;&nbsp;
      <input type="radio" name="civilite2"> Non Bourcier
   <fieldset>
      <legend><h3>ESPACE RESERVE A L’ETUDIANT(E) OU STAGIAIRE</h3></legend>
      <br>
      Nom 
      <input type="text" name="last_name" value=""><br>
      <br>prénom
      <input type="text" name="first_name" value=""><br>
      <br>Date et lieu de naissance
      <input type="text" name="login" value=""><br>
      <br>Adresse
      <input type="text" name="login" value=""><br>
      <br>Code postal&nbsp;
      <input type="text" name="login" value="">&nbsp; &nbsp;
       Ville&nbsp;
      <input type="text" name="login" value="">&nbsp;&nbsp;
       Pays
      <input type="text" name="login" value=""><br>
      <br>Telephone 
      <input type="text" name="login" value="">&nbsp;&nbsp;
       GSM
      <input type="text" name="login" value="">&nbsp;&nbsp;<br>
      <br>Email
      <input type="email" name="email" value=""><br>
      <br>Série du baccalauréat
      <input type="text" name="login" value=""><br>
      
   </fieldset>
</form>
<form name="inscription" method="post" action="">
   <fieldset>
      <legend><h3>ESPACE RESERVE AU PARENT(S) OU TUTEUR(S)</h3></legend>
      Nom 
      <input type="text" name="last_name" value=""><br>
      <br>prénom
      <input type="text" name="first_name" value=""><br>
      <br>Profession
      <input type="text" name="login" value=""><br>
      <br>Nationalité
      <input type="text" name="login" value=""> &nbsp; &nbsp;

     N° CNI ou Passeport
      <input type="text" name="login" value=""><br>
      <br>Adresse
      <input type="text" name="login" value=""><br>
      <br>Code postal&nbsp;
      <input type="text" name="login" value="">&nbsp; &nbsp;
       Ville&nbsp;
      <input type="text" name="login" value="">&nbsp; &nbsp;
       Pays
      <input type="text" name="login" value=""><br>
      <br>Telephone 
      <input type="text" name="login" value="">&nbsp; &nbsp;
       GSM
      <input type="text" name="login" value="">&nbsp; &nbsp;<br>
      <br>Email
      <input type="email" name="email" value=""><br>
      <p>Vous etes ?
     <center>   Père
      <input type="checkbox" id="subscribeNews" name="subscribe" value="1 ère année">&nbsp; &nbsp;&nbsp; 
      Mère
      <input type="checkbox" id="subscribeNews" name="subscribe" value="2 ème année">&nbsp; &nbsp;&nbsp; &nbsp;
      Tuteur
      <input type="checkbox" id="subscribeNews" name="subscribe" value="3 ème année">&nbsp; &nbsp;&nbsp; &nbsp;</center>
   </fieldset>
</form>
<table class="table">
  <thead>
      <th scope="col">Par votre signature, vous acceptez de régler les frais de service de L’Etudiant Consulting s’élevant à 250€ (Euros) pour le traitement de votre dossier, votre accueille à l’aéroport de Casablanca, la réservation de votre chambre ainsi que votre accompagnement tout au long de l’année.</th>
    </tr>
  </thead>
  </table>
  <br><hr color="bue"><br>
  <table border="1" width="100%" cellspacing="0" cellpadding="6">
   <caption></caption>
   <thead>
      <tr>
         <th width="100%"><h3>DOCUMENT ET PIECES A FOURNIR</h3></th>  
      </tr>
   </thead>
   <tbody>
      <tr>
         <td width="100%">Original + copie conforme de l’attestation de réussite au baccalauréat</td>
       
      </tr>
      <tr>
         <td width="100%">2 Photocopies certifiées conformes du diplôme obtenu (Année de réussite)</td>
        
      </tr>
      <tr>
         <td width="100%">2 Photocopies certifiées conformes des bulletins de notes des deux dernières années d’études</td>
         
      </tr>
       <tr>
         <td width="100%">1 Extrait d’acte de naissance original + copie conforme</td>
         
      </tr> <tr>
         <td width="100%">1 Photocopie du passeport et de la CNI</td>
         
      </tr>
      <tr>
         <td width="100%">4 Photos d’identité</td>
         
      </tr>
      <tr>
         <td width="100%">1 Extrait du casier judicaire</td>
         
      </tr>
       <tr>
         <td width="100%">Billet d’avion + Autorisation de voyage délivré par l’ambassade du Maroc + carnet de vaccination voyage obligatoire</td>
         
      </tr>
   </tbody>
   </table>
   <br> <br>
    <table border="1" width="100%" cellspacing="0" cellpadding="6">
   <caption></caption>
        <form name="inscription" method="post" action="">
   <fieldset>
      <legend><h3>ESPACE RESERVE A L’ETUDIANT(E) OU STAGIAIRE</h3></legend>
      
      Montant annuel 
      <input type="text" name="nom" value=""><br>
      Frais d’inscriptions 
      <input type="text" name="email" value=""><br>
      
   </fieldset>
</form>
       
      </tr>
      <tr>
      
        <form name="inscription" method="post" action="">
   <fieldset>
      
     
Observation
<textarea id="story" name="story"
          rows="5" cols="70%">

</textarea>

         
      </tr>
   </tbody>
</table>
<p> Je m’engage sur l’honneur à me soumettre au règlement intérieur de 
<textarea id="story" name="story"
          rows="1" cols="70%">
          </textarea>
        <p>  à assumer toutes les dispositions pouvant être prises à mon égard en cas de non-respect du règlement.<p>
        <br>
        <p><strong>N.B:</strong> Les frais de services de L’Etudiant Consulting ne sont pas remboursables en cas d’abandon de dossier où de changement de procédure. Une fois les 200 Euros versé, ils font intégralement partie de la comptabilité de LEC.</p>
        <table border="1" width="100%" cellspacing="0" cellpadding="6">
   <caption></caption>
   <thead>
         <th width="100%">MODE DE PAYEMENT AU PRES DE L’ETABLISSEMENT</th>  
   </thead>
   <tbody>
      <tr>
         <td width="100%">Original + copie conforme de l’attestation de réussite au baccalauréat</td>
       
      </tr>
      <tr>
         <td width="100%"><center><strong>MODE DE PAYEMENT DES FRAIS DE L’ETUDIANT CONSULTING</center></strong></td>
        
      </tr>
      <tr rowspan="5">
         <td width="100%" >

<p>-Par dépôt ou virement bancaire <strong>UBA</strong>                 numéro de compte : <strong>0011665983</strong><br> Nom de compte : <strong>DAGRACA YVAN CHRISTOPHER</strong>
<br><br>
-Vous pouvez choisir de le faire par <strong>MoneyGram</strong>, <strong>Western Union </strong>ou par<strong> Ria transfert</strong>
<br>
Bénéficiaire : L’Etudiant Consulting Adresse : <strong>88 Rue Al hoceima, Fès 30050, Maroc</strong> Nom et prénom(s) : <strong>DAGRACA Yvan Christopher</strong> Tél :<strong> 00212 660-523877 / 00212 627-694932</strong><p></td>
         
      </tr>
       
         </tbody>
         </table>
          <p><strong>Important :</strong> Il est nécessaire de venir au Maroc avec environ <strong>832 Euros </strong>pour la Caution de votre chambre <strong>256€</strong> + Caution d’eau et d’électricité <strong>80€</strong> + Matelas-drap-oreiller <strong>160€ </strong>+ Argent de poche <strong>160€</strong>
          <div class="signature">
          <div class="tabll">
              <table border="1" width="55%" cellspacing="0" cellpadding="6">
   <caption></caption>
   <thead>
      <tr>
         <th width="100%">ESPACE RESERVE AU PARENT OU TUTEUR</th>  
      </tr>
   </thead>
   <tbody>
      <tr>
         <td width="100%"><br><br><center><span class="signature" >Date et signature, précédé de la mention lu et approuvé</span></center><br><br></td>
      </tr>
      </tbody>
      </table>
      </div>
      <div align="right">
     <p> Par votre signature, vous déclarez avoir lu et accepté les Conditions Générales d’admission présentées dans ce document.<p>
     <span class="signature">Signature à venir de L’Etudiant Consulting</span>
     </center><br><br>
     </div>
     </div>
      <table border="1" width="100%" cellspacing="0" cellpadding="6">
   <caption></caption>
   <thead>
      <tr>
         <th width="100%">RESERVE A L’ADMINISTRATION</th>  
      </tr>
   </thead>
   <tbody>
      <tr>
         <td width="100%">
        Dossier complete le &nbsp;
      <input type="date" name="name" value="">
       
      </tr>
      </table>
      <br>
       Inscription effectuée par &nbsp;
      <input type="text" name="text" value=""> &nbsp; &nbsp;  Le &nbsp;
      <input type="date" name="date" value=""> 
      <br>
      <br><br><br><br><br><br><br>
</body>
</html>




