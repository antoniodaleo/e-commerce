<!-- Begin Header Area -->



<header>
    <!-- Begin Header Top Area -->
    <div class="header-top">
        <div class="container">
            <div class="row">
            <!-- Begin Header Top Left Area -->
                <div class="col-lg-3 col-md-4">
                    <div class="header-top-left">
                        <ul class="phone-wrap">
                        <?php $sistema =info_header_footer(); ?>
                            <li><i class="fa fa-whatsapp"></i>&nbsp;&nbsp; <span><?php echo $sistema->sistema_telefone_movel ?></span></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Top Left Area End Here -->
                <!-- Begin Header Top Right Area -->
                <div class="col-lg-9 col-md-8">
                    <div class="header-top-right">
                        <ul class="ht-menu">
                        <!-- Lista Marcas -->
                        <li>
                            <div class="ht-setting-trigger"><span>Grandes Marcas</span></div>
                            <div class="setting ht-setting">
                                <ul class="ht-setting-list">                      
                                    <?php $grandes_marcas = grandes_marcas_navbar(); ?>
                                    <?php foreach($grandes_marcas as $marca): ?>
                                        <li><a href="<?php echo base_url('marca/'.$marca->marca_meta_link); ?>"><?php echo $marca->marca_nome; ?></a></li>                            
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </li>                
                        <!-- Setting Area End Here -->
                      
                        <!-- Begin Language Area -->
                        <li>
                            <i class="fa fa-fax"></i><span>&nbsp; &nbsp;Localização</span>  :
                           <a href="#"><span> Maracanaú (Ceará)</span></a> 
                                            
                        </li>
                        <!-- Language Area End Here -->
                    </ul>
                </div>
            </div>
            <!-- Header Top Right Area End Here -->
        </div>
    </div>
</div>
<!-- Header Top Area End Here -->
<!-- Begin Header Middle Area -->
<div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
    <div class="container">
        <div class="row">
        <!-- Begin Header Logo Area -->
            <div class="col-lg-3">
                <div class="logo pb-sm-30 pb-xs-30">     
                    <a href="<?php echo base_url('/') ?>">
                        <img width="180px" src="<?php echo base_url('assets/web/images/menu/logo/1.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <!-- Header Logo Area End Here -->
            <!-- Begin Header Middle Right Area -->
            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
            <!-- Begin Header Middle Searchbox Area -->

            <?php 
                $atributos = array(
                    'class' =>'hm-searchbox', 
                );
            
            ?>

            <?php echo form_open('busca', $atributos);  ?>    
                
                    <ul class="ht-menu">
                        <!-- Lista Marcas -->
                        <li>
                            <div class="ht-setting-trigger"><span>Marcas</span></div>
                            <div class="setting ht-setting">
                                <ul class="ht-setting-list">                      
                                    <?php $grandes_marcas = grandes_marcas_navbar(); ?>
                                    <?php foreach($grandes_marcas as $marca): ?>
                                    <li><a href="<?php echo base_url('marca/'.$marca->marca_meta_link); ?>"><?php echo $marca->marca_nome; ?></a></li>                            
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </li>  
                        
                    </ul>      
                    
                    
                    
                <input type="text" name="busca" placeholder="Qual produto voce esta procurando ...">
                <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
            <?php echo form_close();  ?> 



                <!-- Header Middle Searchbox Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="header-middle-right">
                    <ul class="hm-menu">
                    <!-- Begin Header Middle Wishlist Area -->
                        <li class="hm-wishlist">
                            <a href="https://bit.ly/sousaracoes" target="_blank">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </li>
                        <!-- Header Middle Wishlist Area End Here -->
                    </ul>
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
            <!-- Header Middle Right Area End Here -->
        </div>
    </div>
</div>
<!-- Header Middle Area End Here -->
<!-- Begin Header Bottom Area -->
<div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
    <div class="container">
        <div class="row">                    
            <div class="col-lg-12">
            <!-- Begin Header Bottom Menu Area -->
                <div class="hb-menu">
                    <nav>
                        <ul>
                            <li class="dropdown-holder"><a href="<?php echo base_url('/') ?>">Home</a></li>
                                <?php $categorias_pai = categorias_pai_navbar(); ?>
                                <?php foreach($categorias_pai as $cat_pai): ?>              
                                    <?php $categorias_filhas = categorias_filhas_navbar($cat_pai->categoria_pai_id); ?>
                                    <li class="dropdown-holder"><a href="<?php echo base_url('master/'.$cat_pai->categoria_pai_meta_link); ?>"> &nbsp; <?php echo $cat_pai->categoria_pai_nome; ?></a>  
                                        <ul class="hb-dropdown">
                                        <?php foreach ($categorias_filhas as $cat_filha): ?>   
                                            <li class="active"><a href="<?php echo base_url('categoria/'.$cat_filha->categoria_meta_link); ?>"><?php echo $cat_filha->categoria_nome; ?></a></li>
                                        <?php endforeach; ?>   
                                        </ul>
                                    </li>
                                <?php endforeach; ?>   

                        </ul>
                    </nav>
                </div>
                <!-- Header Bottom Menu Area End Here -->
            </div>
        </div>
    </div>
</div>
<!-- Header Bottom Area End Here -->

<!-- Begin Mobile Menu Area -->
<div class="mobile-menu-area d-lg-none d-xl-none col-12">
    <div class="container"> 
        <div class="row">
            <div class="mobile-menu">
        </div>
    </div>
</div>
</div>
<!-- Mobile Menu Area End Here -->
</header>
<!-- Header Area End Here -->