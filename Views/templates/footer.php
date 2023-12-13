        <footer class="main-footer">
      
          <div class="float-right d-none d-sm-inline">Réalisé par <strong><a href="https://github.com/HenriRenri">Nal'aina</a></strong>.
          </div>
      
          <strong>Copyright &copy; Décembre-2023 <a href="#">Stellar Tech</a>.</strong> 
        </footer>
      
      </div>
      
    <!-- APPEL DES  SCRIPTS -->
    <?php 
      ##  *********************  Appelle pour tout les style js de la page  ******************  ##
      /**
       * jquery.js
       * bootstrap.js
       * AdminLTE.js
       * app.js
       * sumernote.js
       */
    		Initialisation::loadJS(['jquery.min','bootstrap.bundle.min','adminlte.min', 'app', 'summernote']);
    ?>
  
  </body>
</html>