
<?php $this->load->view('web/layout/navbar'); ?>

<!-- Header Area End Here -->
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?php echo base_url('/') ;?>">Home</a></li>
                <li><a href="<?php echo base_url('master/'.$produto->categoria_pai_meta_link) ;?>"><?php echo $produto->categoria_pai_nome; ?></a></li>
                <li class="active"><a href="<?php echo base_url('master/'.$produto->categoria_meta_link) ;?>"><?php echo $produto->categoria_nome; ?></a></li>

            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container">
        <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
            <!-- Product Details Left -->
                <div class="product-details-left">
                    <div class="product-details-images slider-navigation-1">

                        <?php foreach($fotos_produtos as $foto): ?>
                            <div class="lg-image">
                                <a class="popup-img venobox vbox-item" href="<?php echo base_url('uploads/produtos/small/'.$foto->foto_caminho ) ;?>" data-gall="myGallery">
                                    <img src="<?php echo base_url('uploads/produtos/'.$foto->foto_caminho ) ;?>" alt="<?php echo $produto->produto_nome ;  ?>">
                                </a>
                            </div>
                        <?php endforeach;  ?>
                    </div>
                    <div class="product-details-thumbs slider-thumbs-1">    
                        <?php foreach($fotos_produtos as $foto): ?>
                            <div class="sm-image"><img src="<?php echo base_url('uploads/produtos/small/'.$foto->foto_caminho ) ;?>" alt="<?php echo $produto->produto_nome ;  ?>"></div>
                        <?php endforeach;  ?>
                    </div>
                </div>
                <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content pt-60">
                    <div class="product-info">
                        <h2><?php echo $produto->produto_nome;  ?></h2>
                        <span class="product-details-ref">Codigo : <?php echo $produto->produto_codigo;  ?></span>
                
                        <div class="price-box pt-20">
                            <span class="new-price new-price-2"><?php echo 'R$&nbsp'. number_format($produto->produto_valor);  ?></span>
                        </div>
                   

                        <span class="product-details-ref">Qtd disponiveis : <?php echo $produto->produto_quantidade_estoque;  ?></span>
                        
                        <!-- Calcular frete -->
                        <div class="single-add-to-cart">
                            <?php 
                                $atributos =array(
                                    'class' => 'cart-quantity'
                                );
                            ?>

                            <?php echo form_open('ajax', $atributos); ?>
                                <div class="quantity">
                                    <label>Calcular frete</label>
                                    <div class="" style="min-width: 140px; float: left; margin-right: 10px; position: relative; text-align: left;">
                                        <input type="text" id="cep" name="cep"  class="cart-plus-minus-box cep"  placeholder="Informe seu CEP" >
                                       
                                    </div>
                                </div>

                                <button type="button" id="btn-calcula-frete" name="produto_id" data-id="<?php echo $produto->produto_id; ?>" class="add-to-cart bg-info" style="padding: 12px 20px">Calcular</button>

                                <div class="pt-10 text-info" id="retorno-frete">
                                    teste
                                </div>


                           <?php echo form_close(); ?>
                        </div>

                        <!-- Adicionar o produto -->
                        <div class="single-add-to-cart">
                            <form action="#" class="cart-quantity">
                                <div class="quantity">
                                    <label>Quantidade</label>
                                    <div class="cart-plus-minus">
                                        <input  class="cart-plus-minus-box mask-produto-qty" id="produto_quantidade"  name="produto_quantidade" 
                                            value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>

                               <button class="add-to-cart"> <a href="https://bit.ly/sousaracoes" target="_blank"><i class="fa fa-whatsapp"></i> Peça seu produto</a></button>
                            </form>
                        </div>


                        <div class="product-additional-info pt-25">
                            <div class="product-social-sharing pt-25">
                                <ul>
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                    <li class="instagram"><a href="https://instagram.com/sousa.racoes?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="block-reassurance">
                            <ul>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-check-square-o"></i>
                                        </div>
                                        <p>Venda disponivel só em Maracanaú (Ceará)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <p>Politica de entrega (Entregamos só na area Metropolitana de Maracanaú)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                        <p> Esse site utiliza uma politica de cookie</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>



<!-- content-wraper end -->
<!-- Begin Product Area -->
<div class="product-area pt-35">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">
                        <li><a class="active" data-toggle="tab" href="#description"><span>Descrição</span></a></li>
                       
                    
                    </ul>               
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <div class="tab-content">
            <div id="description" class="tab-pane active show" role="tabpanel">
                <div class="product-description">
                    <span><?php echo $produto->produto_descricao;  ?></span>
                </div>
            </div>

                       
        </div>
    </div>
</div>

