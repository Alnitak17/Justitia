@include('adminheader')


<button type="button" id="modalbutton" class="btn btn-primary">Vraag toevoegen</button>
<button type="button" id="importbutton" class="btn btn-primary">Importeren</button>
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
                <form action="{{url('/adminquiz/deleteQuestion')}}" method="post">
                    @csrf
                <input type="text" class="form-control" value="{{ $question->id }}" name="question_id" hidden>
                <button type="submit" onclick="console.log({{ $question->id }})" class="btn btn-danger">Verwijderen</button>
                </form>
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
                <form action="{{url('/adminquiz/deleteAnswer')}}" method="post">
                    @csrf
                <input type="text" class="form-control" value="{{ $answer->id }}" name="answer_id" hidden>
                <button type="submit" onclick="console.log({{ $answer->id }})" class="btn btn-danger">Verwijderen</button>
                </form>
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
