<?php

if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
    echo $lastname;
    require_once '../view/create-account.php'; // Include the view file when lastname is set
} // erreur le controlleur ne me renvois pas vers la vue create-account.php

?>