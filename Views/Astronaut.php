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
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="card card-info">
            <div class="card-header">
              <h2>Astronaut</h2>
            </div>
            <div class="card-body">
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Nom">
                  </div>
                  <div class="form-group">
                    <label for="sel1">Etat de santé</label>
                    <select class="form-control" id="etat-de-sante" name="etat-de-sante">
                      <option>Etat de santé</option>
                      <option>Bon</option>
                      <option>Malade</option>
                      <option>Décédé</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Taille</label>
                    <input type="number" class="form-control" id="taille" placeholder="Taille">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Poids</label>
                    <input type="number" class="form-control" id="taille" placeholder="Poids">
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
      <div class="col-md-2"></div>
    </div>
  </div>

<?php 
		##  ****************** Require le footer de la page  **********************  ##

    Initialisation::loadView('templates/footer') ;
  
   ?>