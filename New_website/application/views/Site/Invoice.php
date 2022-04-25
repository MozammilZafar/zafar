<table width="100%" id="hello">
    <tbody>
        <tr>
            <td style="width: 612px; height: 792px" align="center">
                <div id="printdiv">
                    <table style="border: 2px solid #c4c4c4" width="100%">
                        <tbody>
                            <tr>
                                <td style="padding-top: 30px" align="left">
                                    <table style="padding-left: 10px; padding-right: 20px; background: #306FC1" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="padding-left: 10px; font-weight:bold; color: #fff; font-size:medium" align="left">
                                                    <?= $basic_detail->site_name ?>
                                                </td>
                                                <td style="padding-right: 30px; font-weight:bold; color: #fff; font-size:medium" align="right">
                                                    INVOICE
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <table style="padding-left: 20px; padding-right: 20px" width="100%">
                                        <tbody>
                                            <tr>
                                                <td align="left">
                                                    3rd Floor, B Wing, Fortune Building, Bharat Nagar,
                                                </td>
                                                <td rowspan="4" style="padding-right: 10px" align="right">
                                                    <img src="<?= base_url(); ?>assets/Images/logo.png" style="width: 80px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Bandra - Kurla Complex, Mumbai - 400051
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Tel: <?= $basic_detail->contact ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email: <?= $basic_detail->email ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top: 60px" align="left">
                                    <table style="padding-left: 20px; padding-right: 20px" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="width: 40%" align="left">
                                                    Bill To<br> <?= $customer_data->name ?><br>  <?= $customer_data->mobile ?>
                                                    <br> <?= $customer_data->address ?>
                                                    <br>
                                                </td>
                                                <td style="width: 30%" align="right">
                                                    Invoice # <br>CIN<br>PAN<br>GST
                                                </td>
                                                <td style="width: 30%" align="right">
                                                    <span id="lblInvoice">61015<br>U72900MH2007PLC234712<br>AABCI6363G<br>27AABCI6363G2ZI</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%" align="left">
                                                    <span id="lblName"></span>
                                                </td>
                                                <td style="width: 30%" align="right">
                                                    Invoice Date</td>
                                               <!--  <td style="width: 30%" align="right">
                                                    <span id="lblDate"><?= date("d M,Y", strtotime($customer_data->apply_date)); ?></span>
                                                    <span id="lblDate"><?= $customer_data->apply_time; ?></span>
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <td style="width: 40%" align="left">
                                                    <span id="lblMobile"></span>
                                                </td>
                                                <td style="width: 30%" align="right">
                                                    Status
                                                </td>
                                                <td style="width: 30%" align="right">
                                                    <div class="aprove">
                                                        <div style="background:red;padding:10px;">UNPAID</div>
                                                    </div>
                                                    <!--<span style="padding-left: 10px; padding-right: 10px; font-weight: bold; background: red; color: #ffffff">UNPAID</span>-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%" align="left">
                                                    <span id="lblAddress"></span>
                                                </td>
                                                <td style="width: 30%" align="right">
                                                    <!--Due Date-->
                                                </td>
                                                <td style="width: 30%" align="right">
                                                    <!--<span id="lblDueDate">2018-10-04 01:03:10</span>-->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top: 30px" align="left">
                                    <table style="padding-left: 20px; padding-right: 20px" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="width: 80%; height: 30px; border: 1px solid #c4c4c4; background: #F3F3F3" align="center">
                                                    <b>PARTICULARS</b>
                                                </td>
                                                <td style="border: 1px solid #c4c4c4; background: #F3F3F3" align="right">
                                                    <b>AMOUNT</b></td>
                                            </tr>
                                            <tr>
                                                <td style="height: 25px; border: 1px solid #c4c4c4" align="right">
                                                    Tower Registration Processing Charge</td>
                                                <td style="border: 1px solid #c4c4c4" align="right">
                                                    <span id="lblCharge">12130</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 25px; border: 1px solid #c4c4c4" align="right">

                                                </td>
                                                <td style="border: 1px solid #c4c4c4" align="right">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 25px" align="right">
                                                    Sub Total</td>
                                                <td style="border: 1px solid #c4c4c4" align="right">
                                                    <span id="lblSubTotal">12130</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 25px" align="right">
                                                    18% GST for Indian Residents only</td>
                                                <td style="border: 1px solid #c4c4c4" align="right">
                                                    <span id="lblST">2183</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 25px" align="right">
                                                    <b>TOTAL</b></td>
                                                <td style="border: 1px solid #c4c4c4; background: #F3F3F3" align="right">
                                                    <span id="lblTotal" style="font-weight:bold;">14313</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 25px" align="left">
                                                    <span id="lblWord">Rs. fourteen thousand three hundred and thirteen Only</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 20px; padding-top: 10px" align="left">
                                    <b>Terms &amp; Conditions</b>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 20px" align="left">
                                    Pls submit complete installation address <br> 1.Self attested copy of Voter ID <br> 2.Self attested copy of PAN card <br> 3.Self attested passport size photograph (two)<br> 4.Copy of property related documents<br> 5.Two references from your locality (having good goodwill in the society) with full details including contact numbers <br> 6.Copy of bank statement (last six months)<br> 7.A photograph of the space applied for mobile tower installation<br> 8.Processing amount submited within 3 days of invoice.<br> 9.Processing amount and agreement fee is refundable within 21 days<br> 10.Site servey (ground fisiblity) done within 7 days after submiting processing amount.<br> 11.Agreement done within 10 days<br> 12.Mothly rental starts on dated agreement.<br> 13.Advance amount release after agreement within 2 days.<br> 14.Total working days of project is approx 45 -60 days<br> 15.Note- vender name<br><br>
                                    <b>note-</b><br> 1.pls pay INVOICE amount through RTGS/NEFT/IMPS/NET BANKING<br> 2.INVOICE AMOUNT IS REFUNDABLE<br>
                                    <span>Thank you Jio family</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold" align="right">
                                    <!-- <img id="Image1" src="image/approval.png" style="border-width:0px;"> -->
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 10px" align="left">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #c4c4c4; height: 30px" align="center">
                                    <b>THANK YOU</b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td style="height: 50px" align="center">
                <div>
                    <form>
                        <input type="button" class="btn btn-info " id="print_btun" value="Print" onclick="codespeedy()">
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
        
    function codespeedy(){
        var print_div = document.getElementById("hello");
        var print_area = window.open();
        print_area.document.write(print_div.innerHTML);
        print_area.document.close();
        print_area.focus();
        print_area.print();
        print_area.close();
// This is the code print a particular div element
    }
  </script>