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
      <h1>Hint</h1>
      <h2></h2>
    </div>
    <nav class="more">
    </nav>
  </header>

  <table>
    <thead>
      <tr>
        <th>Vraag</th>
        <th>Antwoord</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>2</td>
      </tr>
      <tr>
        <td>4</td>
        <td>5</td>
      </tr>
      <tr>
        <td>8</td>
        <td>9</td>
      </tr>
    </tbody>
  </table>

  <a href="{{ route('oordeelNav') }}">            
    <button>Oordeel</button>
  </a>

  <footer class="footer">
    <p>Justitia</p>
  </footer>
  
  <script src="{{asset('build/js/quiz.js') }}"></script>
</body>
</html>