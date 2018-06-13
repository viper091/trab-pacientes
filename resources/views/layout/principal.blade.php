<!DOCTYPE html>
<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Controle de pacientes</title>
</head>
<body>
  <div class="container">

  <nav class="navbar navbar-default">
    <div class="container-fluid">

    <div class="navbar-header">      
      <a class="navbar-brand" href="/pacientes">Pacientes Laravel</a>
    </div>

      <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="{{action('PacienteController@lista')}}">Listagem</a>
      </li>
      <li>
        <a href="{{action('PacienteController@novo')}}">Novo</a>
      </ul>

    </div>
  </nav>

  <br>

    @yield('conteudo')

  <footer class="footer">
      <p>© Curso de Laravel inicante</p>
  </footer>

  </div>
</body>
</html>