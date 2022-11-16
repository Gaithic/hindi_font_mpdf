<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Elibyy\TCPDF\Facades\TCPDF;
use PDF;
class PdfController extends Controller
{
    // public function index()
    // {
    //     $filename = 'hello_world.pdf';

    //     $data = [
    //         'title' => 'Hello world!'
    //     ];

    //     $view = \View::make('pdf', $data);
    //     $html = $view::render();

    //     // $pdf = new TCPDF;
    //     $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    //     $pdf::SetTitle('Hello World');
    //     $pdf::setFontSubsetting(true);
    //     // $fontname = $pdf::SetFont(public_path().'/font/Devnew.ttf', 'TrueTypeUnicode', '', 96);
    //     // set font
    //     // $pdf::addFont('Hindi serif', '', 12);
    //     // $pdf::SetFont('Devnew', '', 14, '', false);
    //     $pdf::SetFont('freesans', '', 10);
    //     $pdf::AddPage();
    //     $pdf::writeHTMLCell(utf8_encode($html), true, false, true, false, '');
    //     $pdf::Output(public_path($filename), 'F');

    //     return response()::download(public_path($filename));
    // }



//     public function index()
//     {
//         $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// // set document information
// // $pdf::SetCreator(PDF_CREATOR);
// //$pdf::SetAuthor('Nicola Asuni');
// $pdf::SetTitle('FreeOnlineProjects Invoice');
// //$pdf::SetSubject('TCPDF Tutorial');
// //$pdf::SetKeywords('TCPDF, PDF, example, test, guide');

// $pdf::setPrintHeader(false);
// $pdf::setPrintFooter(false);

// // set default monospaced font
// $pdf::SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// // set margins
// $pdf::SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// $pdf::SetHeaderMargin(PDF_MARGIN_HEADER);
// $pdf::SetFooterMargin(PDF_MARGIN_FOOTER);

// // set auto page breaks
// $pdf::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// // set image scale factor
// $pdf::setImageScale(PDF_IMAGE_SCALE_RATIO);

// // set some language-dependent strings (optional)
// if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
// require_once(dirname(__FILE__).'/lang/eng.php');
// $pdf::setLanguageArray($l);
// }

// // ---------------------------------------------------------

// $lg = Array();

// // set some language-dependent strings (optional)
// $pdf::setLanguageArray($lg);

// // ---------------------------------------------------------

// // set font

// // set font

// // add a page
// $pdf::AddPage();

// //$pdf::Write(0, 'Tax Invoice <br/>', '', 0, 'C', true, 0, false, false, 0);

// $pdf::SetFont('freesans', '', 18);

// // -----------------------------------------------------------------------------

// $tbl = <<<EOD

// <table cellspacing="0" cellpadding="1" border="0">
// <tr>
// <td rowspan="" align="center">Tax Invoice<br/>टैक्स इनवॉइस</td>

// </tr>

// </table>
// <table cellspacing="0" cellpadding="1" border="1">
// <tr>
// <td rowspan="" align="right"><img src="http://freeonlineprojects.com/wp-content/themes/freeonlineprojects/images/logo1.png" /><br/>फ्री ऑनलाइन प्रोजेक्ट्स</td>

// </tr>

// </table>
// EOD;

// $pdf::writeHTML($tbl, true, false, false, false, '');

// // -----------------------------------------------------------------------------
// $lg = Array();
// $lg['a_meta_charset'] = 'UTF-8';
// $lg['a_meta_dir'] = 'ltr';
// $lg['a_meta_language'] = 'IN';
// $pdf::setLanguageArray($lg);

// $pname ="XYZ";

// $date = date('d/m/Y');

// $invoice_no = 23343434;

// $po_ref = 45565656;

// $cname = "FreeOnlineprojects";

// $due_date = date('d/m/Y');

// $pdf::SetFont('freeserif', '', 10);

// $tbl = <<<EOD
// <table cellspacing="0" cellpadding="1" border="1">
// <tr>
// <td rowspan="3">Project Name:Free Online Projects</td>
// </tr>

// </table>
// EOD;

// $pdf::writeHTML($tbl, true, false, false, false, '');

// // -----------------------------------------------------------------------------

// $tbl =
// '<table cellspacing="0" cellpadding="1" border="1">

// <tr>
// <td>
// <div style="width:400px;">
// <div style="float:left; font-family:Hindi freeserif;">   शरी  प्रधान कार्यालय का पता <br/>Head Office Address: </div><div style="float:right">
// Free Online Projects, Zubli hills
// P.O.Box:500084,Hyderabad-500956,India.</div>
// </div>
// <br/>
// Tell टेलीफोन : &nbsp;&nbsp; 966112111896<br/>
// FAX फैक्स : &nbsp;&nbsp; 1524515251245<br/>
// Email ईमेल : &nbsp;&nbsp; freeonlineprojectz@gmail.com
// <br/>
// VAT reg वैट रजिस्ट्रेशन नो #: &nbsp;&nbsp; 454545454545
// </td>

// <td>
// <div style="width:400px;">
// <div style="float:left">कंपनी नाम <br/>

// Company Name :</div><div style="float:right">Some Technology for Trading Co.</div>
// </div>
// <br/>
// Bank Name बैंक नाम : &nbsp;&nbsp; ICICI
// <br/>
// Location स्थान : &nbsp;&nbsp; Hyderabad<br/>
// Account अकाउंट : &nbsp;&nbsp; 5657575757<br/>
// IBAN #: &nbsp;&nbsp; IN67676776700787
// </td>
// </tr>
// <tr>

// <td>Issue Date इशू डेट : &nbsp;&nbsp; '.$date.'
// <br/>
// Invoice इनवॉइस : &nbsp;&nbsp; '.$invoice_no.'<br/>
// Po Ref पो रेफ : &nbsp;&nbsp; '.$po_ref.'<br/></td>
// <td>Bill To बिल प्राप्तकर्ता : &nbsp;&nbsp; '.$cname.'
// <br/>
// Due Date देय डेट : &nbsp;&nbsp; '.$due_date.'<br/>
// </td>
// </tr>

// </table>

// <table cellspacing="0" cellpadding="1" border="1">
// <tr>
// <td>SL No.</td>
// <td>Item Description<br/> वस्तु वर्णन</td>
// <td>Quantity <br/>क्वांटिटी </td>
// <td>Unit Price<br/>यूनिट </td>
// <td>Total Price<br/>कुल मूल्य
// </td>
// </tr>';

// $tbl .='<tr>
// <td>Laptop</td>
// <td>HP- 5th Generation</td>
// <td>50000</td>
// <td>4</td>
// <td>200000</td>
// </tr>';

// $s_total = 200000;
// $vat_amount =(12/100)*200000;
// $vat = 12;

// $paid =$vat_amount + $s_total;

// $tbl .='</table>

// <table cellspacing="0" cellpadding="1" border="1">
// <tr>
// <td align="right">Sub Total उप कुल मूल्य: &nbsp;&nbsp;Rs. '.$s_total.'<br/>
// VAT('.$vat.'%) वैट : &nbsp;&nbsp;Rs. '.$vat_amount.'<br/>
// Total with VAT वैट के साथ कुल: &nbsp;&nbsp;Rs.'.$paid.'
// </td>
// </tr>
// </table>
// <table cellspacing="0" cellpadding="1" border="1">
// <tr>
// <td>
// </td>
// </tr>
// </table>

// <table cellspacing="0" cellpadding="1" border="1">
// <tr>
// <td>This is an electronically generated invoice and does not require signature

// </td>
// </tr>
// </table>

// <table cellspacing="0" cellpadding="1" border="1">
// <tr>
// <td>यह एक इलेक्ट्रॉनिक रूप से उत्पन्न चालान है और इसमें हस्ताक्षर की आवश्यकता नहीं है

// </td>
// </tr>
// </table>';

// $pdf::writeHTML($tbl, true, false, false, false, '');

// // -----------------------------------------------------------------------------

// // NON-BREAKING TABLE (nobr="true")

// // -----------------------------------------------------------------------------

// //Close and output PDF document
// $pdf::Output('example_hindi.pdf', 'I');
//     }


    public function index()
    {
        $html = '<table class="table">
        <tr>
            <td><label>  श्री  अथॉरिटी का नाम: <span>*</span></label></td>

        </tr>
        <tr>
            <td><label>  श्री आवेदक का नाम  <span>*</span></label></td>
        </tr>
        <tr>
            <td><label>  श्री आवदेक का पता  : <span>*</span></label></td>

        </tr>
        <tr>
            <td><label> भूखण्ड संख्या : <span>*</span></label></td>

        </tr>
        <tr>
            <td><label> योजना का नाम : <span>*</span></label></td>

        </tr>
        </table>';
        $mpdf = new \Mpdf\Mpdf();

        $mpdf->autoScriptToLang = true;
        $mpdf->baseScript = 1;
        $mpdf->autoVietnamese = true;
        $mpdf->autoArabic = true;

        $mpdf->autoLangToFont = true;

        $mpdf->WriteHTML($html);

        $mpdf->Output();

        exit;
    }
}
