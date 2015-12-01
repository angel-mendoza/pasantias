 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Alcaldia Sucre</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li>
			<?php echo $this->Html->link(__('Contribuyente'), array('controller' => 'contribuyentes' , 'action' => 'index')); ?>
        </li>
        <li>
			<?php echo $this->Html->link(__('Inmueble'), array('controller' => 'inmuebles' , 'action' => 'index')); ?>
        </li>
        <li>
			<?php echo $this->Html->link(__('Empresa'), array('controller' => 'empresas' , 'action' => 'index')); ?>
        </li>
        <li>
          <?php echo $this->Html->link(__('Usuario'), array('controller' => 'users' , 'action' => 'index')); ?>
        </li>


      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
        	<?php echo $this->Html->link('Salir',array('controller' => 'users', 'action' => 'logout')); ?>
        </li>
      </ul>
    </div>
  </div>
</nav>