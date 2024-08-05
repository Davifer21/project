<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>@yield("title")</title>
 
            <!--  fonte do google -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
            <!-- css bootstrap -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <!-- css da aplicação -->
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/scripts.js"></script>
        </head>
        <body> 
            <header>
               <nav class="navbar navbar-expand-lg navbar-light">
                 <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                    
                    </a>
                    <ul class="navbar-nav">
                      <li class="nav-item">
                         <a href="/" class="nav-link">Eventos</a>
                      </li>
                      <li class="nav-item">
                         <a href="/events/create" class="nav-link">criar Eventos</a>
                      </li>
                      <li class="nav-item">
                         <a href="/" class="nav-link">Entrar</a>
                      </li>
                      <li class="nav-item">
                         <a href="/" class="nav-link">Cadastrar</a>
                      </li>
                    </ul>   
                 </div>
               </nav>
            </header>
            @yield('content')
            <footer>
                <p>HDC Events &copy; 2024</p>
            </footer>
       </body>
</html>