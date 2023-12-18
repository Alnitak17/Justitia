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
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p>Integer euismod, elit at fringilla sollicitudin, quam libero pretium tortor.</p>
      <br>
      <br>
      <form action="/submit" method="POST">
        <label for="checkbox1">Checkbox 1</label>
        <input type="checkbox" id="checkbox1" name="checkbox1">

        <label for="checkbox2">Checkbox 2</label>
        <input type="checkbox" id="checkbox2" name="checkbox2">

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Submit">
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