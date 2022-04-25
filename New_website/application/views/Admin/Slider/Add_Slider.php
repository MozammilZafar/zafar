<div class="container-fluid">
    <div class="page-head">
        <h4 class="mt-2 mb-2">Add Slider</h4>      
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="general-label">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('Admin/Slider/insert_slider');?>">        
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Slider Image</label>
                                <div class="col-md-10">
                                    <input type="file" name="image" class="form-control-static" required>
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Ordering</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="ordering">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 my-1 control-label">Status</label>
                                <div class="col-md-6">
                                    <div class="form-check-inline my-1">
                                        <label class="cr-styled" for="example-radio4">
                                            <input type="radio" id="example-radio4" name="status" value="Enable" checked> 
                                            <i class="fa"></i>
                                            Enable 
                                        </label>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <label class="cr-styled" for="example-radio5">
                                            <input type="radio" id="example-radio5" name="status" value="Disable"> 
                                            <i class="fa"></i> 
                                            Disable
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label" ></label>
                                <div class="col-md-10">
                                   <button type="submit" class="btn btn-outline-primary">Add Slider</button>
                                </div>
                            </div>
                        </form>           
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>