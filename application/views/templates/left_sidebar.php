<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul data-slide-speed="200" data-auto-scroll="true" data-keep-expanded="false" class="page-sidebar-menu  page-header-fixed ">

            <li class="nav-item start active open">
                <a class="nav-link " href="<?php echo base_url()."admin/"; ?>">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item start">
                <a class="nav-link nav-toggle" href="javascript:;">
                    <i class="icon-folder"></i>
                    <span class="title">CMS</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item start ">
                        <a class="nav-link " href="<?php echo base_url()."admin/cms/"; ?>">
                            <i class="icon-docs"></i>
                            <span class="title">Pages</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a class="nav-link " href="#">
                            <i class="icon-docs"></i>
                            <span class="title">Blocks</span>
                            <span class="badge badge-success">1</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!--<li class="heading">
                <h3 class="uppercase">CMS</h3>
            </li>
            <li class="nav-item  ">
                <a class="nav-link nav-toggle" href="">
                    <i class="icon-diamond"></i>
                    <span class="title">Pages</span>
                    <span class="arrow"></span>
                </a>
            </li>-->

            <li class="heading">
                <h3 class="uppercase">Layouts</h3>
            </li>
            <li class="nav-item  ">
                <a class="nav-link " href="layout_blank_page.html">
                    <i class="icon-layers"></i>
                    <span class="title">Blank Page</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Pages</h3>
            </li>
            <li class="nav-item  ">
                <a class="nav-link nav-toggle" href="javascript:;">
                    <i class="icon-basket"></i>
                    <span class="title">eCommerce</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a class="nav-link " href="ecommerce_index.html">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " href="ecommerce_orders.html">
                            <i class="icon-basket"></i>
                            <span class="title">Orders</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>