<link rel="stylesheet" href="../../../public/css/pagination.css" type="text/css">

<nav aria-label="Page navigation" class="mt-3">
    <ul class="pagination pagination-pag">
        <li class="page-item <?= $page <= 1 ? "disabled disabledd" : "" ?> " >
            <a class="page-link item-pagination disabledd"  href="?pagina=<?= $page > 1 ? $page - 1 : 1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++) : ?>
        <li class="page-item  <?= $page_number == $page ? "active actived" : "" ?> ">
            <a class="page-link item-pagination" href="?pagina=<?= $page_number ?>"><?= $page_number ?></a>
        </li>
        <?php endfor; ?>

        <li class="page-item <?= $page >= $total_pages ? "disabled disabledd" : "" ?>">
            <a class="page-link item-pagination disabledd"  href="?pagina=<?= $page < $total_pages ? $page + 1 : $total_pages ?>"
                aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>