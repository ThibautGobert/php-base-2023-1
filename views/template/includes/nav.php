<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">IEPSA PHP Base</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php
                /** @var $menus */
                foreach ($menus as $name => $sub): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="<?= ('drop-down'.$name) ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $name ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach ($sub as $item): ?>
                            <li>
                                <a class="dropdown-item" href="/<?= ($name . '/' . $item) ?>"><?= $item ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</nav>