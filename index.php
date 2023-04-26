<?php
require_once("fetch.php");
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

    <form method="post" id="form1">
        <table>
            <tr>
                <th>name</th>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <th>age</th>
                <td><input type="text" name="age" id="age"></td>
            </tr>
        </table>
        <tr>
            <td><input type="submit" value="submit"></td>
        </tr>
    </form>
    <script>

        const element = document.getElementById("form1")
        console.log(element)




        const url = 'data.php';
        const options = {
	        method: 'POST',
            body: {operation: "insert", element: element}
        }
        var data = api(url,options)
        
        
    </script>
    <div id="api-data">

    </div>
    
    <script>
        document.getElementById("api-data").innerHTML = data
    </script>

</body>
</html>