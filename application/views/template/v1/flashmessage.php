<div class="page page-dashboard">
    <div class="row" id="con_alert_frm">
        <div class="col-sm-5">
          <?php $text_alert_warning = $this->session->flashdata('text_alert_warning');?>
          <?php $text_alert_success_w_warning = $this->session->flashdata('text_alert_success_w_warning');?>
          <div class="alert alert-warning alert-dismissible" role="alert" id="alert_warning" style="<?php echo $text_alert_warning=="" ? "display:none" : ""; ?>">
              <strong>Warning!</strong> <span id="text_alert_warning"><?php echo $text_alert_warning; ?></span>
          </div>

          <div class="alert alert-warning alert-dismissible" role="alert" id="alert_warning" style="<?php echo $text_alert_success_w_warning=="" ? "display:none" : ""; ?>">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <span id="text_alert_success_w_warning"><?php echo $text_alert_success_w_warning; ?></span>
          </div>

          <div class="alert alert-warning alert-dismissible" role="alert" style="<?php echo validation_errors()=="" ? "display:none" : ""; ?>" id="alert_form_validation">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <strong>Warning!</strong> <span id="text_alert_warning_form_validation"><?php echo validation_errors(); ?></span>
          </div>

          <?PHP
          $text_alert_sukses = $this->session->flashdata('text_alert_sukses');
          ?>
          <div class="alert alert-success alert-dismissible" role="alert" id="alert_success" style="<?php echo $text_alert_sukses=="" ? "display:none" : ""; ?>">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <strong>Success!</strong> <span id="text_alert_success"><?php echo $text_alert_sukses; ?></span>
          </div>

          <?PHP
          $text_alert_danger = $this->session->flashdata('text_alert_danger');
          ?>
          <div class="alert alert-danger alert-dismissible" role="alert" id="alert_danger" style="<?php echo $text_alert_danger=="" ? "display:none" : ""; ?>">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <strong>Failed,</strong> <span id="text_alert_danger"><?php echo $text_alert_danger; ?></span>
          </div>

        </div>
    </div>
</div>
