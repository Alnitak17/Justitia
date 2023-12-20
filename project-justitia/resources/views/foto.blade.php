<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('build/css/quiz.css') }}" rel="stylesheet">
</head>
<body>
  <header>
    <div class="curve">
      <h1>Oordeel</h1>
    </div>
  </header>
  
  <nav class="more">
      <form action="/submit" method="POST">
        <label for="checkbox1">Ontvang email</label>
        <input type="checkbox" id="checkbox1" name="checkbox1">

        <label for="checkbox2">Privacyverklaring</label>
        <input type="checkbox" id="checkbox2" name="checkbox2">

        <br>

        <label for="text">Groepsnaam:</label>
        <input type="textbox" id="groepsnaam" name="groepsnaam" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="Versturen">
      </form>
    </nav>
  <br>
  <br>
  <a href="{{ route('sluitenNav') }}">            
    <button>Sluiten</button>
  </a>

  <script src="{{asset('build/js/quiz.js') }}"></script>

  <footer class="footer">
    <p>Justitia</p>
  </footer>
</body>
</html>