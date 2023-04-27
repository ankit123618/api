<!-- /function which checks empty fields in a form 
  made by ankit sharma
-->



<?php
function formcheck($formdata){
    parse_str($formdata,$formdata);
  
    foreach($formdata as $data => $value)
    {
        echo $data."-:";
        echo $value;
        echo "<br>";
        if($value == ""){
            echo $data." field is required";
        }
    }

}
$ret = formcheck($_POST['data']);
echo $ret;

?>