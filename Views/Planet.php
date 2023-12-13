<?php 
		##  ****************** Appelle sur l'entête de la page  **********************  ##
    
    Initialisation::loadView('templates/header') ;
  
?>

  <div class="card">
    <section class="content-header">
      <div class="card-header p-0 pt-1 border-bottom-0">
        <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-Planet" role="tab" aria-controls="custom-tabs-three-Planet" aria-selected="false">Planet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-Mission" role="tab" aria-controls="custom-tabs-three-Mission" aria-selected="false">Astonaute</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-Astronaut" role="tab" aria-controls="custom-tabs-three-Astronaut" aria-selected="false">Mission</a>
          </li>
        </ul>
      </div>
    </section>
    <div class="card-body">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <div class="card card-info">
            <div class="card-header p-0 pt-1 border-bottom-0">
              <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-Planet" role="tab" aria-controls="custom-tabs-three-Planet" aria-selected="false">Add new Planet</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-Mission" role="tab" aria-controls="custom-tabs-three-Mission" aria-selected="false">List of Planet</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <form action="/action_page.php">
                <div class="form-group">
                  <label for="nom">Nom du planet</label>
                  <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="form-group">
                  <label for="circonferense">Circonférence</label>
                  <input type="number" class="form-control" id="circonferense" name="circonferense">
                </div>
                <div class="form-group">
                  <label for="distance_de_la_terre">Distance à la terre</label>
                  <input type="number" class="form-control" id="distance_de_la_terre" name="distance_de_la_terre">
                </div>
                <div class="form-group">
                  <label for="distance_de_la_terre">Documentation</label>
                  <textarea id="summernote"class="form-control" name="documentation">
                    La déscription<em>de</em> <u>cette</u> <strong>Nouvelle planet</strong>
                  </textarea>
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
        <div class="col-2"></div>
      </div>
    </div>
  </div>

<?php 
		##  ****************** Require le footer de la page  **********************  ##

    Initialisation::loadView('templates/footer') ;
  
?>