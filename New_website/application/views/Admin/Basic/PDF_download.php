<!-- <pre> -->
<?php 
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];
// var_dump($fontDirs);
// echo FCPATH.'assets\fonts';die;
$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf =  new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'orientation' => 'P',
        ]);

// var_dump($fontData);die;
$mpdf->SetTitle('Approval Letter Of Paisa Bazar 24');
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
    $mpdf->WriteHTML('<!DOCTYPE html><html>
        <head>
        <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
        <style type="text/css">
           
            ol
{
margin:0;padding:0
}

table td,table th
{
padding:0
}

.c1
{
color:#000000;
font-weight:400;
text-decoration:none;
vertical-align:baseline
;font-size:11pt;
font-family:"Arial";
font-style:normal
}

.c3
{
color:#495100;
font-weight:700;
text-decoration:none;
vertical-align:baseline;
font-size:14pt;
font-family:"Arial";
font-style:normal
}
.c8
{
color:#909f00;
font-weight:400;
text-decoration:none;
font-size:9pt;
font-family:"Times New Roman";
font-style:normal
}
.c0
{
padding-top:0pt;
padding-bottom:0pt;
line-height:1.15;
orphans:2;
widows:2;
text-align:left
}

.c13
{
color:#000000;
font-weight:700;
text-decoration:none;
font-size:14pt;
font-family:"Arial";
font-style:normal
}
.c11
{
padding-top:14pt;
padding-bottom:5pt;
line-height:1.15;
page-break-after:avoid;
text-align:left
}

.c10
{
padding-top:14pt;
padding-bottom:5pt;
line-height:1.15;
page-break-after:avoid;
text-align:center
}

.c9
{
padding-top:0pt;
padding-bottom:0pt;
line-height:1.15;
text-align:left
}

.c4
{
padding-top:0pt;
padding-bottom:5pt;
line-height:1.15;
text-align:center
}

.c7
{
padding-top:0pt;
padding-bottom:5pt;
line-height:1.15;
text-align:left
}
.c12
{
background-color:#ffffff;
max-width:468pt;
padding:72pt 72pt 72pt 72pt
}
.c5
{
vertical-align:baseline
}

.c2
{
height:11pt
}

.c6
{
margin-left:360pt
}

.title
{
padding-top:24pt;
color:#000000;
font-weight:700;
font-size:36pt;
padding-bottom:6pt;
font-family:"Arial";
line-height:1.15;
page-break-after:avoid;
orphans:2;
widows:2;
text-align:left
}
.subtitle
{
padding-top:18pt;
color:#666666;
font-size:24pt;
padding-bottom:4pt;
font-family:"Georgia";
line-height:1.15;
page-break-after:avoid;
font-style:italic;
orphans:2;widows:2;
text-align:left
}

li
{
color:#000000;
font-size:11pt;
font-family:"Arial"
}

p
{
margin:0;
color:#000000;
font-size:11pt;
font-family:"Arial"
}

h1
{
padding-top:24pt;
color:#000000;
font-weight:700;
font-size:24pt;
padding-bottom:6pt;
font-family:"Arial";
line-height:1.15;
page-break-after:avoid;
orphans:2;
widows:2;
text-align:left
}

h2
{
padding-top:18pt;
color:#000000;
font-weight:700;
font-size:18pt;
padding-bottom:4pt;
font-family:"Arial";
line-height:1.15;
page-break-after:avoid;
orphans:2;
widows:2;
text-align:left
}

h3
{
padding-top:14pt;
color:#000000;
font-weight:700;
font-size:14pt;
padding-bottom:4pt;
font-family:"Arial";
line-height:1.15;
page-break-after:avoid;
orphans:2;
widows:2;
text-align:left
}

h4
{
padding-top:12pt;
color:#000000;
font-weight:700;
font-size:12pt;
padding-bottom:2pt;
font-family:"Arial";
line-height:1.15;
page-break-after:avoid;
orphans:2;
widows:2;
text-align:left
}

h5
{
padding-top:11pt;
color:#000000;
font-weight:700;
font-size:11pt;
padding-bottom:2pt;
font-family:"Arial";
line-height:1.15;
page-break-after:avoid;
orphans:2;
widows:2;
text-align:left
}

h6
{
padding-top:10pt;
color:#000000;
font-weight:700;
font-size:10pt;
padding-bottom:2pt;
font-family:"Arial";
line-height:1.15;
page-break-after:avoid;
orphans:2;
widows:2;
text-align:left}

            .image_div
            {
                position:absolute;
                left:10px;
                top:0px
            }
            .image_div img
            {
                width:100%;
                height:842px;
            }
        </style>
    </head>
    <body>');
    $mpdf->WriteHTML('<div class="image_div">
                <img src="'. base_url('assets/Banner.png') .'">
            </div>');
    $mpdf->WriteHTML('<div style="position:absolute;top:300px" class="cls_011">
                        <span>Ref:- BFL/OKYC/DO/2019-20/'.$info->id.'</span>
                    </div>');
    $mpdf->WriteHTML(' <div style="position:absolute;right:50px;top:300px" class="cls_011">
                        <span>Date:-'.date('d M,Y',strtotime($info->approve_date)).'</span>
                    </div>');
    $mpdf->WriteHTML(' <div style="position:absolute;top:350px;width:100px" class="cls_011">
                        <span>To,</span>
                    </div>');
    $mpdf->WriteHTML(' <div style="position:absolute;top:370px;left:80px;" class="cls_011">
                        <span>'.$info->fname.' '.$info->lname.'</span>
                    </div>');
    $mpdf->WriteHTML(' <div style="position:absolute;width:250px;top:390px;left:80px;;font-size:16px" class="cls_011">
                        <span>'.$info->address.'</span>
                    </div>');
$mpdf->WriteHTML(' <div style="position:absolute;top:450px;font-size:16px" class="cls_011">
                        <span>Sub: Approval of Loan</span>
                    </div>');
$mpdf->WriteHTML(' <div style="position:absolute;top:480px;font-size:16px" class="cls_011">
                        <span>Respected Sir/Madam,</span>
                    </div>');
$mpdf->WriteHTML(' <div style="position:absolute;top:520px;left:80px;right:60px;font-size:18px" class="cls_011">
                        <span>We are very glad to inform you that in response to your request for a loan in order to meet your financial problems, we have approved your request. You are requested a short term loan, sum of loan amount INR '.$info->final_amount.' for the tenure of '.$info->year.' Years on dated '.date('d M,Y',strtotime($info->approve_date)).'.</span>
                    </div>');
$mpdf->WriteHTML(' <div style="position:absolute;top:650px;left:80px;right:60px;font-size:18px" class="cls_011">
                        <span>The interest rate that you will have to pay on the loan will be 5%. The interest rate has been calculated with the help of standard formula used for calculating an interest rate at the rate of 5%. we hope that this interest rate will be good for you.</span>
                    </div>');
$mpdf->WriteHTML(' <div style="position:absolute;top:780px;left:80px;right:60px;font-size:18px" class="cls_011">
                        <span>You will have to pay the loan back within mentioned Year: The first EMI will be paid after six months from the disbursement, of your loan. You have to make the Subsquent payment are due on the 10th of every month a thereafter.</span>
                    </div>');
    
    $mpdf->WriteHTML('<div style="position:absolute;top:910px;left:80px;width:400px;" class="cls_011">
                        <b>Your Faithfully</b>
                    </div>');
    
    $mpdf->WriteHTML('</body></html>');
    
// $mpdf->WriteHTML('</div>');
// Hindi Font Middle Part
$mpdf->Output($info->fname.$info->lname.'MoneyBazarFinance.pdf', \Mpdf\Output\Destination::DOWNLOAD); // opens in browser
// $mpdf->Output('Bachelor-Master.pdf','F');
// $mpdf->Output();
// redirect(base_url('Admin/Upload_Marksheets/bacholor_master'));
 ?>
