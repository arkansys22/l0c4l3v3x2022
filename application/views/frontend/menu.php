<?php $users= $this->Crud_m->view_where('user', array('username'=> $this->session->username))->row_array(); ?>
<header class="main-header">
    <!-- logo   -->
    <a href="<?php echo base_url()?>" class="logo-holder"><img src="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>" alt="" width="100%" height="100%"></a>
    <!-- logo end  -->
    <!-- search
    <div class="search-button"><i class="far fa-search"></i></div>
    <div class="search-input"><input name="se" id="se" type="text" class="search" placeholder="Search.." /></div>
    search end  -->
    <div class="sb-button"></div>
    <div class="share-btn showshare"><i class="fal fa-megaphone"></i><span>Share</span></div>
    <!-- mobile nav -->
    <div class="nav-button-wrap">
        <div class="nav-button"><span></span><span></span><span></span></div>
    </div>
    <!-- mobile nav end-->
    <!--  navigation -->
    <div class="nav-holder main-menu">
        <nav>
            <ul>
                <li>
                    <a href="<?php echo base_url()?>" class="act-link">Home </a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>about">About Us </a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>">Portfolio </a>
                    <!--second level -->
                    <ul>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Desain</a></li>
                        <li><a href="#">Equipment</a></li>
                        <li><a href="#">Workshop</a></li>
                    </ul>
                    <!--second level end-->
                </li>
                <li>
                    <a href="<?php echo base_url()?>">Contacts</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- navigation  end -->
</header>
