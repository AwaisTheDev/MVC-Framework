<?php

/*this is the base controller this loads and viewes
*/

class Controller{
    public function model($model){

        // require modal fil
        require_once '../app/models/'.$model.'.php';
        return new $model();

    }


    //load view

    public function view($view, $data=[]){
            if(file_exists('../app/views/'.$view.'.php')){
                require '../app/views/'.$view.'.php';
            }
            else{
                die('View does not exist');
            }
    }
}