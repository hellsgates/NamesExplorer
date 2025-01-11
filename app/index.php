<?php

require __DIR__ . '/inc/all.inc.php';



$overview = gen_names_overview();
?>

<?php require  __DIR__ . '/views/header.php' ?>
<h2>Самые популярные имена в Америке</h2>

    <?php foreach ($overview as $row): ?>

    <ul>
        <li>
            <a href="name.php?<?php echo http_build_query(['name' => $row['name']]); ?>">
                <?php echo e($row['name']); ?>
            </a>
        </li>
    </ul>

    <?php endforeach; ?>

<?php  ?>

<?php require  __DIR__ . '/views/footer.php' ?>
