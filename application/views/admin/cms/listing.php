<div class="page-fixed-main-content">
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> CMS Listing</span>
                    </div>

                </div>
                <?php if($this->session->flashdata('success')) : ?>
                <div class="custom-alerts alert alert-success fade in" id="">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a href="<?php echo base_url()."admin/cms/add_cms"; ?>" >
                                        <button id="sample_editable_1_new" class="btn sbold green">
                                        Add New CMS
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> </th>
                            <th> Title </th>
                            <th> URL Key </th>
                            <th> Status </th>
                            <th> Date Created </th>
                            <th> Last Modified </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($cms_data as $c_data): ?>
                            <tr class="odd gradeX">
                                <td>
                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                <td> <?php echo $c_data->page_title; ?> </td>
                                <td> <?php echo $c_data->url_key; ?> </td>
                                <td>
                                    <?php if($c_data->page_status == 1){ echo "Enabled"; }else{ echo "Disabled"; } ?>
                                </td>
                                <td> <?php echo $c_data->created_at; ?> </td>
                                <td> <?php echo $c_data->updated_at ; ?> </td>
                                <td>
                                    <!--<span class="label label-sm label-success"> View </span>
                                    <span class="label label-sm label-success"> Edit </span>
                                    <span class="label label-sm label-success"> Delete </span>-->
                                    <a href="<?php echo base_url()."admin/cms/add_cms/".$c_data->cms_id; ?>"><button class="btn green" type="button">View</button></a>
                                    <a href="<?php echo base_url()."admin/cms/edit_cms/".$c_data->cms_id; ?>"><button class="btn blue" type="button">Edit</button></a>
                                    <a href="<?php echo base_url()."admin/cms/delete_cms/".$c_data->cms_id; ?>"><button class="btn red" type="button">Delete</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    <!-- END PAGE BASE CONTENT -->
</div>