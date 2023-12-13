<?php 
		##  ****************** Appelle sur l'entête de la page  **********************  ##
    
    Initialisation::loadView('templates/header') ;
  
?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="card-body">
        <div class="card card-info">
          <div class="card-header border-bottom">
            <thead class="content-center">
              <tr class="content-center">
                <th>État des missions</th>
                <th>Status deu mission</th>
                <th>Astronautes assignés au missions</th>
                <th>État de santé</th>
              </tr>
            </thead>
          </div>
          <div class="card-body">
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
              </tr>
            </tbody>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>


  <?php 
		##  ****************** Require le footer de la page  **********************  ##

    Initialisation::loadView('templates/footer') ;
  
   ?>