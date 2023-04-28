<?php
require_once("../fetch.php");
require_once("../formcheck.php");
require_once("../crud.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>api example</title>
</head>
<body>

    <form  id="form1" >
        <table>
            <tr>
                <th>name</th>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <th>age</th>
                <td><input type="text" name="age" id="age"></td>
            </tr>
        
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
    
   
    <script>
        
        const url = "../crud.php";
        const options = {
            method: 'POST',
            body:{operation: "view", hello: "namaste"}
        }
        let result = api(url,options);
        console.log(result)

    </script> 
    


</body>
</html>