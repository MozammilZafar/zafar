<div class="container-fluid" >
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div style="background:#d1cbcb9c;padding:30px;margin-top:50px;">
            <h3 style="text-align:center;">Check Your Approval Status</h3>
            <form action="<?= base_url('Web/check_status_data'); ?>" method="post">
                <table width="100%">
                    <tr>
                        <td colspan="2" style="height:30px"></td>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td><input type="text" name="mobile" class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height:30px"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <b>
                                <center>
                                    ** enter your register mobile no. and check your status **
                                </center>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height:30px"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center>
                                <input type="submit" value="Check Status" class="btn btn-info">
                            </center>
                        </td>
                    </tr>
                </table>
            </form></div>
        <div style="margin-bottom:50px;"></div>
        </div>
    </div>
</div>