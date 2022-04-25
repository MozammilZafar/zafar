<div class="container-fluid">
    <div class="page-head">
        <h4 class="mt-2 mb-2">Edit Services</h4>      
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="general-label">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('Admin/Services/update_services/'.$services->id);?>">
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-10">
                                    <input type="text" name="title" value="<?= $services->title; ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Content</label>
                                <div class="col-md-10">
                                    <textarea name="content" id="editor1"><?= $services->content; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Image</label>
                                <div class="col-md-5">
                                    <input type="file" name="image" class="form-control-static" >
                                    <input type="hidden" name="old_image" value="<?= $services->image ?>" class="form-control-static" required>
                                </div>
                                <div class="col-md-5">
                                    <img src="<?= base_url($services->image) ?>" width="200px" alt="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label" ></label>
                                <div class="col-md-10">
                                   <button type="submit" class="btn btn-outline-primary">Update Services</button>
                                </div>
                            </div>
                        </form>           
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>