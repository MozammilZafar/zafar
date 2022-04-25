<div class="container-fluid">
    <div class="page-head">
        <h5 class="header-title">Edit About</h5>      
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="general-label">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('Admin/About/update_about/'.$about->id);?>"> 
                            <div class="form-group row">
                                <label class="col-md-2 control-label">News Image</label>
                                <div class="col-md-5">
                                    <input type="file" name="image" class="form-control-static" >
                                    <input type="hidden" name="old_image" value="<?= $about->image ?>" class="form-control-static" required>
                                </div>
                                <div class="col-md-5">
                                    <img src="<?= base_url($about->image) ?>" width="100px" alt="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Content</label>
                                <div class="col-md-10">
                                    <textarea name="content" id="editor1"><?= $about->content; ?></textarea>
                                </div>                                 
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label" ></label>
                                <div class="col-md-10">
                                   <button type="submit" class="btn btn-outline-primary">Update Section</button>
                                </div>
                            </div>
                        </form>           
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>