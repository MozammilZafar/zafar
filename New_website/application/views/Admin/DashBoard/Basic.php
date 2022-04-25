<div class="container-fluid">
    <div class="page-head">
        <h4 class="mt-2 mb-2">Basic Detail</h4>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="card-box">
                    <form method="post" id="basicForm" enctype="multipart/form-data">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td width="35%">Title</td>
                                <td width="65%">
                                    <a href="#" id="title" data-type="text" data-pk="<?= $basic_details->id ?>" data-url="<?= base_url('Admin/Basic_Details/update_basic') ?>" data-placeholder="Required" data-name="title" data-title="Enter Title " ><?= $basic_details->title ?></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="35%">Meta Key</td>
                                <td width="65%">
                                    <a href="#" id="meta_key" data-type="text" data-pk="<?= $basic_details->id ?>" data-url="<?= base_url('Admin/Basic_Details/update_basic') ?>" data-placeholder="Required" data-name="meta_key" data-title="Enter Meta Key" ><?= $basic_details->meta_key ?></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="35%">Meta Content</td>
                                <td width="65%">
                                    <a href="#" id="meta_content" data-type="text" data-pk="<?= $basic_details->id ?>" data-url="<?= base_url('Admin/Basic_Details/update_basic') ?>" data-placeholder="Required" data-name="meta_content" data-title="Enter Meta Content" ><?= $basic_details->meta_content ?></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><a href="#" id="email" data-type="email" data-pk="<?= $basic_details->id ?>" data-url="<?= base_url('Admin/Basic_Details/update_basic') ?>" data-placeholder="Required" data-name="email" data-title="Enter Email" ><?= $basic_details->email ?></a></td>
                            </tr>
                            <tr>
                                <td>Contact</td>
                                <td><a href="#" id="contact" data-type="text" data-pk="<?= $basic_details->id ?>" data-url="<?= base_url('Admin/Basic_Details/update_basic') ?>" data-placeholder="Required" data-name="contact" data-title="Enter Contact" ><?= $basic_details->contact ?></a></td>
                            </tr>
                            <tr>
                                <td>Logo</td>
                                <td>
                                    <div  data-pk="<?= $basic_details->id ?>" data-url="<?= base_url('Admin/Basic_Details/update_logo') ?>"  data-typeshow="logo"  class=" callevetdb logoshow">
                                        <img  id="logo-img" src="<?= base_url($basic_details->logo) ?>"  height="100px"  alt="<?= $basic_details->site_name ?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Icon</td>
                                <td>
                                    <div  data-pk="<?= $basic_details->id ?>" data-url="<?= base_url('Admin/Basic_Details/update_icon') ?>"  data-typeshow="icon"  class=" calleveticondb iconshow">
                                        <img  id="icon-img" src="<?= base_url($basic_details->icon) ?>" width="100px" height="100px"  alt="<?= $basic_details->site_name ?>">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                    </div>            
                </div>
            </div>
        </div>
    </div><!--end row-->                   
    
</div><!--end container-->
