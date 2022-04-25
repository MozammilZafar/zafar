<div class="container-fluid">
    <div class="page-head">
        <h4 class="mt-2 mb-2">Edit Slider</h4>      
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="general-label">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('Admin/Slider/update_slider/'.$slider_data->id);?>">   
                            <div class="form-group row">
                                <label class="col-md-2 control-label">News Image</label>
                                <div class="col-md-5">
                                    <input type="file" name="image" class="form-control-static" >
                                    <input type="hidden" name="old_image" value="<?= $slider_data->image ?>" class="form-control-static" required>
                                </div>
                                <div class="col-md-5">
                                    <img src="<?= base_url($slider_data->image) ?>" width="200px" alt="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Ordering</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="ordering" value="<?= $slider_data->ordering ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 my-1 control-label">Status</label>
                                <div class="col-md-6">
                                    <div class="form-check-inline my-1">
                                        <label class="cr-styled" for="example-radio4">
                                            <input type="radio" <?php if($slider_data->status=='Enable'){ echo 'checked';} ?> id="example-radio4" name="status" value="Enable"> 
                                            <i class="fa"></i>
                                            Enable 
                                        </label>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <label class="cr-styled" for="example-radio5">
                                            <input type="radio" <?php if($slider_data->status=='Disable'){ echo 'checked';} ?> id="example-radio5" name="status" value="Disable"> 
                                            <i class="fa"></i> 
                                            Disable
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label" ></label>
                                <div class="col-md-10">
                                   <button type="submit" class="btn btn-outline-primary">Update Slider</button>
                                </div>
                            </div>
                        </form>           
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>