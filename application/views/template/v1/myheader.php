<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title;?></title>

    <!-- Bootstrap -->
    <?php echo load_template_CSS();?>
    <?php echo load_template_favicon();?>
    <?php $controller =  $this->uri->segment(1);
          $action = $this->uri->segment(2);
          $params = $this->uri->segment(3); ;?>
    <?php echo (isset($loadCSS) ? $loadCSS : "");?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo site_url();?>" class="site_title"><i class="fa fa-paw"></i> <span>PT,Abc</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url()?>assets/images/image/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Mr.Testing</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br /><br/>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
             <div class="menu_section">
                 <h3>&nbsp;</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo site_url();?>"><i class="fa fa-home"></i> Dashboard</span></a></li>
                  <li><a><i class="fa fa-bug"></i> Admin Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a>Role<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo site_url('AdminRole');?>">List</a></li>
                            <li class="sub_menu"><a href="<?php echo site_url('AdminRole/create');?>">Create</a></li>
                            <?php if($controller ==='AdminRole' && $action ==='edit' && !empty($params)):?>
                              <li class="sub_menu"><a href="<?php echo site_url('AdminRole/edit').'/'.$params;?>">Edit</a></li>
                            <?php endif;?>
                          </ul>
                        </li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>

              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()?>assets/images/image/img.jpg" alt="">Mr.Testing
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href=""><i class="fa fa-cog pull-right"></i> Setting</a></li>
                    <li><a href=""><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
          <?php if (isset($body)) :?>
                <?php   $moduleName = $this->router->fetch_module(); ?>
                <?php   $controllerName = strtolower($this->router->fetch_class());?>
                <?php   $view = $moduleName.'/'.$this->config->item('tbody').$controllerName.'/'.$body;?>
                <?php echo $this->load->view($view); ?>
          <?php endif;?>
        <!-- /page content -->
        <div class="modal fade image-false" tabindex="-1" data-toggle="modal" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel2">Sorry</h4>
                    </div>
                    <div class="modal-body">
                        <p>Image extension was not accepted.<br/>Be sure that image extension is <br/><code>*.jpg or *.jpeg or *.png</code></p>
                    </div>
                    <div class="panel-footer text-right">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
  </body>
<?php   $textMsg = $this->session->flashdata('alert_msg');?>
<?php   $typeMsg = $this->session->flashdata('type_msg');?>

<script>
var typeNotif ="<?php echo $typeMsg;?>";
var titleNotif = "<?php echo strtoupper($typeMsg);?>";
var messageNotif ="<?php echo $textMsg;?>";
$(document).ready(function() {
        if(messageNotif !=''){
            new PNotify({
                      title: titleNotif,
                      text: messageNotif,
                      type: typeNotif,
                      styling: 'bootstrap3'
            });
        }
});

  var setActive = function (uri) {
      var url = "<?php echo site_url($controller.'/'.'activate/'); ?>";
      $('#linkActive').attr("href", url + uri);
  };
  var setBanned = function (uri) {
      var url = "<?php echo site_url($controller.'/'.'activate/'); ?>";
      $('#linkBanned').attr("href", url + uri);
  };
  var setDelete = function (uri) {
      var url = "<?php echo site_url($controller.'/'.'delete/'); ?>";
      $('#linkDelete').attr("href", url + uri);
  };

  $('input[name=image]').change(function () {
      var val = $(this).val().toLowerCase();
      var regex = new RegExp("(.*?)\.(jpg|jpeg|png)$");

      if(val===""){
      }else{
          if(!(regex.test(val))) {
              $(this).val('');
              $(".image-false").modal('show');
          }else{

          }
      }
  });

</script>
</html>
