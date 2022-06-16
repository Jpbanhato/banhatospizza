<div class="col-auto col-md-3 col-xl-2 px-3 px-sm-2 pt-2 styled-sidebar">
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

        <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link align-middle px-0">
                <i class="bi bi-house-fill"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
            </a>
        </li>
        <li>
            <a href="/admin/categorias" class="nav-link px-0 align-middle">
                <i class="bi bi-clipboard-data-fill"></i> <span class="ms-1 d-none d-sm-inline">Categorias</span></a>
        </li>
        <li>
            <a href="/admin/produtos" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="bi bi-boxes"></i> <span class="ms-1 d-none d-sm-inline">Produtos</span> </a>
        </li>
        <li>
            <a href="/admin/usuarios" class="nav-link px-0 align-middle">
                <i class="bi bi-people-fill"></i> <span class="ms-1 d-none d-sm-inline">Usuários</span>
            </a>
        </li>
    </ul>
    <form action="/logout" method="post">
        <button type="submit" href="" class="nav-link px-0 align-middle nav-button">
            <i class="bi bi-box-arrow-right"></i> <span class="ms-1 d-none d-sm-inline">Encerrar Sessão</span>
        </button>
    </form>
</div>
