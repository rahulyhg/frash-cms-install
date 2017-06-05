<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CMS</title>
        <link rel="stylesheet" media="screen" type="text/css" href="{{ bundle css/install.css }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper"><span class="title_page_install">{{ trad title_page_install }}</span></div>
            </nav>
        </header>
        <div class="body">
            <div class="container">
                <div class="row">
                    {{ $form.start }}
                        <div class="row"><h5>Configuration</h5></div>
                        <div class="row">
                            <div class="input-field col s6">
                                {{ $form.title }}
                                <label for="title_install">{{ trad title_project }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">{{ $form.format_url }}</div>
                        </div>
                        <div class="row"><h5>{{ trad database }}</h5></div>
                        <div class="row">
                            <div class="input-field col s6">{{ $form.system }}</div>
                        </div>
                        <div class="row">
                            <div class="input-field col s3">
                                {{ $form.host }}
                                <label for="host_database">Host</label>
                            </div>
                            <div class="input-field col s3">
                                {{ $form.port }}
                                <label for="port_database">Port</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s3">
                                {{ $form.user_bdd }}
                                <label for="user_database">{{ trad user }}</label>
                            </div>
                            <div class="input-field col s3">
                                {{ $form.password_bdd }}
                                <label for="password_database">{{ trad password }}</label>
                            </div>
                        </div>
                        <div class="row"><h5>{{ trad admin_account }}</h5></div>
                        <div class="row">
                            <div class="input-field col s3">
                                {{ $form.pseudo }}
                                <label for="user_database">Pseudo</label>
                            </div>
                            <div class="input-field col s3">
                                {{ $form.password }}
                                <label for="password_database">{{ trad password }}</label>
                            </div>
                        </div>
                    {{ $form.end }}
                </div>
            </div>
        </div>
        <footer></footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        <script src="{{ bundle javascript/install.js }}"></script>
    </body>
</html>