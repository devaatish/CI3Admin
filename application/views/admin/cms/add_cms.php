<?php
$this->load->view('templates/header');
$this->load->view('templates/left_sidebar.php');
?>
<div class="page-fixed-main-content">
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase">Add New CMS</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <?php $attributes = array('class' => 'form-horizontal', 'id' => 'add_cms_form');
                    echo form_open('admin/cms/add_cms', $attributes);

                    ?>
                        <div class="form-body">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>

                            <div class="form-group <?php if (form_error('page_title')){ echo "has-error"; } ?>">
                                <label class="control-label col-md-3">Page Title
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="page_title" data-required="1" class="form-control" value="<?php echo set_value('page_title'); ?>" />
                                    <?php echo form_error('page_title')?>
                                </div>

                            </div>

                            <div class="form-group <?php if (form_error('url_key')){ echo "has-error"; } ?>">
                                <label class="col-md-3 control-label">URL Key
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="url_key" class="form-control" value="<?php echo set_value('url_key'); ?>">
                                    <?php echo form_error('url_key'); ?>
                                </div>
                                <span class="help-block"> e.g: http://www.demo.com or http://demo.com </span>

                            </div>
                            <!--<div class="form-group">
                                <label class="control-label col-md-3">Content Heading</label>
                                <div class="col-md-4">
                                    <input name="occupation" type="text" class="form-control" /> </div>
                            </div>-->
                            <div class="form-group <?php if (form_error('page_status')){ echo "has-error"; } ?>">
                                <label class="control-label col-md-3">Status
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control select2me" name="page_status">
                                        <option value="">Select...</option>
                                        <option value="Option 1">Enabled</option>
                                        <option value="Option 2">Disabled</option>
                                    </select>
                                    <?php echo form_error('page_status'); ?>
                                </div>
                            </div>

                            <!--<div class="form-group">
                                <label class="control-label col-md-3">WYSIHTML5 Editor
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-9">
                                    <textarea class="wysihtml5 form-control" rows="6" name="editor1" data-error-container="#editor1_error"></textarea>
                                    <div id="editor1_error"> </div>
                                </div>
                            </div>-->
                            <div class="form-group">
                                <label class="control-label col-md-3">Content Heading</label>
                                <div class="col-md-4">
                                    <input name="content_heading" type="text" class="form-control" value="<?php echo set_value('content_heading'); ?>"/> </div>
                            </div>
                            <div class="form-group <?php if (form_error('page_content')){ echo "has-error"; } ?>">
                                <label class="control-label col-md-3">Content
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-9">
                                    <textarea class="ckeditor form-control" name="page_content" rows="6" data-error-container="#editor2_error" ><?php echo set_value('page_content'); ?></textarea>
                                    <div id="editor2_error"> </div>
                                    <?php echo form_error('page_content'); ?>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Meta Keywords
                                </label>
                                <div class="col-md-9">
                                    <textarea  rows="6" name="meta_keywords" class="form-control"><?php echo set_value('meta_keywords'); ?></textarea>
                                </div>
                            </div>

                            <div class="form-group last">
                                <label class="control-label col-md-3">Meta Description
                                </label>
                                <div class="col-md-9">
                                    <textarea  rows="6" name="meta_desc" class="form-control"><?php echo set_value('meta_desc'); ?></textarea>
                                </div>
                            </div>


                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('templates/footer');
?>