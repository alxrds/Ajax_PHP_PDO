<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax com PHP e PDO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Users</a></li>
            <li><a data-toggle="tab" href="#menu1">Cadastrar</a></li>
            <li><a data-toggle="tab" href="#menu2">Busca</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <button class="btn btn-primary" id="btn-users">Listar</button>
                <div id="div-users"></div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <div id="div-create"></div>
                <form action="" id="form-cadastrar">
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
            <div id="menu2" class="tab-pane fade">
                <form action="" id="form-buscar">
                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
                <div id="div-busca"></div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/js/xhttp.js"></script>
<script src="assets/js/user.js"></script>
</body>
</html>