<!DOCTYPE HTML>
<html>
    <head>
        <title>My Laravel Application</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        @livewireStyles()
    </head>
    <body>
        <div class="container">
            <h1> Check this out</h1>

            @livewire('posts')
        </div>
        @livewireScripts()
    </body>
    </html>
