<?php global $themeMoonConfig; ?>
    <span class="logo">
        <?php if (null !== $this->task->customizerFileModel->getByType(1)) : ?>
            <?= $this->url->link('<img src="'.$this->url->href("CustomizerFileController", "image", array("plugin" => "customizer", "file_id" => $this->task->customizerFileModel->getIdByType(1))).'" style="float: left;max-height: 40px;margin-top: -7px;margin-right: 10px;" >', 'DashboardController', 'show', array(), false, '', t('Dashboard')) ?>
        <?php endif ?>
    </span>
    <?php if (!isset($themeMoonConfig['HeadingTitleColor'])) : ?>
    <h1>
    <?php else: ?>
    <h1 style="color:<?= $themeMoonConfig['HeadingTitleColor'] ?>">
    <?php endif ?>
        <span class="title">
            <?php if (! empty($project) && ! empty($task)): ?>
                <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
            <?php else: ?>
                <?= $this->text->e($title) ?>
            <?php endif ?>
        </span>
        <?php if (! empty($description)): ?>
            <?= $this->app->tooltipHTML($description) ?>
        <?php endif ?>
    </h1>