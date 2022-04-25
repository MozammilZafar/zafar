<div class="container-fluid">
    <div class="page-head">
        <h4 class="mt-2 mb-2">Personal Loan Enquiry</h4>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                   <a href="#" class="btn btn-info" id="test" onClick="javascript:fnExcelReport();">Export To Excel</a>
<!--                   <a href="<?= base_url('Admin/Basic_Details/delete_all/') ?>" class="btn btn-outline-danger" onclick="return confirm('Are You Sure You Want To Delete This Entry')" >Delete All Enquiry</a>-->
                    <p class="text-muted"></p>
                    <div class="">
                        <div id="datatable2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable2" class="table dataTable no-footer" role="grid" aria-describedby="datatable2_info">
                                        <thead>
                                            <tr role="row">
                                                <th>S.No.</th>
                                                <th>Status</th>
                                                <th>Loan Action</th>
                                                <th>Download PDF</th>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Alternate Contact</th>
                                                <th>Email</th>
                                                <th>Loan Type</th>
                                                <th>Desired Loan</th>
                                                <th>Address</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($personal as $data) {
                                                        $tr_bg_color = '';
                                                        if($data->status =='Pending' || $data->status =='')
                                                        {
                                                            $tr_bg_color = '#fcf8e3';
                                                        }elseif($data->status == 'Approved')
                                                        {
                                                                $tr_bg_color = '#dff0d8';
                                                        }elseif($data->status == 'Rejected')
                                                        {
                                                                $tr_bg_color = '#f2dede';
                                                        }
                                            ?>
                                            <tr style="background-color:<?= $tr_bg_color;?>">
                                                <td>
                                                    <?= $i++; ?> 
                                                </td>
                                                <td>
                                                    <select name="" onchange="window.location.href='<?= base_url('Admin/Basic_Details/update_status/'.$data->id.'/') ?>'+this.value">
                                                        <option value="0">Select</option>
                                                        <option <?= ($data->status =='Pending') ? 'selected' : '' ?> value="Pending">Pending</option>
                                                        <option <?= ($data->status == 'Approved') ? 'selected' : '' ?> value="Approved">Approved</option>
                                                        <option <?= ($data->status == 'Rejected') ? 'selected' : '' ?> value="Rejected">Rejected</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('Admin/Basic_Details/download_pdf/'.$data->id) ?>" class="btn btn-outline-success">PDF</a>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('Admin/Basic_Details/single_personal/'.$data->id) ?>" class="btn btn-outline-success"><i class="fa fa-pencil"></i></a>
                                                </td>
                                                <td>
                                                    <?= $data->fname.' '.$data->lname; ?>
                                                </td>
                                                <td>
                                                    <?= $data->mobile; ?>
                                                </td>
                                                <td>
                                                    <?= $data->alt_mobile; ?>
                                                </td>
                                                <td>
                                                    <?= $data->email; ?>
                                                </td>
                                                <td>
                                                    <?= $data->type; ?>
                                                </td>
                                                <td>
                                                    <?= $data->amount; ?>
                                                </td>
                                                <td>
                                                    <?= $data->address; ?>
                                                </td>
                                                <td>
                                                    <?= date('d-M-Y',strtotime($data->apply_date)); ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('Admin/Basic_Details/delete_personal/'.$data->id) ?>" class="btn btn-outline-danger" onclick="return confirm('Are You Sure You Want To Delete This Entry')" ><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
<!--end container-->
<script type="text/javascript">
    function fnExcelReport() {
        var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
        tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

        tab_text = tab_text + '<x:Name>Test Sheet</x:Name>';

        tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
        tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

        tab_text = tab_text + "<table border='1px'>";
        tab_text = tab_text + $('#myTable').html();
        tab_text = tab_text + '</table></body></html>';

        var data_type = 'data:application/vnd.ms-excel';

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
            if (window.navigator.msSaveBlob) {
                var blob = new Blob([tab_text], {
                    type: "application/csv;charset=utf-8;"
                });
                navigator.msSaveBlob(blob, '<?php echo date("d/m/y");?> Personal.xls');
            }
        } else {
            $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
            $('#test').attr('download', '<?php echo date("d/M/Y");?> Example.xls');
        }

    }

</script>
<table id="myTable" style="display:none;">
    <thead>
        <tr>
            <th>S.No.</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Alternate Contact</th>
            <th>Email</th>
            <th>Loan Type</th>
            <th>Desired Loan</th>
            <th>Address</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($personal as $data) {?>
        <tr>
            <td>
                <?= $i++; ?> 
            </td>
            <td>
                <?= $data->fname.' '.$data->lname; ?>
            </td>
            <td>
                <?= $data->mobile; ?>
            </td>
            <td>
                <?= $data->alt_mobile; ?>
            </td>
            <td>
                <?= $data->email; ?>
            </td>
            <td>
                <?= $data->type; ?>
            </td>
            <td>
                <?= $data->amount; ?>
            </td>
            <td>
                <?= $data->address; ?>
            </td>
            <td>
                <?= date('d-M-Y',strtotime($data->apply_date)); ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>