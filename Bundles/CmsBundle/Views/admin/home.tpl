{{ extend admin/base_admin.tpl, admin/menu_admin.tpl }}

{{ part body }}
    <header>
        <nav class="nav-wrapper">
            <span class="left title_page_install">{{ $title }}</span>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="{{ route deconnexion }}">Déconnexion</a></li>
                <li><a href="{{ route administration }}">Administration</a></li>
            </ul>
        </nav>
    </header>
    <div class="body">
        <div class="row">
            <div class="col s3">{{ parent menu_admin }}</div>
        </div>
    </div>
{{ end_part body }}