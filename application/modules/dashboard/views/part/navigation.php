 <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url() ; ?>assets/admin/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo substr($this->session->userdata('username'),0,15);?>...</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

         

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->


              <li><a href="<?php echo base_url() ; ?>"><i class="fa fa-home"></i> <span>Home</span></a></li>

<!--            <li class="treeview">-->
<!--              <a href="#"><i class="fa fa-shopping-cart"></i> <span>Sales Order</span> <i class="fa fa-angle-left pull-right"></i></a>-->
<!--              <ul class="treeview-menu">-->
<!--                <li><a href="--><?php //echo base_url() ; ?><!--dashboard/data_formulir"><i class="fa fa-file"></i> <span>Data Formulir</span></a></li>-->
<!--                <li><a href="--><?php //echo base_url() ; ?><!--dashboard/detail_product"><i class="fa fa-file"></i> <span>Detail Product</span></a></li>-->
<!--                <li><a href="--><?php //echo base_url() ; ?><!--dashboard/data_customer"><i class="fa fa-file"></i> <span>Data Customer</span></a></li>-->
<!--                  <li><a href="--><?php //echo base_url() ; ?><!--dashboard/data_lainya"><i class="fa fa-file"></i> <span>Data Lainya</span></a></li>-->
<!--              </ul>-->
<!--            </li>-->
              <li><a href="<?php echo base_url('dashboard/data_formulir') ; ?>"><i class="fa fa-shopping-cart"></i> <span>Sales Order</span></a></li>
              <li><a href="<?php echo base_url('dashboard/customer') ; ?>"><i class="fa fa-user"></i> <span>Customer ID</span></a></li>
              <li><a href="<?php echo base_url('dashboard/payment') ; ?>"><i class="fa fa-money"></i> <span>Payment</span></a></li>
             <li class="treeview">
                  <a href="#"><i class="fa fa-print"></i> <span>Print Out</span> <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li><a href="<?php echo base_url() ; ?>dashboard/printout"><i class="fa fa-print"></i> <span>Print</span></a></li>
                      <li><a href="<?php echo base_url() ; ?>dashboard/upload"><i class="fa fa-upload"></i> <span>Upload</span></a></li>
                  </ul>
              </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>