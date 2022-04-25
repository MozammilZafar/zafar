<div class="container-fluid">
    <div class="page-head">
        <h4 class="mt-2 mb-2">Document</h4>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    <div id="datatable2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <table id="datatable2" class="table dataTable no-footer" role="grid" aria-describedby="datatable2_info">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Image</th>
                                            <th>heading</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>    
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="<?= base_url(); ?><?= $about->image; ?>" width="150px" alt=""></td>
                                            <td><?= $about->heading; ?></td>
                                            <td>       
                                                <a href="<?= base_url('Admin/Document/edit_document/'.$about->id) ?>" class="btn btn-outline-success"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
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