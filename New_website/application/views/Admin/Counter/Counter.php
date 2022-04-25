<div class="container-fluid">
    <div class="page-head">
        <h4 class="mt-2 mb-2">View Counter</h4>
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
                                            <th>Title</th>
                                            <th>Counter</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>    
                                    <tbody>
                                        <?php $i=1; foreach($counter as $data) {?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $data->title; ?></td>
                                            <td><?= $data->count; ?></td>
                                            <td>       
                                                <a href="<?= base_url('Admin/Counter/edit_counter/'.$data->id) ?>" class="btn btn-outline-success"><i class="fa fa-pencil"></i></a>
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