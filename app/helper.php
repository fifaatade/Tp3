<?php

use App\Models\ListEtudiant;
    
    if(!function_exists('idsDB')){
        function idsDB(){
            $id=ListEtudiant::pluck('id');
            return $id;
        }
    }
    
?>