<div class="row">
	<h1>Nova Obra</h1>
	<?php echo $this->Session->Flash(); ?>
	<div class="col-md-6">
		<?php echo $this->Form->create("Work", ["url" => ["Controller" => "Products", "action" => $form_action ], 'enctype'=>'multipart/form-data' ]); ?>
			<div class="col-md-12 form-group">
				<label>Título:</label>
				<?php echo $this->Form->input('title', array("label" => false, "placeholder" => "Título", "class" => "form-control", "required" => true)); ?>
			</div>	
			<div class="col-md-12 form-group">
				<label>Descrição:</label>
				<?php echo $this->Form->input('text', array("label" => false, "placeholder" => "Descrição", "class" => "form-control", "required" => true, "type" => "textarea")); ?>
			</div>
			<div class="col-md-12 form-group">
				<label>Categoria do Produto:</label>
				<?php echo $this->Form->input('category_id', array("label" => false, "class" => "form-control", "required" => true, "empty" => "Selecione", "options" => $categories)); ?>
			</div>		
			<div class="col-md-12 form-group">
				<label>Imagem:</label>
				<?php echo $this->Form->input('image', array("label" => false, "placeholder" => "Imagem", "class" => "form-control btn btn-primary", "type" => "file")); ?>
			</div>	
			<div class="col-md-12 form-group">
				<button class="btn btn-success">Salvar</button>
				<a href="<?php echo $this->base ?>/works/index">Voltar</a>
			</div>
		</div>
	</form>
</div>