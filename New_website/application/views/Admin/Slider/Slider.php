<div class="container-fluid">
    <div class="page-head">
        <h4 class="mt-2 mb-2">View Slider</h4>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    <div id="datatable2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable2" class="table dataTable no-footer" role="grid" aria-describedby="datatable2_info">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>    
                                    <tbody>
                                        <?php $i=1; foreach($slider_data as $data) {?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><img src="<?= base_url(); ?><?= $data->image; ?>" alt="" width="200px"></td>
                                            <td><?= $data->status; ?></td>
                                            <td>       
                                                <a href="<?= base_url('Admin/Slider/edit_slider/'.$data->id) ?>" class="btn btn-outline-success"><i class="fa fa-pencil"></i></a>
                                                <a href="<?= base_url('Admin/Slider/delete_slider/'.$data->id) ?>" class="btn btn-outline-danger" onclick="return confirm('Are You Sure You Want To Delete This Slider')" ><i class="fa fa-trash"></i></a>
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