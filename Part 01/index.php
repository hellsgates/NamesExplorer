<?php

require __DIR__ . '/inc/all.inc.php';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=names;charset=utf8mb4', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch (PDOException $e) {
    var_dump($e->getMessage());
    echo 'A problem occured with the database connection...';
    die();
}

$char = strtoupper((string) ($_GET['char'] ?? ''));
if (strlen($char) > 1) {
    $char = $char[0];
}

$names = fetch_names($char);

?>

<?php require __DIR__ . '/views/header.php'; ?>

<ul>
<?php foreach($names as $name): ?>
    <li>
        <a href="name.php?<?php echo http_build_query(['name' => $name]);?>">
        <?php echo e($name)  ;?>
        </a>
    </li>
<?php endforeach;?>
</ul>

<?php require __DIR__ . '/views/footer.php'; ?>