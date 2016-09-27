<?php

namespace Comunal\Http\Controllers;

use Illuminate\Http\Request;
use HTML2PDF;
use Comunal\Http\Requests;

class PdfController extends Controller
{
    public function invoice() 
    {



// after that, you can use the class like so
/*$html2pdf = new HTML2PDF('P','A4','de',false);
$doc =  \View::make('reporte.constanciaderesidencia')->render();
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($doc,false);
$html2pdf->Output('helloworld.pdf','r');*/

    return view('reporte.constanciaderesidencia');

    }

}
