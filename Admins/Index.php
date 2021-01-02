<?php

require_once('Controller/Index.php');
if(isset($_GET['Page'])){
    if($_GET['Page'] == 'Cours'){
        Cours();
    }
    elseif($_GET['Page'] == 'Users'){

    }
    else{
        Index();
    }
}else{
    Index();
}