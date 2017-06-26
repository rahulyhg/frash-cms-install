<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{ $title }}</title>
        <link rel="stylesheet" media="screen" type="text/css" href="{{ bundle css/install.css }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper"><span class="title_page_install">{{ $title }}</span></div>
            </nav>
        </header>
        <div class="body">
            <div class="container">
                <div class="col s12 m7">
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Installation du CMS</span>
                                <p>
                                    L'installation du CMS est terminée.<br>
                                    Je vous remercie de votre utilisation.
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="{{ route home }}">Accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>