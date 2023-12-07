<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste Apprenans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="card">
  <div class="card-body">
    <div class="col-md-8 offset-2 mt-3">
    <table class="table table-bordered datatablesSimple">
      <thead>
        <tr>
        <th>#</th>
        <th>nom</th>
        <th>prenom</th>
        <th>Dqate de Naissance</th>
        <th>Matricule</th>
        <th>Action</th>
        </tr>
      </thead>
      <tbody>
         @foreach ($liste as $app)
         <tr>
         <td>{{ $app->id }}</td>
         <td>{{ $app->nom }}</td>
         <td>{{ $app->prenom }}</td>
         <td>{{ $app->datenaissance }}</td>
         <td>{{ $app->matricule }}</td>
         <td>
          <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Supprimer</button>
          <button class="btn btn-sm btn-warning"><i class="fas fa-edit text-white">Modifier</i></button>
         </td>
         </tr>
           
         @endforeach 
      </tbody>
    </table>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


 