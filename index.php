<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>test</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="bd">
    <h1> Test exercise </h1>
    <div id="back">
        <div id="result_form">
        <div id="hide">
            <form method="post" id="ajax_form" action="" >
                <div class="form-group">
                    <label for="firstName">First Name</label><br>
                    <input name="firstName" class="form-control" type="text" placeholder="Nikita">
                </div>
                <div class="form-group">
                    <label for="firstName">Second Name</label><br>
                    <input name="secondName" class="form-control" type="text" placeholder="Moiseenko">
                </div>
                <div class="form-group">
                    <label for="firstName">E-mail</label><br>
                    <input name="email" class="form-control" type="email" placeholder="nikitamoiseenco@gmail.com">
                </div>
                <div class="form-group">
                    <label for="firstName">Password</label><br>
                    <input name="pass" class="form-control" type="password"><br>
                    <input name="repeatPass" class="form-control" type="password" placeholder="Repeat password:">
                </div>            
                <input type="button" id="btn" value="Отправить" />
            </form>
        </div>
    </div>
</div>
</div>
     
    



    
</body>
</html>