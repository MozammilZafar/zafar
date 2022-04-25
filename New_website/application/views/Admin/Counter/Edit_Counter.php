<div class="container-fluid">
    <div class="page-head">
        <h4 class="mt-2 mb-2">Edit Counter</h4>      
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="general-label">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('Admin/Counter/update_counter/'.$counter->id);?>">
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-10">
                                    <input type="text" name="title" value="<?= $counter->title ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Counter</label>
                                <div class="col-md-10">
                                    <input type="text" name="counter" value="<?= $counter->count ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label" ></label>
                                <div class="col-md-10">
                                   <button type="submit" class="btn btn-outline-primary">Update Counter</button>
                                </div>
                            </div>
                        </form>           
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>