<!DOCTYPE html>
<html>
<link href="{{asset('build/css/quiz.css') }}" rel="stylesheet">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="{{asset('build/css/quiz.css') }}" rel="stylesheet">
    </head>
    <header>
      <div class="curve">
        <h1>Bedankt voor het spelen!</h1>
        <h2></h2>
      </div>
      <nav class="more">
      </nav>
    </header>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p>Integer euismod, elit at fringilla sollicitudin, quam libero pretium tortor.</p>
      <br>
      <br>
    <a href="{{ route('homeNav') }}">            
    <button>Terug naar begin</button>
    </a>
    <script src="{{asset('build/js/quiz.js') }}"></script>
    <footer class="footer">
    <a href="{{ route('creditsNav') }}" class="credits-link">            
      <p>Justitia</p>
    </a>
    </footer>
</body>
</html>