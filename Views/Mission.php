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
              <a class="nav-link" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-Planet" role="tab" aria-controls="custom-tabs-three-Planet" aria-selected="false">Ajouter une nouvelle mission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-Mission" role="tab" aria-controls="custom-tabs-three-Mission" aria-selected="false">Edit mission</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="nom">Nom du mission</label>
              <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
              <label for="circonferense">Nom du vaisseau</label>
              <input type="text" class="form-control" id="nom-vaisseau" name="nom-vaisseau">
            </div>
            <div class="form-group">
              <label for="distance_de_la_terre">Nom de l'astronaut</label>
              <input type="text" class="form-control" id="nom-de-astronaut" name="nom-de-astronaut">
            </div>
            <div class="form-group">
              <label for="distance_de_la_terre">Nom de la planet</label>
              <input type="text" class="form-control" id="nom-du-planet" name="nom-du-planet">
            </div>
            <div class="form-group">
              <label>Début du mission</label>
              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label>Fin du mission</label>
              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-10"></div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-primary form-control">Enregistrer</button>
              </div>
          </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>


<?php 
		##  ****************** Require le footer de la page  **********************  ##

    Initialisation::loadView('templates/footer') ;
  
?>