{{ part menu_admin }}
    <ul class="collection">
        <li class="collection-item">Articles<a href="{> admin/article }}" class="secondary-content"><i class="material-icons">send</i></a></li>
        <li class="collection-item">Commentaires<a href="{> admin/comment }}" class="secondary-content"><i class="material-icons">send</i></a></li>
        <li class="collection-item">Modules<a href="{> admin/module }}" class="secondary-content"><i class="material-icons">send</i></a></li>
        <li class="collection-item">Paramètres<a href="{{ route admin/settings }}" class="secondary-content"><i class="material-icons">send</i></a></li>
    </ul>
{{ end_part menu_admin }}