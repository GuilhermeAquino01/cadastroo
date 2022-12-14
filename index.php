<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Cadastro para entrega</h2>
        <form method="POST" action="cadastro2.php">
            <div class="col-md-4">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="inputEmail">
            </div>
            <div class="col-md-4">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="inputPassword">
            </div>
            <div class="col-4">

                <label for="inputNome " class="form-label"> Nome </label>
                <input type="text" class="form-control" id="inputNome " placeholder="Nome" name="inputNome">
            </div>
            <div class="col-4">
                <label for="inputSobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome" name="inputSobrenome">
            </div>
            <div class="col-4">
                <label for="inputRua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="inputRua" placeholder="Rua" name="inputRua">
            </div>
            <div class="col-2">
                <label for="inputn" class="form-label">N°</label>
                <input type="text" class="form-control" id="inputn" placeholder="N°" name="inputn">
            </div>
            <div class="col-md-2">
                <label for="inputCep" class="form-label">Cep</label>
                <input type="text" class="form-control" id="inputCep" name="inputCep">
            </div>
            <div class="col-4">
                <label for="inputBairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="inpuBairro" placeholder="Bairro" name="inputBairro">
            </div>
            <div class="col-md-4">
                <label for="inputCidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputCidade" placeholder="Cidade" name="inputCidade">
            </div>
            <div class="col-md-4">
                <label for="inputEstado" class="form-label">Estado</label>
                <br>
                <select name="inputEstado" class="form-select">
                    <br>
                    <option selected>Minas Gerais</option>
                    <option selected>Rio de Janeiro</option>
                    <option selected>São Paulo</option>
                </select>
            </div>
            <br>
            <div class="">

                <div class="col-md-2">
                    <label for="inputZip" class="form-label">&nbsp;</label>
                    <br>
                    <button type="submit" class="btn btn-primary " col-md-2>Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>