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
                        <span class="caption-subject font-dark sbold uppercase">System Configurations</span>
                    </div>

                </div>
                <?php if($this->session->flashdata('success')) : ?>
                    <div class="custom-alerts alert alert-success fade in" id="">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <?php $attributes = array('class' => 'form-horizontal', 'id' => 'add_config_form');
                    echo form_open_multipart('admin/system_config/', $attributes);

                    ?>
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful!
                        </div>

                        <h3 class="form-section">HTML Head / SEO</h3>

                        <div class="form-group <?php if (form_error('favicon')){ echo "has-error"; } ?>">

                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Favicon Icon', 'favicon', $attributes);
                            ?>

                            <div class="col-md-9">
                                <?php
                                $data = array(
                                    'name'          => 'favicon',
                                    'id'            => 'favicon',
                                    'value'         => '',
                                    'class'     => 'form-control1'
                                );

                                echo form_upload($data);
                                ?>
                                <?php echo form_error('favicon')?>
                                <span class="help-block"> Allowed file types: ICO, PNG, GIF, JPG, JPEG, APNG, SVG. Not all browsers support all these formats!</span>
                            </div>

                        </div>


                        <div class="form-group <?php if (form_error('default_title')){ echo "has-error"; } ?>">

                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Default Title', 'default_title', $attributes);
                            ?>

                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'default_title',
                                    'id'            => 'default_title',
                                    'value'         => '',
                                    'class'     => 'form-control'
                                );

                                echo form_input($data);
                                ?>
                                <?php echo form_error('default_title')?>
                            </div>

                        </div>


                        <div class="form-group">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Default Description', 'default_description', $attributes);
                            ?>

                            <div class="col-md-9">
                                <?php
                                $data = array(
                                    'name'          => 'default_description',
                                    'id'            => 'default_description',
                                    'value'         => '',
                                    'class'     => ' form-control',
                                    'rows'    => '5'
                                );
                                echo form_textarea($data);
                                ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Default Keywords', 'default_keywords', $attributes);
                            ?>

                            <div class="col-md-9">
                                <?php
                                $data = array(
                                    'name'          => 'default_keywords',
                                    'id'            => 'default_keywords',
                                    'value'         => '',
                                    'class'     => ' form-control',
                                    'rows'    => '5'
                                );
                                echo form_textarea($data);
                                ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Miscellaneous Scripts', 'miscellaneous_scripts', $attributes);
                            ?>

                            <div class="col-md-9">
                                <?php
                                $data = array(
                                    'name'          => 'miscellaneous_scripts',
                                    'id'            => 'miscellaneous_scripts',
                                    'value'         => '',
                                    'class'     => ' form-control',
                                    'rows'    => '5'
                                );
                                echo form_textarea($data);
                                ?>
                                <span class="help-block"> This will be included before head closing tag in page HTML. </span>
                            </div>

                        </div>


                        <h3 class="form-section">Header</h3>


                        <div class="form-group <?php if (form_error('logo_src')){ echo "has-error"; } ?>">

                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Logo Image Src', 'logo_src', $attributes);
                            ?>

                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'logo_src',
                                    'id'            => 'logo_src',
                                    'value'         => '',
                                    'class'     => 'form-control1'
                                );

                                echo form_upload($data);
                                ?>
                                <?php echo form_error('logo_src')?>
                            </div>

                        </div>

                        <div class="form-group <?php if (form_error('logo_alt')){ echo "has-error"; } ?>">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Logo Image Alt', 'logo_alt', $attributes);
                            ?>
                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'logo_alt',
                                    'id'            => 'logo_alt',
                                    'value'         => '',
                                    'class'     => 'form-control'
                                );

                                echo form_input($data);
                                ?>
                                <?php echo form_error('logo_alt'); ?>
                            </div>
                            <!--<span class="help-block"> e.g: http://www.demo.com or http://demo.com </span>-->

                        </div>

                        <div class="form-group <?php if (form_error('welcome_txt')){ echo "has-error"; } ?>">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Welcome Text', 'welcome_txt', $attributes);
                            ?>
                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'welcome_txt',
                                    'id'            => 'welcome_txt',
                                    'value'         => '',
                                    'class'     => 'form-control',
                                    'placeholder' => 'Default welcome msg!'
                                );

                                echo form_input($data);
                                ?>
                                <?php echo form_error('welcome_txt'); ?>
                            </div>
                            <!--<span class="help-block"> e.g: http://www.demo.com or http://demo.com </span>-->

                        </div>


                        <h3 class="form-section">Footer</h3>

                        <div class="form-group <?php if (form_error('copyright_txt')){ echo "has-error"; } ?>">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Copyright Text', 'copyright_txt', $attributes);
                            ?>
                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'copyright_txt',
                                    'id'            => 'copyright_txt',
                                    'value'         => '',
                                    'class'     => 'form-control'
                                );

                                echo form_input($data);
                                ?>
                                <?php echo form_error('copyright_txt'); ?>
                            </div>
                            <!--<span class="help-block"> e.g: http://www.demo.com or http://demo.com </span>-->

                        </div>

                        <div class="form-group">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Miscellaneous HTML', 'miscellaneous_html', $attributes);
                            ?>

                            <div class="col-md-9">
                                <?php
                                $data = array(
                                    'name'          => 'miscellaneous_html',
                                    'id'            => 'miscellaneous_html',
                                    'value'         => '',
                                    'class'     => ' form-control',
                                    'rows'    => '5'
                                );
                                echo form_textarea($data);
                                ?>
                                <span class="help-block"> This will be displayed just before body closing tag. </span>
                            </div>

                        </div>

                        <!-- End Of Footer -->


                        <!-- Email Option -->
                        <h3 class="form-section">Email Option</h3>
                        <div class="form-group <?php if (form_error('from_email')){ echo "has-error"; } ?>">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('From Email', 'from_email', $attributes);
                            ?>
                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'from_email',
                                    'id'            => 'from_email',
                                    'value'         => '',
                                    'class'     => 'form-control',
                                    'placeholder' => 'noreply@xyz.com'
                                );

                                echo form_input($data);
                                ?>
                                <?php echo form_error('from_email'); ?>
                                <span class="help-block"> You can specify the email address that emails should be sent from. </span>
                            </div>

                        </div>
                        <div class="form-group <?php if (form_error('from_name')){ echo "has-error"; } ?>">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('From Name', 'from_name', $attributes);
                            ?>
                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'from_name',
                                    'id'            => 'from_name',
                                    'value'         => '',
                                    'class'     => 'form-control'
                                );

                                echo form_input($data);
                                ?>
                                <?php echo form_error('from_name'); ?>
                                <span class="help-block"> You can specify the name that emails should be sent from </span>
                            </div>


                        </div>

                        <!-- END Email Option -->


                        <!-- SMTP Options -->

                        <h3 class="form-section">SMTP Option</h3>
                        <div class="form-group <?php if (form_error('smtp_host')){ echo "has-error"; } ?>">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('SMTP Host', 'smtp_host', $attributes);
                            ?>
                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'smtp_host',
                                    'id'            => 'smtp_host',
                                    'value'         => '',
                                    'class'     => 'form-control'
                                );

                                echo form_input($data);
                                ?>
                                <?php echo form_error('smtp_host'); ?>
                            </div>

                        </div>
                        <div class="form-group <?php if (form_error('smtp_port')){ echo "has-error"; } ?>">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('SMTP Port', 'smtp_port', $attributes);
                            ?>
                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'smtp_port',
                                    'id'            => 'smtp_port',
                                    'value'         => '',
                                    'class'     => 'form-control'
                                );

                                echo form_input($data);
                                ?>
                                <?php echo form_error('smtp_port'); ?>
                            </div>


                        </div>

                        <div class="form-group <?php if (form_error('encryption')){ echo "has-error"; } ?>">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('Encryption', 'encryption', $attributes);
                            ?>



                            <div class="col-md-4">
                                <?php
                                $options = array(
                                    'none'         => 'No encryption',
                                    'ssl'           => 'Use SSL encryption',
                                    'tls'           => 'Use TLS encryption.'
                                );

                                $extra_data = 'class="form-control select2me"';

                                echo form_dropdown('encryption', $options , null, $extra_data );

                                ?>

                                <?php echo form_error('encryption'); ?>
                            </div>
                        </div>


                        <div class="form-group <?php if (form_error('smtp_username')){ echo "has-error"; } ?>">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('SMTP Username', 'smtp_username', $attributes);
                            ?>
                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'smtp_username',
                                    'id'            => 'smtp_username',
                                    'value'         => '',
                                    'class'     => 'form-control'
                                );

                                echo form_input($data);
                                ?>
                                <?php echo form_error('smtp_username'); ?>
                            </div>


                        </div>
                        <div class="form-group <?php if (form_error('smtp_password')){ echo "has-error"; } ?>">
                            <?php
                            $attributes = array(
                                'class' => 'control-label col-md-3'
                            );
                            echo form_label('SMTP Password', 'smtp_password', $attributes);
                            ?>
                            <div class="col-md-4">
                                <?php
                                $data = array(
                                    'name'          => 'smtp_password',
                                    'id'            => 'smtp_password',
                                    'value'         => '',
                                    'class'     => 'form-control'
                                );

                                echo form_password($data);
                                ?>
                                <?php echo form_error('smtp_password'); ?>
                            </div>


                        </div>
                        <!-- END SMTP Options -->


                    </div>

                    <?php

                    //echo form_hidden('cms_id', $cms_data['cms_id']);

                    ?>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <?php
                                $data = array(
                                    'name'          => 'add_config_submit',
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
