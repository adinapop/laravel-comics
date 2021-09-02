<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics @yield("title")</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    
</head>
<body>

    <nav>
        <!-- including the nav component inside the main page -->
        @include("templates.nav")
    </nav>

    <header>
        <!-- including the header component inside the main page -->
        @include("templates.header")
    </header>

    <div class="container">
        <!-- il div "cede" il suo contenuto con yield alla section dove sarà inserito -->
        @yield("content")
    </div>

    <footer>
        <!-- includgin the footer component insidet the main page -->
        @include("templates.footer")
    </footer>
    
</body>
</html>