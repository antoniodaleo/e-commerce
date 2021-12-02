
<?php $this->load->view('web/layout/navbar'); ?>



<!-- Begin Product Area -->
<div class="product-area ">
    <div class="container">

        

        <!-- Primeira linha de produtos destaques -->
        <div class="row pt-45 pb-45">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">
                        <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Novidades</span></a></li>
                    </ul>               
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <!-- Primeira linha de produtos destaques -->
        <div class="tab-content">
            <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                <div class="row">
                    <div class="product-active owl-carousel">

                    <?php foreach( $produtos_destaques as $pro): ?>
                        <div class="col-lg-12">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="<?php echo base_url('produto/'.$pro->produto_meta_link)?>">
                                <img src="<?php  echo base_url('uploads/produtos/'.$pro->foto_caminho) ?>" alt="Li's Product Image">
                                </a>
                                <span class="sticker">Novo</span>
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="product-review">
                                        <h5 class="manufacturer">
                                            <a href="shop-left-sidebar.html">Avaliaçoes</a>
                                        </h5>
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <h4><a class="product_name" href="single-product.html"><?php echo word_limiter($pro->produto_nome, 5) ; ?></a></h4>
                                <div class="price-box">
                                    <span class="new-price"><?php echo 'R$&nbsp'.number_format($pro->produto_valor, 2); ?></span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="<?php echo base_url('produto/'.$pro->produto_meta_link); ?>">Leia mais</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-wrap end -->
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
      
        <!-- Begin Li's Static Banner Area -->
        <div class="li-static-banner pt-10 pb-45">
            <div class="container">
                <div class="row">
                <!-- Begin Single Banner Area -->
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="single-banner">
                        <a href="https://bit.ly/sousaracoes" target="_blank">
                            <img src="assets/web/images/banner/1_3.png" alt="Promoção Pet shop" title="PetShop Maracanau">
                        </a>
                    </div>
                </div>
                <!-- Single Banner Area End Here -->
                <!-- Begin Single Banner Area -->
                <div class="col-lg-4 col-md-4 text-center pt-xs-30" target="_blank">
                    <div class="single-banner">
                        <a href="https://bit.ly/sousaracoes">
                            <img src="assets/web/images/banner/1_2.png" alt="Promoção Pet shop" title="PetShop Maracanau">
                        </a>
                    </div>
                </div>
                <!-- Single Banner Area End Here -->
                <!-- Begin Single Banner Area -->
                <div class="col-lg-4 col-md-4 text-center pt-xs-30" target="_blank">
                    <div class="single-banner">
                        <a href="https://bit.ly/sousaracoes">
                            <img src="assets/web/images/banner/1_1.jpeg" alt="Promoção Pet shop" title="Sousa Rações">
                        </a>
                    </div>
                </div>
                <!-- Single Banner Area End Here -->
                </div>
            </div>
        </div>
        <!-- Li's Static Banner Area End Here -->

        <!-- Primeira linha de produtos cachorro -->
        <div class="row pt-60 pb-45">
            <div class="col-lg-12 ">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">
                        <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Ração cachorro</span></a></li>
                    </ul>               
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <!-- Primeira linha de produtos cachorro -->
        <div class="tab-content">
            <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                <div class="row">
                    <div class="product-active owl-carousel">

                    <?php foreach( $produtos_cachorros as $pro): ?>
                        <div class="col-lg-12">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="<?php echo base_url('produto/'.$pro->produto_meta_link)?>">
                                <img src="<?php  echo base_url('uploads/produtos/'.$pro->foto_caminho) ?>" alt="Li's Product Image">
                                </a>
                                <span class="sticker">Dog</span>
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="product-review">
                                        <h5 class="manufacturer">
                                            <a href="shop-left-sidebar.html">Avaliaçoes</a>
                                        </h5>
                                    <div class="rating-box">
                                        <ul class="rating">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <h4><a class="product_name" href=""><?php echo word_limiter($pro->produto_nome, 5) ; ?></a></h4>
                                <div class="price-box">
                                    <span class="new-price"><?php echo 'R$&nbsp'.number_format($pro->produto_valor, 2); ?></span>
                                </div>
                            </div>
                            <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="<?php echo base_url('produto/'.$pro->produto_meta_link); ?>">Leia mais</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-wrap end -->
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>

        <!-- Asseccorios -->
        <div class="group-featured-product pt-60 pb-40 pb-xs-25">
            <div class="container">
                <div class="row">
                    <!-- Begin Featured Product Area -->
                    <div class="col-lg-4">
                        <div class="featured-product">
                            <div class="li-section-title">
                                <h2>
                                    <span>Acessorios Cachorro</span>
                                </h2>
                            </div>
                            <div class="featured-product-active-2 owl-carousel">
                                <div class="featured-product-bundle">
                                    <?php foreach($acessorio_cachorro as $acessorio): ?>
                                    <div class="row">
                                        <div class="group-featured-pro-wrapper">
                                            <div class="product-img">
                                                <a href="<?php echo base_url('produto/'.$acessorio->produto_meta_link)?>">
                                                    <img src="<?php  echo base_url('uploads/produtos/'.$acessorio->foto_caminho) ?>" alt="Li's Product Image">
                                                </a>
                                            </div>
                                            <div class="featured-pro-content">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href=""><?php echo word_limiter($acessorio->produto_nome, 5) ; ?></a>
                                                    </h5>
                                                </div>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="featured-price-box">
                                                    <span class="new-price"><?php echo 'R$&nbsp'.number_format($acessorio->produto_valor, 2); ?></span>
                                                </div>
                                                <h4><a class="featured-product-name" href="<?php echo base_url('produto/'.$acessorio->produto_meta_link); ?>">Leia mais</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Featured Product Area End Here -->
                    <!-- Begin Featured Product Area -->
                    <div class="col-lg-4">
                            <div class="featured-product pt-sm-10 pt-xs-25">
                                <div class="li-section-title">
                                    <h2>
                                        <span>Higiene Cachorro</span>
                                    </h2>
                                </div>
                                <div class="featured-product-active-2 owl-carousel">
                                    <div class="featured-product-bundle">
                                        <?php foreach($higiene_cachorro as $higiene): ?>
                                        <div class="row">
                                            
                                            <div class="group-featured-pro-wrapper">
                                                <div class="product-img">
                                                    <a href="<?php echo base_url('produto/'.$higiene->produto_meta_link)?>">
                                                        <img src="<?php  echo base_url('uploads/produtos/'.$higiene->foto_caminho) ?>" alt="Li's Product Image">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-content">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href=""><?php echo word_limiter($higiene->produto_nome, 5) ; ?></a>

                                                        </h5>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="featured-price-box">
                                                        <span class="new-price"><?php echo 'R$&nbsp'.number_format($higiene->produto_valor, 2); ?></span>
                                                    </div>
                                                    <h4><a class="featured-product-name" href="<?php echo base_url('produto/'.$higiene->produto_meta_link); ?>">Leia mais</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                        <!-- Begin Featured Product Area -->
                        <div class="col-lg-4">
                            <div class="featured-product pt-sm-10 pt-xs-25">
                                <div class="li-section-title">
                                    <h2>
                                        <span>Acessorios Gato</span>
                                    </h2>
                                </div>
                                <div class="featured-product-active-2 owl-carousel">
                                    <div class="featured-product-bundle">
                                        <?php foreach($acessorio_gato as $acc): ?>
                                        <div class="row">
                                            <div class="group-featured-pro-wrapper">
                                                <div class="product-img">
                                                    <a href="<?php echo base_url('produto/'.$acc->produto_meta_link)?>">
                                                        <img src="<?php  echo base_url('uploads/produtos/'.$acc->foto_caminho) ?>" alt="Li's Product Image">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-content">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html"><?php echo word_limiter($acc->produto_nome, 5) ; ?></a>
                                                        </h5>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="featured-price-box">
                                                        <span class="new-price"><?php echo 'R$&nbsp'.number_format($acc->produto_valor, 2); ?></span>
                                                    </div>
                                                    <h4><a class="featured-product-name" href="<?php echo base_url('produto/'.$acc->produto_meta_link); ?>">Leia mais</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                    </div>
                </div>
        </div>
            <!-- Group Featured Product Area End Here -->


        <!-- Localização -->
        <section class="product-area li-laptop-product pt-640 ">
            <div class="container">
                <div class="row">
                <!-- Begin Li's Section Area -->
                    <div class="col-lg-12">
                        <div class="li-section-title">
                            <h2 id="localizacao">
                                <span>Localização</span>
                            </h2>  
                        </div>
                        <div class="row">   
                            <div class="col-lg-12">
                                
                                <div id="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5629.538045765826!2d-38.623517718745624!3d-3.8776583741995374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7537286032a75%3A0x5200cfde85fc5358!2sR.%20Quatorze%2C%20454%20-%20Jereissati%20I%2C%20Maracana%C3%BA%20-%20CE%2C%2061900-250!5e0!3m2!1spt-BR!2sbr!4v1631666873788!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            
                            </div>
                        </div>
                    </div>
                    <!-- Li's Section Area End Here -->
                </div>
            </div>
        </section>
    </div>
</div>

    </div>
           
           
          
           


