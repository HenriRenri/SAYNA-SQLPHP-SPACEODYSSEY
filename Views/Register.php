<?php 
		##  ****************** Appelle sur l'entête de la page  **********************  ##
    
    Initialisation::loadView('templates/header') ;
  
?>

    <div class="row mt-5 mb-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <div class="login-box">
             <!-- /.login-logo -->
            <div class="card card-outline card-primary">
               <div class="card-header text-center">
                 <a href="../../index2.html" class="h1"><b>Stellar</b>Tech</a>
               </div>
               <div class="card-body">
                 <p class="login-box-msg">Sign in to start your session</p>

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
                            <a href="register.html" class="text-center">Register a new membership</a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <small class="syana">
                            <a href="https://sayna.space/">by-@Sayna</a>
                        </small>
                    </div>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
<?php 
		##  ****************** Require le footer de la page  **********************  ##

    Initialisation::loadView('templates/footer') ;
  
?>