<?php $this->load->view('restrito/layout/navbar'); ?>
<?php $this->load->view('restrito/layout/sidebar') ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
              
          <!-- Tabela 1 -->
          <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $titulo; ?></h4>
                  </div>

                  <?php
                    $attributos = array(
                      'name' => 'form_core', 
                    ); 

                    if(isset($produto)){
                      $produto_id = $produto->produto_id; 
                    }else{
                      $produto_id = ''; 
                    }
                  ?>

                  <?php echo form_open('restrito/produtos/core/'.$produto_id,$attributos); ?>

                    <div class="card-body">


                    <?php  if(isset($produto)):   ?>
                     
                        <div class="form-row">
                          <div class="col-md-12">
                            <label>Meta Link do produto</label>
                            <p class="text-info"> <i class=""></i>  <?php echo $produto->produto_meta_link; ?> </p>
                          </div>
                        </div> 
                      
                    <?php  endif;   ?>
   

                      <!-- Primeira linha de dados -->
                      <div class="form-row">
                        <div class="form-group col-md-2">
                          <label>Codigo do produto</label>
                          <input type="text" name="produto_codigo" readonly class="form-control b-0" value="<?php echo (isset($produto) ? $produto->produto_codigo : $codigo_gerado) ; ?>">
                          <?php echo form_error('produto_codigo','<div class="text-danger">','</div>') ?>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Nome do produto</label>
                          <input type="text" name="produto_nome" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_nome : set_value('produto_nome')) ; ?>">
                          <?php echo form_error('produto_nome','<div class="text-danger">','</div>') ?>
                        </div>
                        <!-- Categoria -->
                        <div class="form-group col-md-2">
                          <label for="inpState">Categoria</label>
                          <select name="produto_categoria_id" id="inpState" class="form-control">

                          <option value="">Escolha..</option>

                          <?php foreach($categorias as $categoria) : ?>

                            <?php if(isset($produto)) : ?>

                              <option value="<?php echo ($categoria->categoria_id); ?>" <?php echo ($categoria->categoria_id == $produto->produto_categoria_id ? 'selected' : '');  ?> ><?php echo  $categoria->categoria_nome; ?></option>
                           
                            <?php else:  ?>

                              <option value="<?php echo ($categoria->categoria_id); ?>" ><?php echo  $categoria->categoria_nome; ?></option>

                            <?php endif;  ?>

                          <?php endforeach; ?>
                          </select>
                        </div>
                        <!-- Marca -->
                        <div class="form-group col-md-2">
                          <label for="inpState">Marca</label>
                          <select name="produto_marca_id" id="" class="form-control">

                          <option value="">Escolha..</option>
                          <?php foreach($marcas as $marca) : ?>

                            <?php if(isset($produto)) : ?>

                              <option value="<?php echo ($marca->marca_id); ?>" <?php echo ($marca->marca_id == $produto->produto_marca_id ? 'selected' : '');  ?> ><?php echo  $marca->marca_nome; ?></option>
                           
                            <?php else:  ?>

                              <option value="<?php echo ($marca->marca_id); ?>" ><?php echo  $marca->marca_nome; ?></option>

                            <?php endif;  ?>

                          <?php endforeach; ?>
                          </select>
                          <?php echo form_error('produto_marca_id','<div class="text-danger">','</div>') ?>

                        </div>
                      </div>
                      
                      <!-- Segunda linha de dados -->
                      <div class="form-row">
                        <!-- Valor  -->
                        <div class="form-group col-md-2">
                          <label>Valor de venda</label>
                          <input type="text" name="produto_valor" class="form-control money2" value="<?php echo (isset($produto) ? $produto->produto_valor : set_value('produto_valor')) ; ?>">
                          <?php echo form_error('produto_valor','<div class="text-danger">','</div>') ?>
                        </div>
                        <!-- Medida  -->
                        <div class="form-group col-md-2">
                          <label>Peso do produto</label>
                          <input type="number" name="produto_peso" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_peso : set_value('produto_peso')) ; ?>">
                          <?php echo form_error('produto_peso','<div class="text-danger">','</div>') ?>
                        </div>
                        <div class="form-group col-md-2">
                          <label>Altura do produto</label>
                          <input type="number" name="produto_altura" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_altura : set_value('produto_altura')) ; ?>">
                          <?php echo form_error('produto_altura','<div class="text-danger">','</div>') ?>
                        </div>
                        <div class="form-group col-md-2">
                          <label>Largura do produto</label>
                          <input type="number" name="produto_largura" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_altura : set_value('produto_altura')) ; ?>">
                          <?php echo form_error('produto_largura','<div class="text-danger">','</div>') ?>
                        </div>
                        <div class="form-group col-md-2">
                          <label>Comprimento do produto</label>
                          <input type="number" name="produto_comprimento" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_comprimento : set_value('produto_comprimento')) ; ?>">
                          <?php echo form_error('produto_comprimento','<div class="text-danger">','</div>') ?>
                        </div>
                      </div>

                      <!-- Terza linha de dados -->
                      <div class="form-row">
                        <div class="form-group col-md-2">
                          <label>Qtd Estoque</label>
                          <input type="number" name="produto_quantidade_estoque" class="form-control" value="<?php echo (isset($produto) ? $produto->produto_quantidade_estoque : set_value('produto_quantidade_estoque')) ; ?>">
                          <?php echo form_error('produto_quantidade_estoque','<div class="text-danger">','</div>') ?>
                        </div>

                        <div class="form-group col-md-2">
                          <label >Ativo</label>
                          <select name="produto_ativo" id="inpState" class="form-control">

                          <?php if(isset($produto)) : ?>

                            <option value="1" <?php echo ($produto->produto_ativo == 1? 'selected' : ''  ) ; ?> >Sim</option>
                            <option value="0" <?php echo ($produto->produto_ativo == 0? 'selected' : ''  ) ; ?> >N??o</option>
                          <?php else:  ?>

                            <option value="1" >Sim</option>
                            <option value="0" >N??o</option>

                          <?php endif;  ?>
                            
                          </select>
                        </div>

                        <div class="form-group col-md-2">
                          <label >Produto em destaque</label>
                          <select name="produto_destaque" id="inpState" class="form-control">

                          <?php if(isset($produto)) : ?>

                            <option value="1" <?php echo ($produto->produto_destaque == 1? 'selected' : ''  ) ; ?> >Sim</option>
                            <option value="0" <?php echo ($produto->produto_destaque == 0? 'selected' : ''  ) ; ?> >N??o</option>
                          <?php else:  ?>

                            <option value="1" >Sim</option>
                            <option value="0" >N??o</option>

                          <?php endif;  ?>
                            
                          </select>
                        </div>

                        <div class="form-group col-md-2">
                          <label >Controla estoque</label>
                          <select name="produto_controlar_estoque" id="inpState" class="form-control">

                          <?php if(isset($produto)) : ?>

                            <option value="1" <?php echo ($produto->produto_controlar_estoque == 1? 'selected' : ''  ) ; ?> >Sim</option>
                            <option value="0" <?php echo ($produto->produto_controlar_estoque == 0? 'selected' : ''  ) ; ?> >N??o</option>
                          <?php else:  ?>

                            <option value="1" >Sim</option>
                            <option value="0" >N??o</option>

                          <?php endif;  ?>
                            
                          </select>
                        </div>



                      </div>


                      <!-- Quarta linha de dados -->
                      <div class="form-row">
                        <div class="form-group col-md-8">
                          <label>Descri????o do produto</label>
                          <textarea name="produto_descricao" rows="2" style="min-height : 100px" class="form-control"><?php echo (isset($produto) ? $produto->produto_descricao : set_value('produto_descricao')) ; ?></textarea>
                          <?php echo form_error('produto_descricao','<div class="text-danger">','</div>') ?>
                        </div>

                      </div>


                      <!-- Quinta linha de dados -->
                      <div class="form-row">
                        <div class="form-group col-md-8">
                          <label>Imagens do produto</label>
                          <div id="fileuploader"> 
                            
                          </div>

                          <div id="erro_uploaded" class="text-danger">

                          </div>

                          <?php echo form_error('fotos_produtos', '<div class="text-danger">','</div>'); ?>
                        </div>
                      </div>
                      
                      <!-- Sexta linha de dados -->
                      <div class="form-row">
                        <div class="col-md-12">

                          <?php if(isset($produto)): ?>

                            <div id="uploaded_image" class="text-danger">
                              <?php foreach($fotos_produto as $foto): ?>
                                  <ul style="list-style: none; display: inline-block">
                                    <li>
                                      <img src="<?php echo base_url('uploads/produtos/'.$foto->foto_caminho) ;?>" width="80" class="img-thumbnail mr-1 mb-2"  >
                                      <input type="hidden" name="fotos_produtos[]" value="<?php echo $foto->foto_caminho ;?>">
                                      <a href="javascript:(void)" class="btn btn-danger d-block btn-icon mx-auto mb-30 btn-remove"><i class="fas fa-times"></i></a>
                                    </li>
                                  </ul>
                              <?php endforeach; ?>
                            </div>

                          <?php else: ?>

                            <div id="uploaded_image" class="text-danger">

                            </div>

                          <?php endif; ?>
                        </div>
                      </div>


                      <?php if(isset($produto)): ?>
                        <input type="hidden" name="produto_id" value="<?php echo $produto->produto_id; ?>">
                      <?php endif;  ?>
                      


                    </div>
                    <div class="card-footer">
                      <button class="btn btn-primary mr-2">Salvar</button>
                      <a href="<?php echo base_url('restrito/produtos'); ?>" class="btn btn-dark">Voltar</a>
                    </div>

                  <?php echo form_close(); ?>
          

                </div>
              </div>
            </div>




          </div>
        </section>




        <?php $this->load->view('restrito/layout/sidebar_settings') ?>
      </div>

     