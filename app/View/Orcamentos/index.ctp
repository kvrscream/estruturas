<!--Breadcrump start-->
<section class="breadcrumbSec">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-left">
            <div class="breadCont">
               <h3 class="brTitle">Orçamento</h3>
               <div class="bredCrumb">
                  <a href="#">Home</a>
                  <span>/</span>
                  <a href="#">Orçamento</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Breadcrump End-->
<!--Blog start-->
<section class="contactSec2">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h2 class="commentTitle cont">Solicite um Orçamento</h2>
            <hr>
            <div class="commentForm">
               <?php echo $this->Session->flash(); ?>
               <?php echo $this->Form->create('Orcamentos', ["url" => ["Controller" => "Orcamentos", "action" => "sendmail"]]);?>
                  <div class="form-group col-sm-12">
                     <label >Nome Completo</label>
                     <?php echo $this->Form->input('nome', array("label" => false, "placeholder" => "Nome", "class" => "form-control", "required" => true)); ?>
                  </div>
                  <div class="form-group col-sm-4">
                     <label >Telefone</label>
                     <?php echo $this->Form->input('fone', array("label" => false, "placeholder" => "Fone", "class" => "form-control")); ?>                        
                  </div>
                  <div class="form-group col-sm-4">
                     <label >Celular</label>
                     <?php echo $this->Form->input('celular', array("label" => false, "placeholder" => "Celular", "class" => "form-control")); ?>                        
                  </div>                  
                  <div class="form-group  col-sm-4">
                     <label >Tipo</label>
                     <?php echo $this->Form->input('categoria', array("label" => false, "class" => "form-control", "required" => true,
                        "options" => ["Residencial" => "Residencial", "Condomínio" => "Condomínio", "Empresa" => "Empresa"], "empty" => "Selecione")); ?>
                  </div>
                  <div class="form-group col-sm-12">
                     <label >Localização</label>   
                     <hr>                  
                  </div>
                  <div class="form-group col-sm-3">
                     <label >Cep</label>
                     <?php echo $this->Form->input('cep', array("label" => false, "placeholder" => "CEP", "class" => "form-control", "id"=>"cep", "size"=>"10", "maxlength"=>"9" )); ?>                                            
                  </div>
                  <div class="form-group col-sm-8">
                     <label >Endereço</label>
                     <?php echo $this->Form->input('endereco', array("label" => false, "placeholder" => "Endereço", "class" => "form-control", "id"=>"endereco")); ?>                        
                  </div>
                  <div class="form-group  col-sm-1">
                  <label >Número</label>
                     <?php echo $this->Form->input('numero', array("label" => false, "placeholder" => "Número", "class" => "form-control", "id"=>"numero")); ?>                        
                  </div>
                  <div class="form-group col-sm-6">
                  <label >Bairro</label>
                     <?php echo $this->Form->input('bairro', array("label" => false, "placeholder" => "Bairro", "class" => "form-control", "id"=>"bairro")); ?>                        
                  </div>
                  <div class="form-group col-sm-6">
                  <label >Cidade</label>
                     <?php echo $this->Form->input('cidade', array("label" => false, "placeholder" => "Cidade", "class" => "form-control", "id"=>"cidade")); ?>                        
                  </div>
                  <div class="form-group col-sm-6">
                  <label >Estado</label>
                     <?php echo $this->Form->input('estado', array("label" => false, "placeholder" => "Estado", "class" => "form-control", "id"=>"estado")); ?>                        
                  </div>
                  <div class="form-group col-sm-12">
                     <label >Metragem Aproximada</label>
                     <hr>
                  </div>
                  <div class="form-group col-sm-6">
                     <label >Comprimento</label>
                     <?php echo $this->Form->input('comprimento', array("label" => false, "placeholder" => "Comprimento", "class" => "form-control")); ?>                        
                  </div>
                  <div class="form-group col-sm-6">
                     <label >Largura</label>
                     <?php echo $this->Form->input('largura', array("label" => false, "placeholder" => "Largura", "class" => "form-control")); ?>                        
                  </div>
                  <div class="form-group  col-sm-12">
                     <label >Selecione os produtos</label>
                     <select name="produto" class="form-control">
                        <option value="">Selecione</option>
                        <option value="Coberturas em Policarbonato">Coberturas em Policarbonato</option>
                        <option value="Estruturas Metálicas">Estruturas Metálicas</option>
                        <option value="Galpões">Galpões</option>
                        <option value="Fechamento em Vidro">Fechamento em Vidro</option>
                        <option value="Coberturas Metálicas">Coberturas Metálicas</option>
                        <option value="Portão Automático">Portão Automático</option>
                        <option value="Mezaninos">Mezaninos</option>
                        <option value="Escada / Corrimão">Escada / Corrimão</option>
                        <option value="Guarda Corpo">Guarda Corpo</option>
                        <option value="Revestimento de Fachada ACM">Revestimento de Fachada ACM</option>
                        <option value="Sacadas">Sacadas</option>
                        <option value="Outros Produtos">Outros Produtos</option>
                        <option value="">Outros Produtos</option>
                     </select>                     
                  </div>
                  <div class="form-group col-sm-12">
                     <label >Prioridade da Obra</label>
                     <?php echo $this->Form->input('prioridade', array("label" => false, "class" => "form-control", "required" => true,
                        "options" => ["Baixa" => "Baixa", "Média" => "Média", "Alta" => "Alta"], "empty" => "Selecione")); ?>
                  </div>
                  <div class="form-group col-sm-12">
                     <label >Descreva sua solicitação</label>
                     <?php echo $this->Form->input('obs', array("label" => false, "placeholder" => "Observação", "class" => "form-control", "type" => "textarea")); ?>                        
                  </div>
                  <div class="form-group col-sm-12">
                     <label >Email para confirmação</label>
                     <?php echo $this->Form->input('email', array("label" => false, "placeholder" => "Email", "class" => "form-control")); ?>                        
                  </div>
               
                  <div class="form-group col-sm-6">
                  <button class="btn btn-primary btn-block">Enviar</button>	
                  </div>
                  <div class="form-group col-sm-6">
                  <button class="btn btn-primary btn-block">Limpar Formulário</button>		  
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Blog End-->
<?php
    echo $this->Html->script("jquery");
    echo $this->Html->script("cep");
    ?>