<?php 
		##  ****************** Appelle sur l'entête de la page  **********************  ##
    
    Initialisation::loadView('templates/header');
  
?>

    <div class="row mt-5 mb-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="login-box">
            <div class="card card-outline card-primary">
               <div class="card-header text-center">
                 <a href="../../index2.html" class="h1"><b>Stellar</b>Tech</a>
               </div>
               <div class="card-body">
                 <p class="login-box-msg">Se conneté(e)</p>
                 <form action="../../index3.html" method="post">
                   <div class="input-group mb-3">
                     <input type="email" class="form-control" placeholder="Email">
                     <div class="input-group-append">
                       <div class="input-group-text">
                         <span class="fas fa-envelope"></span>
                       </div>
                     </div>
                   </div>
                   <div class="input-group mb-3">
                     <input type="password" class="form-control" placeholder="Password">
                     <div class="input-group-append">
                       <div class="input-group-text">
                         <span class="fas fa-lock"></span>
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-8"></div>
                     <div class="col-4">
                       <button type="submit" class="btn btn-primary btn-block form-control">Sign In</button>
                     </div>
                   </div>
                 </form>
                 <div class="row">
                    <div class="col-md-9">
                        <p class="mb-0">
                            <a href="#" class="text-center" data-toggle="modal" data-target="#modal-info">Crée une nouvelle compt</a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <small class="syana">
                            <a href="https://sayna.space/">by-@Sayna</a>
                        </small>
                    </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="modal fade" id="modal-info">
      <div class="modal-dialog">
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h4 class="modal-title">Crée une nouvelle compt</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class=" ">
              <div class="card-header text-center">
                <a href="#" class="h1"><b>Stellar</b>Tech</a>
              </div>
              <div class="card-body">
                <form action="../../index.html" method="post">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Full name">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8"></div>
                    <!-- /.col -->
                    <div class="col-4">
                      <button type="submit" class="btn btn-outline-light">Enregistrer</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
              </div>
              <!-- /.form-box -->
            </div><!-- /.card -->
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Déjat un membre</button>
            <small class="syana">
              <a href="https://sayna.space/" style="color: white;">by-@Sayna</a>
            </small>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
      <!-- /.modal -->
<?php 
		##  ****************** Require le footer de la page  **********************  ##

    Initialisation::loadView('templates/footer') ;
  
?>