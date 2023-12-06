<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<button type="button" id="modalbutton" class="btn btn-primary">Vraag toevoegen</button>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Naam</th>
        <th scope="col">Toelichting</th>
        <th scope="col">Foto</th>
        <th scope="col">Opties</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($questions as $question)
        <tr>
            <th scope="row">{{ $question->id }}</th>
            <td>{{ $question->title }}</td>
            <td>{{ $question->body }}</td>
            <td>{{ $question->photo }}</td>
            <td>
                <button onclick="console.log({{ $question->id }})" class="btn btn-danger">Verwijderen</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

//Answers
<button type="button" id="answerModal" class="btn btn-primary">Antwoord toevoegen</button>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Vraag</th>
        <th scope="col">Naam</th>
        <th scope="col">Toelichting</th>
        <th scope="col">Opties</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($answers as $answer)
        <tr>
            <th scope="row">{{ $answer->id }}</th>
            <td>{{ $answer->question_id }}</td>
            <td>{{ $answer->title }}</td>
            <td>{{ $answer->body }}</td>
            <td>
                <button onclick="console.log({{ $answer->id }})" class="btn btn-danger">Verwijderen</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<div class="modal fade" id="questionForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Vraag toevoegen</h5>
          <button type="button" class="close"  aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{url('/adminquiz')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titel</label>
                <input type="text" class="form-control" name="titleInput" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Toevoeging</label>
                <input type="text" class="form-control" name="bodyInput" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Foto (optioneel)</label>
                <input class="form-control" type="file" name="fileInput">
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" >Sluiten</button>
          <button type="submit" class="btn btn-primary">Vraag toevoegen</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="answerForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Antwoord toevoegen</h5>
          <button type="button" class="close"  aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{url('/adminquiz/answer')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Vraag</label>
                <input type="text" class="form-control" name="questionidInput" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titel</label>
                <input type="text" class="form-control" name="titleInput" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Toelichting (optioneel)</label>
                <input class="form-control" type="text" name="bodyInput">
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" >Sluiten</button>
          <button type="submit" class="btn btn-primary">Vraag toevoegen</button>
        </div>
    </form>
      </div>
    </div>
  </div>

</body>
<script>

$("#modalbutton").on( "click", function() {
    $('#questionForm').modal('show');
} );

$("#answerModal").on( "click", function() {
    $('#answerForm').modal('show');
} );
</script>

</html>
