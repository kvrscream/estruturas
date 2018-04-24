<div class="row">
	<h1>Obras</h1>
	<div class="pull-right">
		<a href="<?php echo $this->base ?>/works/add" class="btn btn-primary">Nova Obra</a>
	</div>
	<div class="col-md-12">
		<table class="table table-responsive">
			<thead>
				<th>Nome</th>
                <th>Categoria</th>
				<th>Ações</th>
			</thead>
			<tbody>
			<?php if(!empty($dados)) {?>
				<?php foreach ($dados as $data) { ?>
					<tr>
						<td><?php echo $data["Work"]["title"] ?></td>
						<td><?php echo $data["Category"]["name"] ?></td>
						<td>
							<a href="<?php echo $this->base.'/works/edit/'.$data["Work"]["id"] ?>" class="btn btn-primary">Editar</a>
							<a href="<?php echo $this->base.'/works/delete/'.$data["Work"]["id"] ?>" class="btn btn-danger">
								Excluir
							</a>
						</td>
					</tr>
				<?php } ?>
			<?php } else { ?>
						<tr>
							<td colspan="6">Nenhum cadastro foi encontrado.</td>
						</tr>
			<?php } ?>		
			</tbody>
		</table>
	</div>
</div>