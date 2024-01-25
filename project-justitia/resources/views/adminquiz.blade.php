@include('adminheader')

<br>
<button type="button" id="modalbutton" class="btn btn-primary mb-4">Vraag toevoegen</button>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Naam</th>
        <th scope="col">Toelichting</th>
        <th scope="col">Antwoord 1</th>
        <th scope="col">Antwoord 2</th>
        <th scope="col">Antwoord 3</th>
        <th scope="col">Antwoord 4</th>
        <th scope="col">Opties</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($questions as $question)
        <tr>
            <th scope="row">{{ $question->id }}</th>
            <td>{{ $question->title }}</td>
            <td>{{ $question->body }}</td>
            <td>{{ $question->answer1 }}</td>
            <td>{{ $question->answer2 }}</td>
            <td>{{ $question->answer3 }}</td>
            <td>{{ $question->answer4 }}</td>
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
                <label for="exampleFormControlInput1" class="form-label">Antwoord A</label>
                <input type="text" class="form-control" name="answer1Input" id="answer1Input" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Antwoord B</label>
                <input type="text" class="form-control" name="answer2Input" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Antwoord C(optioneel)</label>
                <input type="text" class="form-control" name="answer3Input" placeholder="...">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Antwoord D(optioneel)</label>
                <input type="text" class="form-control" name="answer4Input" placeholder="...">
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
