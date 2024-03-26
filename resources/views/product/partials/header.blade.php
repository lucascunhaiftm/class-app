<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="dropdown @if (str_contains(Route::current()->getName(), 'products')) active @endif">
                <a class="dropdown-toggle" data-toggle="dropdown" href={{ route('products.index') }}>Produtos <span
                        class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href={{ route('products.index') }}>Listar</a></li>
                    <li><a href={{ route('products.create') }}>Cadastrar</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
