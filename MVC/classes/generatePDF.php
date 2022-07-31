<?php
namespace Classes;
use mikehaertl\pdftk\Pdf;

class generatePDF{
    public function generate($data){
        try{
        $filename = 'pdf_' . rand(2000,120000) . '.pdf';
        $pdf = new Pdf('./PDFS/main_template/Fiche_orientation_2022.pdf');
        $pdf->fillForm($data)
        ->flatten()
        ->saveAs( './PDFS/completed/this_year/' . $filename);
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