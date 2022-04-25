<table width="100%" id="hello1">
    <tbody>
        <tr>
            <td style="width: 612px; height: 792px" align="center">
                <div id="printdiv">
                    <div id="PanelPDF">
                        <table width="100%" cellspacing="10">
                            <tbody>
                                <tr>
                                    <td align="center">
                                        <b><u>APPROVAL DOCUMENT</u></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <img id="Image1" src="<?= base_url(); ?>assets/Images/logo.png" style="width:80px;border-width:0px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <table width="100%" cellspacing="10">
                                            <tbody>
                                                <tr>
                                                    <td align="left">
                                                        <span id="lblProviderName" style="font-weight:bold;"><?=  $basic_detail->site_name ?></span>
                                                    </td>
                                                    <td align="right">
                                                    </td>
                                                    <td align="right">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        <span id="lblProviderAddress" style="font-weight:bold;">3rd Floor, B Wing, Fortune Building,</span>
                                                    </td>
                                                    <td align="right">
                                                    </td>
                                                    <td align="right">&nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        <span id="lblProviderAddress1" style="font-weight:bold;">
                                                          Bandra - Kurla Complex, Mumbai - 400051
                                                           <br><br><br><?= $customer_data->name ?><br>
                                                            <?= $customer_data->mobile ?><br>
                                                            <?= $customer_data->address ?><br>
                                                        </span>
                                                    </td>
                                                    <td align="right">
                                                        <b>CIN<br>PAN<br>GST<br>Phone</b>
                                                    </td>
                                                    <td align="right">
                                                        U72900MH2007PLC234712<br>AABCI6363G<br>27AABCI6363G2ZI<br>
                                                            <?= $basic_detail->contact; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        <span id="lblCustomerName" style="font-weight:bold;"></span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="Label8" style="font-weight:bold;">Document #</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="lblDocumentNo">Relience Jio/2375434</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        <span id="lblCustomerMobile" style="font-weight:bold;"></span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="Label9" style="font-weight:bold;">Proposal #</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="lblProposalNo">Relience Jio/4400434</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        <span id="lblCustomerDistrict" style="font-weight:bold;"> - </span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="Label10" style="font-weight:bold;">Dated</span>
                                                    </td>
                                                    <td align="right">
                                                        <span id="lblDate"><?= date("d M,Y", strtotime($customer_data->apply_date)); ?></span>
                                                        <span id="lblDate"><?= $customer_data->apply_time; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        <span id="lblCustomerState" style="font-weight:bold;"></span>
                                                    </td>
                                                    <td align="right">&nbsp;
                                                    </td>
                                                    <td align="right">&nbsp;
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <b>Dear <?= $customer_data->name ?> <span id="lblCustName"></span>,</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <span id="lblText">Reliance Jio Welcomes you. We are please to inform you that your application for installation of
                                            Reliance Jio Tower has been accepted. The address mentioned by you has been investigation
                                            secretly by the Company team. Given below are the details as captured in the Reliance Jio
                                            Recorded with us. Please go through the carefully and intimate to us immediately, in case of any
                                            disrepancy.
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <table width="100%">
                                            <tbody>
                                                <tr>
                                                    <td style="height: 30px; border: 1px solid #c4c4c4" colspan="2" align="center">
                                                        <b>APPLICATION DETAILS</b>
                                                    </td>
                                                    <td style="height: 30px; border: 1px solid #c4c4c4" colspan="2" align="center">
                                                        <b>JOB APPLICATION DETAILS</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <b>Serial No.</b>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="right">
                                                        <span id="lblSerial">Relience Jio/35077</span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <b>Serial No.</b>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="right">
                                                        <span id="lblSerial1">Relience Jio/35077</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <b>Reference No.</b>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="right">
                                                        <span id="lblRef">Relience Jio/44207</span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <b>Reference No.</b> 
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="right">
                                                        <span id="lblRef1">Relience Jio/44207</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <b>Application No.</b>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="right">
                                                        <span id="lblApp">Relience Jio/66317</span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <b>Application No.</b>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="right">
                                                        <span id="lblApp1">Relience Jio/66317</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <b>Applicant Name</b>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="right">
                                                        <span id="lblApplicantName1"><?= $customer_data->name ?></span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <b>Applicant Name</b>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="right">
                                                        <span id="lblApplicantName2"><?= $customer_data->name ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" align="left">&nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="center">
                                                        <b>APPLICANT ADDRESS</b>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="center">
                                                        <b>SITE NAME</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="center">
                                                        <span id="lblApplicantAddress"></span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="center">
                                                        <span id="lblSiteName"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" align="center">&nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="center">
                                                        <b>APPLICANT BANK DETAILS</b></td>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="center">
                                                        <b>PROPOSED APPLICANT BANK DETAILS</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        Bank Name
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblBankName"></span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        Bank Name
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblBankName0"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        Account Type
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblAccountType"></span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        Account Type
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblAccountType0"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        Branch Address
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblBranchAddress"></span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        Branch Address
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblBranchAddress0"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        Account No.
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblAccountNo"></span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        Account No.
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblAccountNo0"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        IFSC Code
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblIFSCCode"></span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        IFSC Code
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblIFSCCode0"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        Name of Account
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblAccountName"></span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        Name of Account
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" align="left">
                                                        <span id="lblAccountName0"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" align="left">&nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="center">
                                                        <b>Rent &amp; Advance Paid</b>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="center">
                                                        <b>JOB ACCEPTENCE</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="left">
                                                        <b>RENT </b>
                                                        <span id="lblRent">Rs. 35000.00 per month</span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="left">&nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="left">
                                                        <b>ADVANCE </b>
                                                        <span id="lblAdvance">Rs. 1500000.00</span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="left">&nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="left">
                                                        <b>AGREEMENT LETTER NO. </b>
                                                        <span id="lblAgreementLetterNo">Relience Jio/44317</span>
                                                    </td>
                                                    <td style="border: 1px solid #c4c4c4" colspan="2" align="left">&nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 20px" colspan="4" align="right">
                                                        <img id="Image2" src="<?= base_url(); ?>assets/Images/approval.png" style="border-width:0px;"> &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        <b>RENT GRAPH</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        <img id="Chart1" src="<?= base_url(); ?>assets/Images/chart.png" alt="" style="height:200px;width:700px;border-width:0px;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" align="center">&nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        *** THIS IS A COMPUTER GENERATED INVOICE AND DOES NOT REQUIRE SIGNATURE ***
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Enquiry-http://jiotoweronline.co.in
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Cheak your site status-http://jiotoweronline.co.in/Web/check_status
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Submit all docoments on mail-info@jiotoweronline.co.in and pay processing amount.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Site servey (ground fisiablity )done within 7 days.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Pls pay agreement fee which one is mantaion on your site status panel
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Site acquistion
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Civil works
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Foundation design
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Shelters
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Tower
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Electrical installation
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Networking and structured labling
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Fibre optic laying
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Power solution
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Project management
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #c4c4c4" colspan="4" align="center">
                                                        Commissioning
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </td> 
        </tr>
        <tr>
            <td style="height: 50px" align="center">
                <div>

                    <form>
                        <input type="button" id="print_btun" value="Print" onclick="codespeedy1()">
                    </form>

                </div>
            </td>
        </tr>
    </tbody>
</table>
<style>
    @media print {
        #print_btun
        {
            display: none;
        }
    }
</style>
<script type="text/javascript">
        
    function codespeedy1(){
      var print_div = document.getElementById("hello1");
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();
// This is the code print a particular div element
    }
  </script>