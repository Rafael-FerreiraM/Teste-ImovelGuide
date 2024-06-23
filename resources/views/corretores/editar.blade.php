
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Teste CRUD</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
<style>
  body {
    overflow-x: hidden; /* Para evitar a barra de rolagem horizontal */
  }

  .small-input {
    width: 300px;
  }

  .smaller-input {
    width: 200px;
  }

  .custom-card {
    max-width: 500px;
    margin: 20px auto; /* Adiciona margin-top para dar espaço abaixo do header */
  }

  .full-width-btn {
    width: 100%;
  }

  header {
    position: fixed; /* Fixa o header no topo */
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
  }

  .container {
    padding-top: 100px; /* Adiciona espaço no topo para não sobrepor o header */
  }

  .action-btn {
    display: inline-block;
    margin-right: 5px;
  }

  .btn-edit {
    background-color: #007bff;
    color: white;
  }

  .btn-delete {
    background-color: #dc3545;
    color: white;
  }
  
  .wider-card {
    max-width: 800px;
  }

  .table th, .table td {
    vertical-align: middle;
    text-align: center;
  }
</style>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Inclui os ícones -->
</head>
<body>
  <header class="bg-dark text-center py-3">
    <h1 class="text-light">Teste CRUD</h1>
  </header>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">

       @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
       @endif

        <div class="card custom-card">
          <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Editar dados do corretor</h4>
          </div>
          <div class="card-body">
          <form action="{{ url('corretores/'.$corretores->id.'/editar') }}" method="POST">
            @csrf <!-- Diretiva de proteção contra ataques csrf-->
            @method('PUT')
             <div class="mb-3">
              <label class="mb-1">CPF:</label>
              <input type="text" name="cpf" placeholder="Digite seu CPF" class="form-control smaller-input" value="{{ $corretores->cpf }}">
              @error('cpf') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
             <div class="mb-3">
              <label class="mb-1">CRECI:</label>
              <input type="text" name="creci" placeholder="Digite seu CRECI" class="form-control smaller-input" value="{{ $corretores->creci }}">
              @error('creci') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
             <div class="mb-3">
              <label class="mb-1">Nome Completo:</label>
              <input type="text" name="nome" placeholder="Digite seu nome" class="form-control small-input" value="{{ $corretores->nome }}">
              @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success full-width-btn mb-1">Salvar</button>
            <a href="{{ url('corretores/cadastrar') }}" class="btn btn-danger full-width-btn">Voltar</a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

