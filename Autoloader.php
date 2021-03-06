<?php 
/*
 * Autoloader file
 */



spl_autoload_register(function($class) {
    
    //get the difference of location between the location of autoloader and the file that called autoloader
    $lastDirectories = substr(getcwd(), strlen(__DIR__));
    
    
    
    //count the number of slashs and folder depth
    $numberOfLastDirectories = substr_count($lastDirectories,'/');
    
   
    
    
   
    
    //This is the list of possible directories that classes are found in this app
    $directories = ['BuisnessService', 'BuisnessService/Models', 'Database', 'Presentation', 'Presentation/Handlers', 'Presentation/Views', 'Utility'];
    foreach($directories as $d)
    {
        $currentDirectory = $d;
        for($x = 0; $x < $numberOfLastDirectories; $x++){
            $currentDirectory = "../" . $currentDirectory;
        }
        $classFile = $currentDirectory . '/' . $class . '.php';
        
        if (is_readable($classFile))
        {
            if (require $d . '/' . $class . ".php")
            {
                break;
            }
        }
    }
    
    
});
