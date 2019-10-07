<?php

use luckywp\scriptsControl\admin\Rate;
use luckywp\scriptsControl\core\admin\helpers\AdminHtml;

?>
<div class="notice notice-info lwpscRate">
    <p>
        <?= esc_html__('Hello!', 'lwpsc')?>
        <br>
        <?= sprintf(
            esc_html__('We are very pleased that you are using the %s plugin within a few days.', 'lwpsc'),
            '<b>LuckyWP Scripts Control</b>'
        ) ?>
        <br>
        <?= esc_html__('Please rate plugin. It will help us a lot.', 'lwpsc')?>
    </p>
    <p>
        <?= AdminHtml::buttonLink(esc_html__('Rate the plugin', 'lwpsc'), Rate::LINK, [
            'attrs' => [
                'data-action' => 'lwpsc_rate',
                'target' => '_blank',
            ],
            'theme' => AdminHtml::BUTTON_THEME_PRIMARY,
        ]) ?>
        <?= AdminHtml::button(esc_html__('Remind later', 'lwpsc'), [
            'attrs' => [
                'data-action' => 'lwpsc_show_later',
            ],
            'theme' => AdminHtml::BUTTON_THEME_LINK,
        ]) ?>
        <?= AdminHtml::button(esc_html__('I\'ve already rated the plugin', 'lwpsc'), [
            'attrs' => [
                'data-action' => 'lwpsc_already_rate',
            ],
            'theme' => AdminHtml::BUTTON_THEME_LINK,
        ]) ?>
    </p>
    <p>
        <b><?= esc_html__('Thank you very much!', 'lwpsc')?></b>
    </p>
</div>