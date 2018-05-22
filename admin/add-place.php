<?php require 'header-admin.php'; ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-card margin-b-30">
            <div class="panel-body  p-xl-3">
                    <h5>Add Places</h5>
                    <form action="" method="POST">
                     <div class="form-group row"><label class="col-lg-2 form-control-label">Place name</label>

                <div class="col-lg-10">
                <input type="text" name="place_name"  class="form-control" required="required">
                </div>
                </div>
                <button type="submit" name="btn-add" class="btn btn-primary">Add Place</button>
                    </form>
                    <?php addplace(); ?>
            </div>
        </div>
     </div>
</div>

</div>
   <?php require 'footer-admin.php' ?>


