<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontaktinfo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='../css/bootstrap-reboot.min.css' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="Nav.html">
    <link href="../css/MyStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="placeholder">
        
    </div>
    <div class="info">
        <h1>Kontakt</h1>
        <br>
        <p class="Kontakt">
            <span class="Fed">Thomas Salling.</span><br>
            Nyborvej 277.<br>
            5220 Odense SØ <br>
            Tlf. 60730676
        </p>
        <p class="Kontakt">     
        </p>
    </div>
    <script>
        $.get("P:\Portfolie\Nav.html", function(data){
            $("#placeholder").replaceWith(data);
        });
    </script>
</body>


</html>