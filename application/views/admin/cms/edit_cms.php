<?php

//echo "<pre>"; print_r($cms_data); echo "</pre>";

?>

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
                        <span class="caption-subject font-dark sbold uppercase">Edit CMS</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <?php $attributes = array('class' => 'form-horizontal', 'id' => 'add_cms_form');
                    echo form_open('admin/cms/edit_cms/'.$cms_data['cms_id'], $attributes);

                    ?>
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful! </div>

                        <div class="form-group <?php if (form_error('page_title')){ echo "has-error"; } ?>">

                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Page Title <span class="required"> * </span>', 'page_title', $attributes);
                            ?>

                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'page_title',
                                    'id'            => 'page_title',
                                    'value'         => $cms_data['page_title'],
                                    'class'     => 'form-control'
                                );

                                echo form_input($data);
                                ?>
                                <?php echo form_error('page_title')?>
                            </div>

                        </div>

                        <div class="form-group <?php if (form_error('url_key')){ echo "has-error"; } ?>">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('URL Key <span class="required"> * </span>', 'url_key', $attributes);
                            ?>
                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'url_key',
                                    'id'            => 'url_key',
                                    'value'         => $cms_data['url_key'],
                                    'class'     => 'form-control'
                                );

                                echo form_input($data);
                                ?>
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
                           <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Status <span class="required"> * </span>', 'page_status', $attributes);
                            ?>



                            <div class="col-md-4">
                                <?php
                                $options = array(
                                    '1'         => 'Enabled',
                                    '0'           => 'Disabled'
                                );

                                $extra_data = 'class="form-control select2me"';

                                echo form_dropdown('page_status', $options, $cms_data['page_status'], $extra_data );

                                ?>

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
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Content Heading', 'content_heading', $attributes);
                            ?>
                            <div class="col-md-4">

                                <?php
                                $data = array(
                                    'name'          => 'content_heading',
                                    'id'            => 'content_heading',
                                    'value'         => $cms_data['content_heading'],
                                    'class'     => 'form-control'
                                );

                                echo form_input($data);
                                ?>

                            </div>
                        </div>

                        <div class="form-group <?php if (form_error('page_content')){ echo "has-error"; } ?>">

                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Content <span class="required"> * </span>', 'page_content', $attributes);
                            ?>



                            <div class="col-md-9">

                                <?php
                                $data = array(
                                    'name'          => 'page_content',
                                    'id'            => 'page_content',
                                    'value'         => $cms_data['page_content'],
                                    'class'     => 'ckeditor form-control'
                                );
                                echo form_textarea($data);
                                ?>

                                <div id="editor2_error"> </div>
                                <?php echo form_error('page_content'); ?>
                            </div>

                        </div>

                        <div class="form-group">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Meta Keyword', 'meta_keywords', $attributes);
                            ?>

                            <div class="col-md-9">
                                <?php
                                $data = array(
                                    'name'          => 'meta_keywords',
                                    'id'            => 'meta_keywords',
                                    'value'         => $cms_data['meta_keywords'],
                                    'class'     => ' form-control'
                                );
                                echo form_textarea($data);
                                ?>

                            </div>
                        </div>

                        <div class="form-group last">

                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Meta Description', 'meta_desc', $attributes);
                            ?>

                            <div class="col-md-9">
                                <?php
                                $data = array(
                                    'name'          => 'meta_desc',
                                    'id'            => 'meta_desc',
                                    'value'         => $cms_data['meta_desc'],
                                    'class'     => ' form-control'
                                );
                                echo form_textarea($data);
                                ?>

                            </div>
                        </div>


                    </div>

                    <?php

                    echo form_hidden('cms_id', $cms_data['cms_id']);

                    ?>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <?php
                                $data = array(
                                    'name'          => 'edit_cms_submit',
                                    'class'            => 'btn green',
                                    'value'         => 'true',
                                    'type'          => 'submit',
                                    'content'       => 'Submit'
                                );

                                echo form_button($data);
                                ?>
                                <!--<button type="button" class="btn default">Cancel</button>-->
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
