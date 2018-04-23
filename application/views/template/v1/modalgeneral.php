<?php $controller =  $this->uri->segment(1); ?>
<div class="modal fade ban-note" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Confirm</h4>
            </div>
            <div class="modal-body">
                <p>This action will be banned and not available for public until you activate this <?php echo $controller;?>.</p>
            </div>
            <div class="panel-footer text-right">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="linkActive">
                    <button type="button" class="btn btn-danger">Ban <?php echo $controller;?></button></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade active-note" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Confirm</h4>
            </div>
            <div class="modal-body">
                <p>This action will be activate an <?php echo $controller;?> from banned and make available for public.</p>
            </div>
            <div class="panel-footer text-right">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="linkBanned">
                    <button type="button" class="btn btn-success">Activate</button></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade delete-note" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Delete <?php echo $controller;?> Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>This action will be remove <?php echo $controller;?> from databases. Be sure for this action.</p>
            </div>
            <div class="panel-footer text-right">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="linkDelete">
                    <button type="button" class="btn btn-danger">Delete</button></a>
            </div>
        </div>
    </div>
</div>
