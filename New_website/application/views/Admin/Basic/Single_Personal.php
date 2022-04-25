<div class="container-fluid">
    <div class="page-head">
        <h4 class="mt-2 mb-2">Update Loan Action</h4>      
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="general-label">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('Admin/Basic_Details/update_personal/'.$personal->id);?>">                      
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Loan Amount</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="final_amount" placeholder="Enter the Loan Amount" value="<?= $personal->final_amount; ?>">
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Year</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="year" placeholder="Enter The Year" value="<?= $personal->year; ?>">
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Date</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="approve_date" value="<?= $personal->approve_date; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label" ></label>
                                <div class="col-md-10">
                                   <button type="submit" class="btn btn-outline-primary">Update</button>
                                </div>
                            </div>
                        </form>           
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>