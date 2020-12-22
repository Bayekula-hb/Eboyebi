<?php
require_once('Controller/Index.php');

if(isset($_GET['Page'])){
    if($_GET['Page']=='Contact'){
        Contact();
    }elseif($_GET['Page'] == 'Apropos'){
        Apropos();
    }elseif($_GET['Page']=='Cours'){
        Cours();
    }elseif($_GET['Page']=='Login'){
        Login();
    }
    else{
        Index();
    }
}else{
    Index();
}