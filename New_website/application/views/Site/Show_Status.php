<style>
    td 
    {
        padding: 10px;
    }
    .table2 
    {
        display: none;
    }
    @media only screen and (max-width: 600px)
    {
        .table2 
        {
            display: block;
        }
        .table1 
        {
            display: none;
        }
    }
</style>
<div class="container" style="margin-top: 45px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin:30px 0px">
            <table class="table1" width="950px" background="background/header-top.jpg" style="background-repeat: repeat">
                <tr>
                    <td align="center" valign="middle">
                        <table cellpadding="0" cellspacing="10" width="100%" background="background/pattern-bg.jpg" style="background-repeat: repeat; border-radius: 5px">
                            <tr>
                                <td align="left" colspan="4" style="padding: 5px; background: #3173CF">
                                    <span id="lblName" style="color:White;font-size:Medium;font-weight:bold;"><?= $customer_data->fname.' '.$customer_data->lname ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    Mobile No :<?= $customer_data->mobile ?>
                                </td>
                                <td align="left">
                                    <span id="lblMobile" style="color:#485874;"></span>
                                </td>
                                <td align="left">
                                    Email :<?= $customer_data->email ?>
                                </td>
                                <td align="left">
                                    <span id="lblEmail" style="color:#485874;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" colspan="4" style="background: #004450; font-size: medium; font-weight: bold; color: #ffffff; padding: 5px">
                                    Basic Information
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    Alt Mobile No :<?= $customer_data->alt_mobile; ?>
                                </td>
                                <td align="left">
                                    <span id="lblSiteName" style="color:#485874;"></span>
                                </td>
                                <td align="left">
                                    Loan Applied For : <?= $customer_data->type; ?>
                                </td>
                                <td align="left" colspan="3">
                                    <span id="lblAddress" style="color:#485874;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    Amount :<?= $customer_data->amount; ?>
                                </td>
                                <td align="left">
                                    <span id="lblTaluk" style="color:#485874;"></span>
                                </td>
                                <td align="left">
                                    Address :<?= $customer_data->address; ?>
                                </td>
                                <td align="left">
                                    <span id="lblDistrict" style="color:#485874;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    Status :<?= $customer_data->status; ?>
                                </td>
                                <td align="left">
                                    <span id="lblKhata" style="color:#485874;"></span>
                                </td>
                            </tr>
<!--
                            <tr>
                                <td align="right" colspan="4" style="padding-right: 10px; border: 1px solid #004450; height: 45px">
                                    <button id="cmdInvoice" class="btn btn-info" data-type="<?= $customer_data->id ?>">Invoice</button> &nbsp; &nbsp;
                                    <button id="cmdapprovalletter" class="btn btn-primary" data-type="<?= $customer_data->id ?>">Approval Letter</button> &nbsp;
                                </td>
                            </tr>
-->
                        </table>
                    </td>
                </tr>
            </table>
            <table class="table2" width="950px" background="background/header-top.jpg" style="background-repeat: repeat;">
                <tr>
                    <td align="center" valign="middle">
                        <table cellpadding="0" cellspacing="10" width="100%" background="background/pattern-bg.jpg" style="background-repeat: repeat; border-radius: 5px">
                            <tr>
                                <td align="left" colspan="4" style="padding: 5px; background: #3173CF">
                                    <span id="lblName" style="color:White;font-size:Medium;font-weight:bold;"><?= $customer_data->fname.' '.$customer_data->lname ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    Mobile No :<?= $customer_data->mobile ?>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    Email :<?= $customer_data->email ?>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" colspan="4" style="background: #004450; font-size: medium; font-weight: bold; color: #ffffff; padding: 5px">
                                    Basic Information
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    Alt Mobile No :<?= $customer_data->alt_mobile; ?>
                                </td>
                                <td align="left">
                                    <span id="lblPincode" style="color:#485874;"></span>
                                </td>
                                <td align="left">
                                    Loan Applied For : <?= $customer_data->type; ?>
                                </td>
                                <td align="left">
                                    <span id="lblSiteName" style="color:#485874;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    Amount :<?= $customer_data->amount; ?>
                                </td>
                                <td align="left">
                                    <span id="lblAddress" style="color:#485874;"></span>
                                </td>
                                <td align="left">
                                    Address :<?= $customer_data->address; ?>
                                </td>
                                <td align="left">
                                    <span id="lblTaluk" style="color:#485874;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    Status :<?= $customer_data->status; ?>
                                </td>
                                <td align="left">
                                    <span id="lblState" style="color:#485874;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" colspan="4" style="padding-right: 10px; border: 1px solid #004450; height: 45px">
                                    <button id="cmdInvoice" class="btn btn-info hidden-xs" data-type="<?= $customer_data->id ?>">Invoice</button>
                                    <a href="<?= base_url('Web/invoice_mobile/'.$customer_data->id) ?>" class="btn btn-info mobile-btn-invoce" data-type="<?= $customer_data->id ?>">Invoice</a> &nbsp; &nbsp;
                                    <button id="cmdapprovalletter" class="btn btn-primary  hidden-xs" data-type="<?= $customer_data->id ?>">Approval Letter</button>
                                    <a href="<?= base_url('Web/Approval_Letter_mobile/'.$customer_data->id) ?>" class="btn btn-primary mobile-btn-invoce" data-type="<?= $customer_data->id ?>">Approval Letter</a> &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<style>
    .mobile-btn-invoce {
        display: none;
    }

    @media screen and (max-width: 480px) {
        .mobile-btn-invoce {
            display: block;
        }
    }

</style>
