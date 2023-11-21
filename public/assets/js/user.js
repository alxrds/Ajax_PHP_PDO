window.onload = function(){

    var btn_users = document.querySelector("#btn-users");
    var div_users = document.querySelector("#div-users");
    var div_create = document.querySelector("#div-create");
    var div_busca = document.querySelector("#div-busca");

    var form_cadastrar = document.querySelector("#form-cadastrar");
    var form_buscar = document.querySelector("#form-buscar");

    function listUsers(users){

        var table = `<table class='table table-striped'>`;
        table+=`<thead><tr><td>ID</td><td>NOME</td><td>E-MAIL</td><tr></thead>`;
        table+=`<tbody>`;
            users.forEach(function(user){
                table+=`<tr>`;
                table+=`<td> ${user.id} </td>`;
                table+=`<td> ${user.nome} </td>`;
                table+=`<td> ${user.email} </td>`;
                table+=`</tr>`;
            });
        table+=`</tbody>`;
        table+=`</table>`;
        return table;
    }

    form_buscar.onsubmit = function(e){
        e.preventDefault();
        var form = new FormData(form_buscar);
        xmlHttpPost('ajax/buscar', function(){
            beforeSend(function(){
                div_busca.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></1><span class="sr-only">Loading...</span>`;
            });
            successs(function(){
                if(xhttp.responseText == 'nouser'){
                    div_busca.innerHTML = 'Nenhum usuário encontrado';
                }else{
                    var users = JSON.parse(xhttp.responseText);
                    div_busca.innerHTML = listUsers(users);
                }
            });
        }, form);
    }

    form_cadastrar.onsubmit = function(e){
        e.preventDefault();
        var form = new FormData(form_cadastrar);
        xmlHttpPost('ajax/create', function(){
            beforeSend(function(){
                div_create.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></1><span class="sr-only">Loading...</span>`;
            });
            successs(function(){
                var response = xhttp.responseText;
                if(response==1){
                    div_create.innerHTML = "Cadastrado com sucesso!";
                }
            });
        }, form);
    }

    btn_users.onclick = function(){

        xmlHttpGet('ajax/user', function(){
            beforeSend(function(){
                div_users.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></1><span class="sr-only">Loading...</span>`;
            });
            successs(function(){
                var users = JSON.parse(xhttp.responseText);
                div_users.innerHTML = listUsers(users);
            });
            error(function(){
                div_users.innerHTML = "Ocorreu um erro!";
            });
        });

    }

}