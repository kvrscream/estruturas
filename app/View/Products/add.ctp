<div class="row">
	<h1>Novo Produto</h1>
	<?php echo $this->Session->Flash(); ?>
	<div class="col-md-6">
		<?php echo $this->Form->create("Product", ["url" => ["Controller" => "Products", "action" => $form_action ], 'enctype'=>'multipart/form-data' ]); ?>
			<div class="col-md-12 form-group">
				<label>Nome:</label>
				<?php echo $this->Form->input('name', array("label" => false, "placeholder" => "Nome", "class" => "form-control", "required" => true)); ?>
			</div>	
			<div class="col-md-12 form-group">
				<label>Descrição:</label>
				<?php echo $this->Form->input('description', array("label" => false, "placeholder" => "Descrição", "class" => "form-control", "required" => true, "type" => "textarea")); ?>
			</div>
			<div class="col-md-12 form-group">
				<label>Categoria do Produto:</label>
				<?php echo $this->Form->input('category_id', array("label" => false, "class" => "form-control", "required" => true, "empty" => "Selecione", "options" => $categories)); ?>
			</div>		
			<div class="col-md-12 form-group">
				<label>Imagem de Pré Visualização:</label>
				<?php echo $this->Form->input('imageurl', array("label" => false, "placeholder" => "URL da Imagem", "class" => "form-control btn btn-primary", "type" => "file")); ?>
			</div>	
			<div class="col-md-12 form-group">
				<label>Imagem do Texto:</label>
				<?php echo $this->Form->input('imagedescription', array("label" => false, "placeholder" => "Descrição da Imagem", "class" => "form-control btn btn-primary", "type" => "file")); ?>
			</div>	
			<div class="col-md-12 form-group">
				<button class="btn btn-success">Salvar</button>
				<a href="<?php echo $this->base ?>/products/index">Voltar</a>
			</div>
		</div>
	</form>
</div>