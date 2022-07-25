<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">
    <title>Document</title>
    
    
</head>

<body>
    
    

<?php
    session_start();
    if(!isset($_SESSION['participants'])){
        $_SESSION['participants'] = [];
    }
     
    if(isset($_GET["name"])  && isset($_GET["surname"]) && isset($_GET["wifesName"]) && isset($_GET["wifesSurname"]) !=="" && $_GET["surname"] != ""){
        $_SESSION['participants'][] = [
            "man" => [
                'name' => $_GET['name'], 
                'surname' => $_GET['surname'] 
                ] , 
            "woman" => [
                'wifesName' => $_GET['wifesName'], 
                'wifesSurname' => $_GET['wifesSurname']
                ]
            ];
    }

    ?>
        
        <div class="container">
            <div class="got">
            <form action="" method="get">
                    <div>
                 <input type="text" name="name">
                 <p>Vardas</p>
                 </div>
                    <div>
                 <input type="text" name="surname">
                    <p>Pavardė</p>
                    </div>
                    <div>
                 <input type="text" name="wifesName">
                    <p class="line">Antros Pusės Vardas</p>
                    </div>
                    <div>
                 <input type="text" name="wifesSurname">
                    <p class="line">Antros Pusės Pavardė</p>
                    </div>
                    
                 </div>
                 <div id="but">
                 <button type="submit" class="btn btn-success"  >Registruokis</button>
                    </div>
                 </form>
        <table class="table">
    <thead>
        <tr>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">wFirst</th>
        <th scope="col">Wlast</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($_SESSION['participants'] as $ptc) {
            ?>
                <tr>
                    <td class="names"><?=$ptc['man']['name']?> </td>
                    <td class="names"><?=$ptc['man']['surname']?> </td>
                    <td class="names1"><?=$ptc['woman']['wifesName']?> </td>
                    <td class="names1"><?=$ptc['woman']['wifesSurname']?> </td>
                    
                </tr>
        <?php } ?>
    </tbody>
    </table>

        

    </div>
   



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>