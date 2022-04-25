<div class="consultation section-sm" >
    <div class="container" >
        <div class="col-lg-12 col-md-12 col-12 ml-auto">
            <div class="row">
                <div class="col-12 text-left">
                    <div class="sec-title" id="Apply_Form">
                        <h2>Apply <span>Form</span></h2><br>
                    </div>
                </div>
            </div>
            <div class="home-p-form-wrapper">
                <div class="home-p-form">
                    <form method="post" action="<?= base_url(); ?>Web/insert_enquiry" class="default-form" id="contact_form">
                        <div class="row">
                            <div class="form-group col-lg-6 mb-3">
                                <input type="text" class="form-control" name="fname" required="required" placeholder="Enter First Name">
                            </div>
                            <div class="form-group col-lg-6 mb-3">
                                <input type="text" class="form-control" name="lname" required="required" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group col-lg-6 mb-3">
                                <input type="text" class="form-control" name="mobile" required="required" placeholder="Enter Your Mobile Number">
                            </div>
                            <div class="form-group col-lg-6 mb-3">
                                <input type="text" class="form-control" name="alt_mobile" required="required" placeholder="Enter Your Alternate Mobile Number">
                            </div>
                            <div class="form-group col-lg-6 mb-3">
                                <input type="text" class="form-control" name="email" required="required" placeholder="Enter Your E-mail Address">
                            </div>
                            <div class="form-group col-lg-6 mb-3">
                                <input type="text" class="form-control" name="amount" required="required" placeholder="Enter Your Desired Loan Amount ">
                            </div>
                            <div class="form-group col-lg-6 mb-3">
                                <input type="text" class="form-control" name="address" required="required" placeholder="Enter Your Current Address">
                            </div>
                            <div class="form-group col-lg-6 mb-3">
                                <select class="form-control" name="type" required>
                                    <option value="">Which Type Of Loan Needed</option>
                                    <option value="Personal">Personal Loan</option>
                                    <option value="Auto/Vehicle">Auto/Vehicle Loan</option>
                                    <option value="Home">Home Loan</option>
                                    <option value="Education">Education Loan</option>
                                    <option value="Property">Property Loan</option>
                                </select>
                            </div>
                            <div class="col col-xs-12 text-center">
                                <button class="theme-btn btn-style-one" type="submit" >Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<center>
    <hr class="section-title section-title-border" style="width: 70%;margin-top: 30px;">
</center>


<style>

.form-control
    {
        height: 51px;
        border: 1px solid black !important;
    }

   .contact-list .item p
    {
        color: white;
    }
</style>