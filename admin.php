<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>admin page</title>
    <style>
        header, footer {
        display: block;
        margin: 4px;
        padding: 5px;
        min-height: 100px;
        border: 1px solid white;
        border-radius: 7pt;
        background: white;
    }
    </style>
</head>
<body>
    <header></header>
    <div class="card justify-content-center align-items-center" style="width: 20rem; margin: 0 auto; float: none; margin-bottom: 10px; justify-content:center; align-items:center;">
        <img class="card-img-top" src="/img/troll.jpg" alt="Card image cap">
        <div class="card-body">
            <h3 class="card-title">Login</h3>
            <p class="card-title">Here is the secret place. I bet you can never login.</p>
            <form action="/admin" method="post">
                <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Login</button>
                </div>
                </div>
            </form>
            <?php
                if (isset($_POST["password"])) {
                    if ($_POST["password"] === "admin") {
                        echo "correct <br>";
                        $dom = new DOMDocument;
                        $dom -> loadHTML(file_get_contents("admin.php"));
                        $img = $dom -> getElementsByTagName("img") -> item(0);
                        $img -> setAttribute("src", "/img/really.jpg");
                        $dom -> saveHTML($img);
                    } else {
                        echo "wrong <br>";
                    }   
                }
            ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>