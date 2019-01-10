<?php global $themeMoonConfig; ?>

<?php if (file_exists('plugins/Customizer')): ?>
<?php $_title = $this->render('Moon:layout/header/customizerTitle', array(
    'project' => isset($project) ? $project : null,
    'task' => isset($task) ? $task : null,
    'description' => isset($description) ? $description : null,
    'title' => $title,
)) ?>
<?php else: ?>
<?php $_title = $this->render('header/title', array(
    'project' => isset($project) ? $project : null,
    'task' => isset($task) ? $task : null,
    'description' => isset($description) ? $description : null,
    'title' => $title,
)) ?>
<?php endif ?>
<?php $_top_right_corner = implode('&nbsp;', array(
        $this->render('header/user_notifications'),
        $this->render('header/creation_dropdown'),
        $this->render('header/user_dropdown')
    )) ?>

<?php if (!isset($themeMoonConfig['backgroundColorHeader'])) : ?>
<header>
<?php else: ?>
<header style="background:<?= $themeMoonConfig['backgroundColorHeader'] ?>"> 
<?php endif ?>
    <div class="title-container">
        <?= $_title ?>
    </div>
    <div class="board-selector-container">
        <?php if (! empty($board_selector)): ?>
            <?= $this->render('header/board_selector', array('board_selector' => $board_selector)) ?>
        <?php endif ?>
    </div>
    <div class="menus-container">
        <?= $_top_right_corner ?>
    </div>
</header>
