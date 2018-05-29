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


<!--              <li><a href="--><?php //echo base_url('dashboard') ; ?><!--"><i class="fa fa-home"></i> <span>Home</span></a></li>-->

            <li class="treeview">
              <a href="#"><i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('dashboard/so_progress') ; ?>"><i class="fa fa-file"></i> <span>Report SO Progress</span></a></li>
                <li><a href="<?php echo base_url('dashboard/sellout') ; ?>"><i class="fa fa-file"></i> <span>Report Sell Out</span></a></li>
                <li><a href="<?php echo base_url('dashboard/cust_progress') ; ?>"><i class="fa fa-file"></i> <span>Report New Customer Progress</span></a></li>

              </ul>
            </li>

              <li class="treeview">
                  <a href="#"><i class="fa fa-folder"></i> <span>Sales Order</span> <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li class="treeview">
                          <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-folder"></i> <span>Created New Order</span><i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="<?php echo base_url('dashboard/data_customer') ; ?>"><i class="fa fa-shopping-cart"></i> <span>Sales Order</span></a></li>
                              <li><a href="<?php echo base_url('dashboard/data_customer_sellout') ; ?>"><i class="fa fa-file"></i> <span>Consignment / Sell Out</span></a></li>
                          </ul>
                      </li>
                      <li class=""><a href="<?php echo base_url('dashboard/draft') ; ?>"><i class="fa fa-folder"></i> <span>SO Draft</span></a></li>

                  </ul>
              </li>

              <li class="treeview">
                  <a href="#"><i class="fa fa-user"></i> <span>Customer ID</span> <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li class=""><a href="<?php echo base_url('dashboard/add_customer') ; ?>"><i class="fa fa-plus"></i> <span>Created New Customer</span></a> </li>
                      <li class=""><a href="<?php echo base_url('dashboard/list_customer') ; ?>"><i class="fa fa-list"></i> <span>Data Customer</span></a></li>

                  </ul>
              </li>

              <li class="treeview">
                  <a href="#"><i class="fa fa-money"></i> <span>Payment</span><i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li class=""><a href="<?php echo base_url('dashboard/payment') ; ?>"><i class="fa fa-file"></i> <span>Input Payment</span></a> </li>
                  </ul>
              </li>


              <li class="treeview">
                  <a href="#"><i class="fa fa-print"></i> <span>Print & Upload</span> <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li class="treeview">
                          <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-print"></i> <span>Print</span><i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="<?php echo base_url('dashboard/printout/cash') ; ?>"><i class="fa fa-shopping-cart"></i> <span>Sales Order</span></a></li>
                              <li><a href="<?php echo base_url('dashboard/print_sellout') ; ?>"><i class="fa fa-file"></i> <span>Sell Out</span></a></li>
                              <li><a href="<?php echo base_url('dashboard/print_verifikasi') ; ?>"><i class="fa fa-file"></i> <span>Form Verifikasi</span></a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-upload"></i> <span>Upload</span><i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="<?php echo base_url('dashboard/upload') ; ?>"><i class="fa fa-shopping-cart"></i> <span>Sales Order</span></a></li>
                              <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>New Customer</span></a></li>
                          </ul>
                      </li>

                  </ul>
              </li>

              <li class="treeview">
                  <a href="#"><i class="fa fa-folder"></i> <span>Data Final SO</span><i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li class=""><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Report SO</span></a> </li>
                      <li class=""><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Sell Out</span></a> </li>
                  </ul>
              </li>


              <li class="treeview">
                  <a href="#"><i class="fa fa-folder"></i> <span>Data In Progress</span> <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li class="treeview">
                          <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-folder"></i> <span>List Pembayaran</span><i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Kategori Cash</span></a></li>
                              <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Kategori project</span></a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-folder"></i> <span>Buku Pembayaran</span><i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Kategori Cash</span><i class="fa fa-angle-left pull-right"></i></a>
                                  <ul class="treeview-menu">
                                      <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Buku Penampung</span></a></li>
                                      <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Buku Cash</span></a></li>
                                  </ul>
                              </li>
                              <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Kategori project</span></a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-folder"></i> <span>List Kredit</span><i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Kategori Kredit</span></a>
                              </li>
                              <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Kategori project</span></a></li>
                          </ul>
                      </li>

                  </ul>
              </li>


              <li class="treeview">
                  <a href="#"><i class="fa fa-folder"></i> <span>Data Final Finance</span> <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                      <li class="treeview">
                          <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-folder"></i> <span>List Pembayaran</span><i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Kategori Cash</span></a></li>
                              <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Kategori project</span></a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-folder"></i> <span>Buku Pembayaran</span><i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Kategori Cash</span></a>

                              </li>
                         </ul>
                      </li>
                      <li class="treeview">
                          <a href="<?php echo base_url('#') ; ?>"><i class="fa fa-folder"></i> <span>Buku Pembayaran</span><i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                              <ul class="treeview-menu">
                                  <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Buku Penampung</span></a></li>
                                  <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Buku Cash</span></a></li>
                              </ul>
                              <li><a href="<?php echo base_url('#') ; ?>"><i class="fa fa-file"></i> <span>Kategori project</span></a></li>
                          </ul>
                      </li>

                  </ul>
              </li>

          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>