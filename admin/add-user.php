<?php require 'header-admin.php'; ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-card margin-b-30">
            <div class="panel-body  p-xl-3">
                    <h5>Get direction From place to place</h5>
                    <form action="" method="POST">
                        <div class="form-group row"><label class="col-lg-2 form-control-label">Firstname</label>

                <div class="col-lg-10">
                <input type="text" name="fname"  class="form-control" required="required">
                </div>
                </div>

                 <div class="form-group row"><label class="col-lg-2 form-control-label">Lastname</label>

                <div class="col-lg-10">
                <input type="text" name="lname"  class="form-control" required="required">
                </div>
                </div>

                 <div class="form-group row"><label class="col-lg-2 form-control-label">Email</label>

                <div class="col-lg-10">
                <input type="text" name="email"  class="form-control" required="required">
                </div>
                </div>

                <div class="form-group row"><label class="col-lg-2 form-control-label">Pasword</label>

                <div class="col-lg-10">
                <input type="password" name="password"  class="form-control" required="required">
                </div>
                </div>
                <button type="submit" name="btn-add" class="btn btn-primary">Add User</button>
                    </form>
                    <?php addUser(); ?>
            </div>
        </div>
     </div>
</div>

</div>
   <?php require 'footer-admin.php' ?>


