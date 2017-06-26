<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CMS - {{ $title }}</title>
        <link rel="stylesheet" media="screen" type="text/css" href="{{ bundle css/home.css }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper">
                    <span class="left title_page_install">{{ $title }}</span>
                    {{ if $user == "no_connected" }}
                        <ul id="nav-mobile" class="left hide-on-med-and-down">
                            <li><a href="#modal_connexion">Connexion</a></li>
                            <li><a href="#modal_inscription">Inscription</a></li>
                        </ul>
                    {{ else }}
                        <ul id="nav-mobile" class="left hide-on-med-and-down">
                            <li><a href="{{ route deconnexion }}">Déconnexion</a></li>
                            {{ if $user == "yes" }}
                                <li><a href="{{ route administration }}">Administration</a></li>
                            {{ end_if }}
                        </ul>
                    {{ end_if }}
                    {{ $form.start }}
                        <div class="input-field">
                            {{ $form.search }}
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    {{ $form.end }}
                </div>
            </nav>
        </header>
        <div class="body">
            <div class="container"></div>
        </div>
        <div id="modal_connexion" class="modal">
            <div class="modal-content">
                <h4>Connexion</h4>
                {{ $form_connexion.start }}
                    <div class="input-field">
                        {{ $form_connexion.pseudo }}
                        <label for="pseudo_connexion">Pseudo</label>
                    </div>
                    <div class="input-field">
                        {{ $form_connexion.password }}
                        <label for="password_connexion">Mot de passe</label>
                    </div>
                    {{ $form_connexion.submit }}
                {{ $form.end }}
            </div>
            <div class="modal-footer"><a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a></div>
        </div>
        <div id="modal_inscription" class="modal">
            <div class="modal-content">
                <h4>Inscription</h4>
                {{ $form_inscription.start }}
                    <div class="input-field">
                        {{ $form_inscription.pseudo }}
                        <label for="pseudo_inscription">Pseudo</label>
                    </div>
                    <div class="input-field">
                        {{ $form_inscription.password }}
                        <label for="password_inscription">Mot de passe</label>
                    </div>
                    <div class="input-field">
                        {{ $form_inscription.check_password }}
                        <label for="check_password_inscription">Vérification du mot de passe</label>
                    </div>
                    <div class="input-field">
                        {{ $form_inscription.mail }}
                        <label for="mail_inscription">Adresse mail</label>
                    </div>
                    {{ $form_inscription.submit }}
                {{ $form.end }}
            </div>
            <div class="modal-footer"><a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a></div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
        <script src="{{ bundle javascript/home.js }}"></script>
    </body>
</html>