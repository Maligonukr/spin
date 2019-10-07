<?php
/**
 * @var $tab string
 */

use luckywp\scriptsControl\admin\Rate;
use luckywp\scriptsControl\core\admin\helpers\AdminUrl;

?>
<h1>LuckyWP Scripts Control</h1>
<h2 class="nav-tab-wrapper lwpscTabs">
    <a href="<?= AdminUrl::toOptions('scripts') ?>" class="nav-tab<?= $tab == 'scripts' ? ' nav-tab-active' : '' ?>">
        <span class="dashicons dashicons-editor-code"></span>
        <?= esc_html__('Scripts', 'lwpsc') ?>
    </a>
    <a href="<?= AdminUrl::toOptions('scripts', 'settings') ?>" class="nav-tab<?= $tab == 'settings' ? ' nav-tab-active' : '' ?>">
        <span class="dashicons dashicons-admin-generic"></span>
        <?= esc_html__('Settings', 'lwpsc') ?>
    </a>
    <a href="<?= Rate::LINK ?>" target="_blank" class="lwpscTabs_rate"><?= sprintf(
            esc_html__('Leave a %s plugin review on WordPress.org', 'lwpsc'),
            '★★★★★'
        ) ?></a>
</h2>