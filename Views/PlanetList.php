<?php 
		##  ****************** Appelle sur l'entête de la page  **********************  ##
    
    Initialisation::loadView('templates/header') ;
  
?>


<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="card-body">
      <div class="card card-info">
        <div class="card-header p-0 pt-1 border-bottom-0">
          <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-Planet" role="tab" aria-controls="custom-tabs-three-Planet" aria-selected="false">Ajouter une nouvelle Planet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-Mission" role="tab" aria-controls="custom-tabs-three-Mission" aria-selected="false">Modifier une planet</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <form action="/action_page.php">
            <div class="card">
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                    <li>
                      <!-- checkbox -->
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                        <label for="todoCheck1"></label>
                      </div>
                      <!-- todo text -->
                      <span class="text">Design a nice theme</span>
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash"></i>
                      </div>
                    </li>
                </ul>
            </div>
          </form> 
        </div>
      </div>
    </div>
  <div class="col-md-2"></div>
</div>


<?php 
		##  ****************** Require le footer de la page  **********************  ##

    Initialisation::loadView('templates/footer') ;
  
?>