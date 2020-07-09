
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
    <li class="header">Menu Utama</li>
    <li class="active">
        <a href="<?php echo base_url().'backend/dashboard'?>">
        <i class="fa fa-home"></i> <span>Dashboard</span>
        <span class="pull-right-container">
            <small class="label pull-right"></small>
        </span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-pencil"></i>
        <span>Post</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="<?php echo base_url().'backend/post/add_post'?>"><i class="fa fa-thumb-tack"></i> Add New</a></li>
        <li><a href="<?php echo base_url().'backend/post'?>"><i class="fa fa-list"></i> Post List</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php echo base_url().'backend/pengguna'?>">
        <i class="fa fa-users"></i> <span>Pengguna</span>
        <span class="pull-right-container">
            <small class="label pull-right"></small>
        </span>
        </a>
    </li>
    <li>
        <a href="<?php echo base_url().'backend/bank'?>">
        <i class="fa fa-bank"></i> <span>Bank</span>
        <span class="pull-right-container">
            <small class="label pull-right"></small>
        </span>
        </a>
    </li>
    <li>
        <a href="<?php echo base_url().'backend/event'?>">
        <i class="fa fa-map-signs"></i> <span>Event</span>
        <span class="pull-right-container">
            <small class="label pull-right"></small>
        </span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-bus"></i>
        <span>Tarian</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="<?php echo base_url().'backend/paket_tour'?>"><i class="fa fa-gift"></i> Detail Tarian </a></li>
        <li><a href="<?php echo base_url().'backend/kategori'?>"><i class="fa fa-hashtag"></i> Kategori</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-camera"></i>
        <span>Gallery</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="<?php echo base_url().'backend/album'?>"><i class="fa fa-clone"></i> Album</a></li>
        <li><a href="<?php echo base_url().'backend/galeri'?>"><i class="fa fa-picture-o"></i> Photos</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php echo base_url().'backend/orders'?>">
        <i class="fa fa-bell"></i> <span>Orders</span>
        <span class="pull-right-container">
            <small class="label pull-right bg-red"><?php echo $jum_order;?></small>
        </span>
        </a>
    </li>

    <li>
        <a href="<?php echo base_url().'backend/konfirmasi'?>">
        <i class="fa fa-money"></i> <span>Konfirmasi</span>
        <span class="pull-right-container">
            <small class="label pull-right bg-red"><?php echo $jum_konfirmasi;?></small>
        </span>
        </a>
    </li>

    <li>
        <a href="<?php echo base_url().'backend/inbox'?>">
        <i class="fa fa-envelope"></i> <span>Inbox</span>
        <span class="pull-right-container">
            <small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
        </span>
        </a>
    </li>

    <li>
        <a href="<?php echo base_url().'backend/testimonial'?>">
        <i class="fa fa-comment"></i> <span>Testimonial</span>
        <span class="pull-right-container">
            <small class="label pull-right bg-yellow"><?php echo $jum_testimoni;?></small>
        </span>
        </a>
    </li>
        <li>
        <a href="<?php echo base_url().'administrator/logout'?>">
        <i class="fa fa-sign-out"></i> <span>Sign Out</span>
        <span class="pull-right-container">
            <small class="label pull-right"></small>
        </span>
        </a>
    </li>
    
    </ul>
</section>