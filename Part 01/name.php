<?php

require __DIR__ . '/inc/all.inc.php';

$name = (string) ($_GET["name"] ?? '');

if (empty($name)) {
    header('Location: index.php');
    die();
}

$entries = fetch_name_entries($name);
?>

<?php require __DIR__ . '/views/header.php'; ?>

<h1>Статистика для имени: <?php echo e($name) ;?></h1>

<?php if (!empty($entries)): ?>
<table>
    <thead>
    <tr>
        <th>Год</th>
        <th>Количество детей</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($entries as $entry) : ?>
            <tr>
                <td><?php echo e($entry['year']);?></td>
                <td><?php echo e($entry['count']);?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
    <h4>Информация не найдена в системе :/ </h4>
<?php endif; ?>

<?php require __DIR__ . '/views/footer.php'; ?>
