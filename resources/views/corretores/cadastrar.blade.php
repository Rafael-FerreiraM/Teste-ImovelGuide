
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
            <h4 class="mb-0">Cadastrar Corretor</h4>
          </div>
          <div class="card-body">
            <form action="{{ url('corretores/cadastrar') }}" method="POST">

             @csrf <!-- Diretiva de proteção contra ataques csrf-->

             <div class="mb-3">
              <label class="mb-1">CPF:</label>
              <input type="text" name="cpf" placeholder="Digite seu CPF" class="form-control smaller-input" value="{{ old('cpf') }}">
              @error('cpf') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
             <div class="mb-3">
              <label class="mb-1">CRECI:</label>
              <input type="text" name="creci" placeholder="Digite seu CRECI" class="form-control smaller-input" value="{{ old('creci') }}">
              @error('creci') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
             <div class="mb-3">
              <label class="mb-1">Nome Completo:</label>
              <input type="text" name="nome" placeholder="Digite seu nome" class="form-control small-input" value="{{ old('nome') }}">
              @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success full-width-btn">Enviar</button>
          </div>
        </div>

        <!-- Tabela para exibir os corretores cadastrados -->
        <div class="card custom-card wider-card mt-4">
          <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Corretores Cadastrados</h4>
          </div>
          <div class="card-body">
            @if($corretores->isEmpty())
              <p>Nenhum corretor cadastrado.</p>
            @else
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>CRECI</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($corretores as $corretor)
                    <tr>
                      <td>{{ $corretor->nome }}</td>
                      <td>{{ $corretor->cpf }}</td>
                      <td>{{ $corretor->creci }}</td>
                      <td>
                        <a href="{{ url('corretores/'.$corretor->id.'/editar') }}"
                         class="btn btn-edit action-btn">
                          <i class="fas fa-edit"></i> Editar
                        </a>

                        <form action="{{ url('corretores/'.$corretor->id.'/editar') }}" method="POST" style="display:inline;">
                          @csrf
                          <a 
                          href="{{ url('corretores/'.$corretor->id.'/deletar') }}" 
                          class="btn btn-delete action-btn" 
                          onclick="return confirm('Você tem certeza que deseja excluir?')">               
                            <i class="fas fa-trash-alt"></i> Excluir
                          </a>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @endif
          </div>
        </div>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

