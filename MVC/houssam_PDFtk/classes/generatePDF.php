<?php
namespace Classes;
use mikehaertl\pdftk\Pdf;

class generatePDF{
    public function generate($data){
        try{
        $filename = 'pdf_' . rand(2000,120000) . '.pdf';
        $pdf = new Pdf('./Fiche_admission_2022.pdf');
        $pdf->fillForm($data)
        ->flatten()
        ->saveAs( './completed/' . $filename);
                        //->send( $filename . '.pdf');

                        return $filename;
   
                  }
                  catch(Exception $e)
                  {
                        return $e->getMessage();
                  }
      

           }
}









?>