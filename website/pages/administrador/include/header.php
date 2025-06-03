<header>
    <div class="logo">
        <a href="">
            LOGO
        </a>
    </div>
    <div class="page">
        <?php echo $nome_pagina; ?>
    </div>
    <div class="buttons">
        <a href="">
            <i class="fa fa-bell" aria-hidden="true"></i>
        </a>
        <a href="">
            <i class="fa fa-question-circle" aria-hidden="true"></i>
        </a>
    </div>
    <script>
        window.updatePageTitle = (title) => {
        document.getElementById('page-title').textContent = title;
    };
    </script>
</header>