<!DOCTYPE htlm>
<html>
    <head>
    <script type="text/javascript" src="my.js"></script>
    <title>
        This is Menu Page
    </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
        <div id=header>
            <h1>First PHP Example</h1>
        </div>
        <div id=menu>
            <button class="btn btn-primary" type="button" onclick="loadPage('client.html')">ClientSide</button>
            <button class="btn btn-danger" type="button" onclick="loadPage('server.php')">ServerSide</button>
            <button class="btn btn-info" type="button" onclick="loadPage('array.php')">ArrayExample</button>
            <button class="btn btn-warning" type="button" onclick="loadPage('postExample.php')">PostExample</button>
            <button class="btn btn-primary" type="button" onclick="loadPage('getExample.php')">GetExample</button><button class="btn btn-primary" type="button" onclick="loadPage('formExample.html')">FormExample</button>
            
        </div>
        <hr>
        <div id="content">
            Start    
        </div>
        
<?php 
$theButton=$_POST['btnSend'];
if (isset($theButton)) {
    $chosen=$_POST['country'];
    echo "You have chosen: ".$chosen;    
}
?>    
        
        <div id=footer>
            <hr> OAMK 2017
            </div>
    </body>
</html>