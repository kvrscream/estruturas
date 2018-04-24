<div class="row">
  <div class="col-md-8">
    <img src="<?php echo $this->base?>/img/logo.png" class="img-responsive" alt="login mezanino unimetal" />
  </div>  
  <div class="col-md-4">
	  <div class="card-header">Login:</div>
	  <?php echo $this->Session->Flash(); ?>
      <div class="card-body">
	    <?php echo $this->Form->create("User", ["url" => ["Controller" => "Users", "action" => "login" ]]); ?>		  
          <div class="form-group">
            <label >Usuário</label>
            <?php echo $this->Form->input('username', array("label" => false, "placeholder" => "Usuário", "class" => "form-control", "required" => true)); ?>
          </div>
          <div class="form-group">
            <label >Senha</label>
            <?php echo $this->Form->input('password', array("label" => false, "placeholder" => "Senha", "class" => "form-control","required" => true)); ?>
          </div>
          <div class="col-md-4">		  
            <button class="btn btn-primary btn-block">Entrar</button>		  
          </div>
        </form>
      </div>
    </div>  
</div>    