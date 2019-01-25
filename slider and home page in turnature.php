<section class="sec_header_top">
            <div class="img_banner">
                <div class="container-fluid">
                    <div class="flex height_100 flex_colm">
                        <div class="flex_content">
                            <div class="top_header">
                                <div class="flexbox">
                                    <div class="flexbox_item">
                                        <div class="logo_box">
                                            <a href="<?php echo base_url();?>home">
                                                <img src="<?= base_url(); ?>assets/images/logo2.png">
                                            </a>
                                        </div>
                                    </div>

                                    <?php 
                                     $session = $this->session->userdata('user_login');
                                     if (!empty($session)){
                                        ?>
                                         <div class="flexbox_item">
                                        <a href="<?= base_url()?>Login" class="user-profile"  >
                                           <?php 
                                              $user_name = $session->user_name;
                                            ?>
                                            <img src="<?= base_url(); ?>assets/images/img.jpg" alt=""> <?= $user_name?>
                                            <!-- <span class=" fa fa-angle-down"></span> -->
                                          </a>
                                          <a class="user-profile" href="<?= base_url()?>login/logout?>">Logout</a>
                                    </div>
                                    <?php 
                                     }
                                     else{
                                    ?>
                                    <div class="flexbox_item">          
                                        <a class="log" href="<?= base_url()?>Login">Login</a>
                                        <a class="log" href="<?= base_url()?>login/signup">Sign Up</a>
                                    </div>
                                <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>










         <section class="sec_slider">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <?php
                                                    $j = 0;
                                                    $home_banner = $this->cm->getData('*','tbl_home_banner');
                                                    // echo "<pre>"; print_r($home_banner); die;
                                                    foreach ($home_banner as $hb_val) 
                                                    {
                                                        ?>
                                                            <li data-target="#myCarousel" data-slide-to="<?= $j;?>" class="<?= ($j == 0) ? 'active' : ''; ?>"></li>
                                                        <?php
                                                    }
                                                    $j++;
                                                ?>
                                            </ol>
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                            <?php
                                            $k = 0;
                                            foreach ($home_banner as $hb_val)
                                            {
                                                ?> 
                                                    <div class="item <?= ($k == 0) ? 'active' : ''; ?>">
                                                        <img src="<?php echo base_url().$hb_val->home_banner_img_name; ?>" alt="Wooden Store">
                                                    </div>
                                                <?php
                                            $k++;
                                            }
                                            ?>
                                            </div>
                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </section>