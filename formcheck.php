<!-- /function which checks empty fields in a form 
  made by ankit sharma
-->



<?php
function formcheck($formdata){
    parse_str($formdata,$formdata);
  
    foreach($formdata as $data => $value)
    {
        if($value == ""){
            echo $data;
        }
    }

}
?>