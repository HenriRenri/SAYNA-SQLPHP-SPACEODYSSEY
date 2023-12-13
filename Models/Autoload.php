<?php 
	/**
	 * Cette fonction vérifie si le fichier de la classe se trouve dans le répertoire `Controls/` ou dans le 
	 * répertoire `Models/`.
	 *
	 * Si le fichier est trouvé, elle le requiert.
	 * Sinon, elle ne fait rien.
	 */
	function autoloading($class)
	{
	    $filePath = null;

	    // Verification si la classe éxiste dans le dossier Controls
	    if (file_exists("Controls/" . $class . ".php")) 
		{
	        $filePath = "Controls/" . $class . ".php";
	    } else if (file_exists("Models/" . $class . ".php")) 
		{
	        $filePath = "Models/" . $class . ".php";
	    }

	    if ($filePath !== null) 
		{
	        require $filePath;
	    } else 
		{
	        throw new Exception("Class '$class' cette classe n'éxiste pas dans le Controls ou Models");
	    }
	}

	spl_autoload_register("autoloading");