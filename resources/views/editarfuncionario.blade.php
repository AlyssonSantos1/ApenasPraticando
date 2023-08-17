<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela1</title>
</head>

<body>
    <form action="/atualizarfuncionario/{{$colaborador->id}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nome:</label>
        <input type="text" placeholder="Digite seu nome" name="nome_funcionario" value="{{$colaborador->nome}}">
        <br> <br>
        <label for="">Cargo</label>
        <input type="text" placeholder="Digite seu cargo" name="cargo_funcionario" value="{{$colaborador->cargo}}">
        <br> <br>
        <label for="">Salario</label>
        <input type="text" placeholder="Digite seu salario" name="salario_funcionario" value="{{$colaborador->salario}}">
        <br> <br>
        <label for="">Setor</label>
        <input type="text" placeholder="Digite seu setor" name="setor_funcionario" value="{{$colaborador->setor}}">
        <br><br> <br>
        <button>Enviar</button>

    </form>
</body>

</html>
