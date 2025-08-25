<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<header class="bg-light text-center py-3">
<h1>Gerenciamento de Salas</h1>

<button class="btn btn-primary">
 <a href="agendar.php" class=" adicionar text-white"><i class="bi bi-plus-lg"></i></a>
</button>
</header>

<body>

  <table class="table table-success table-striped">
    <tr class="table light">
      <th>Salas</th>
      <th>em uso</th>
      <th>excluir/agendar</th>
    </tr>
    <tr class="">
      <td>Sala 01</td>
      <td>não</td>
      <td>
        <button class="btn btn-primary">
          <a href="agendar.php" class="text-white"><i class="agenda bi-calendar2-week-fill"></i></a>
          
        </button>
        <button class="btn btn-primary">
          <a href="agendar.php" class="text-white"><i class="bi bi-x-lg"></i></a>
           </button>
      </td>
    </tr>
  </table>
</body>
</html>