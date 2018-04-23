<div class="right_col" role="main">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Sample Create</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="form-horizontal form-label-left" id="ArtistCreate" data-parsley-validate method="POST"
                          action="<?php echo site_url("Artist/create"); ?>" enctype="multipart/form-data">

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12"
                                       value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>" name="name"
                                       required type="text">
                                <span><?php echo form_error('name'); ?></span>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="description" name="description" class="form-control col-md-7 col-xs-12"
                                          required><?php echo !empty($_POST['description']) ? $_POST['description'] : '' ?></textarea>
                                <span><?php echo form_error('description'); ?></span>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Image <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="fileupload1 fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail"
                                         style="width: 400px; height: 250px; background: #eee;">
                                        <!-- <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> -->
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail"
                                         style="max-width: 400px; max-height: 250px; line-height: 20px;"></div>
                                    <div>
                              <span class="btn btn-white btn-file">
                              <span class="fileupload-new btn  btn-default">Select image</span>
                              <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                              <input type="file" class="default" id="image" name='image' required>
                              </span>
                                        <a href="#" class="btn btn-danger fileupload-exists"
                                           data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button id="send" type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo load_footer(); ?>
<?php echo load_template_JS(); ?>
<?php echo(isset($loadJS) ? $loadJS : ""); ?>
<script>
    $(document).ready(function() {
      $.listen('parsley:field:validate', function() {
        validateFront();
      });
      $('#dArtistCreate .btn').on('click', function() {
        $('#ArtistCreate').parsley().validate();
        validateFront();
      });
      var validateFront = function() {
        if (true === $('#ArtistCreate').parsley().isValid()) {
          $('.bs-callout-info').removeClass('hidden');
          $('.bs-callout-warning').addClass('hidden');
        } else {
          $('.bs-callout-info').addClass('hidden');
          $('.bs-callout-warning').removeClass('hidden');
        }
      };
      $(".select2_single").select2({
            placeholder: "Select Label",
            allowClear: true
        });
    });
    $(document).ready(function() {
        $(".select2_genre").select2({
            placeholder: "Select Genre",
            allowClear: true
        });
    });
</script>
