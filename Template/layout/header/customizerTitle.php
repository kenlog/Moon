<?php global $themeMoonConfig; ?>
<div class="header">
		<?php if (null !== $this->task->customizerFileModel->getByType(1)) : ?>
            <a href="<?= $this->url->href('DashboardController', 'show', array(), false, '', t('Dashboard')) ?>">
                <img src="<?= $this->url->href('CustomizerFileController', 'image', array('plugin' => 'customizer', 'file_id' => $this->task->customizerFileModel->getIdByType(1))) ?>" height="50">
            </a>
            <h2 style="color:<?= $themeMoonConfig['HeadingTitleColor'] ?>">
                <?php if (! empty($project) && ! empty($task)): ?>
                    <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
                <?php else: ?>
                    <?= $this->text->e($title) ?>
                <?php endif ?>
                <small>
                    <?php if (! empty($description)): ?>
                        <?= $this->app->tooltipHTML($description) ?>
                    <?php endif ?>
                </small>
            </h2>
		<?php endif ?>
</div>