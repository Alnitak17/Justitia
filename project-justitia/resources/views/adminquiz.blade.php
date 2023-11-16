<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
{{ $quizzes }}
<p>test</p>
<button class="btn btn-primary">Quiz maken</button>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Naam</th>
        <th scope="col">Aantal vragen</th>
        <th scope="col">Opties</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $quizzes as $quiz )
        <tr>
            <th scope="row">{{ $quiz->id }}</th>
            <td>{{ $quiz->name }}</td>
            <td>0</td>
            <td>
                <button class="btn btn-danger">Verwijderen</button>
            </td>
          </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
