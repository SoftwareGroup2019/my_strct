<?php


$route = isset($_GET['do'])? $_GET['do'] : 'def'; // Getting Route from Url with GET Moethod

/// Routes Validation Will Goes Here //////////




///////////////////////////////////////////////



/// end of def ////////////////
if ($route == 'def'):
    echo " This Main Page View";

/// end of def ////////////////

/// Start of add ////////////////
elseif($route == 'add'):
    echo " This add Page View";

/// end of add ////////////////

/// Start of insert ////////////////
elseif($route == 'insert'):
    echo " This insert to DB Page";

/// end of insert ////////////////

/// Start of edit ////////////////
elseif($route == 'edit'):
    echo " This edit Page View";

/// end of edit ////////////////

/// Start of update ////////////////
elseif($route == 'update'):
    echo " This update to DB Page";

/// end of update ////////////////

/// Start of delete ////////////////
elseif($route == 'delete'):
    echo " This delete Page View";

/// end of delete ////////////////

/// Return to Safe Zone ////////////////
else:
    echo " This route lead to safe zone";        
    // header('location: admin.php');
    // exit();               
endif;




