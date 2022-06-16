<link rel="stylesheet" href="../../../public/css/pagination.css" type="text/css">

<nav aria-label="Page navigation" class="mt-3">
    <ul class="pagination ">
        <li class="page-item <?= $page <= 1 ? "disabled" : "" ?>">
            <a class="page-link text-dark" href="?pagina=<?= $page > 1 ? $page - 1 : 1 ?>&search=<?= $pesquisa ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++) : ?>
            <li class="page-item <?= $page_number == $page ? "active" : "" ?>">
                <a class="page-link text-dark" href="?pagina=<?= $page_number ?>&search=<?= $pesquisa ?>"><?= $page_number ?></a>
            </li>
        <?php endfor; ?>

        <li class="page-item <?= $page >= $total_pages ? "disabled" : "" ?>">
            <a class="page-link text-dark" href="?pagina=<?= $page < $total_pages ? $page + 1 : $total_pages ?>&search=<?= $pesquisa ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>