<?php
$content = $content ?? 'URL Incorrecte';
$title = $title ?? getConfig('generic_title');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer></script>
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ace editor -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.13.2/ace.js" integrity="sha512-iiZKLJaxAAguY3/R9qFEZXxezoT5Ba88R8I5wtQcogBcYy2ksF4LfrWMAhnECYYbGBT9mIpEHdH/2omQSBYKdA==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="/js/app.js" defer></script>
    <link href="/css/app.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>
<body>
<div class="d-flex flex-column vh-100">
    <?php
    require_once 'includes/nav.php';
    ?>
    <div class="container customfade pt-3 flex-grow-1">
        <?= $content ?>
    </div>
    <?php
    require_once 'includes/footer.php';
    ?>
</div>
</body>
</html>