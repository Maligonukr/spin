<?php
/**
 * @var $item \luckywp\scriptsControl\plugin\entities\Item
 */

use luckywp\scriptsControl\core\admin\helpers\AdminHtml;
use luckywp\scriptsControl\core\admin\helpers\AdminUrl;
use luckywp\scriptsControl\core\helpers\Html;

?>
<div class="lwpscModalBox">
    <div class="lwpscModalBox_close lwpscModal-close" title="<?= esc_attr__('Cancel', 'lwpsc') ?>"></div>
    <div class="lwpscModalBox_title"><?= esc_attr__('Confirmation', 'lwpsc') ?></div>
    <form
        action="<?= AdminUrl::toAjax('lwpsc_delete_item', ['id' => $item->id]) ?>"
        data-ajax-form="1"
    >
        <div class="lwpscModalBox_body">
            <?php if ($item->caption) { ?>
                <p>
                    <b><?= Html::encode($item->caption) ?></b>
                </p>
            <?php } ?>
            <p>
                <i><?= nl2br(Html::encode($item->body)) ?></i>
            </p>
            <p>
                <?= esc_html__('Are you sure to delete this code?', 'lwpsc') ?>
            </p>
            <?= Html::hiddenInput('delete', 1) ?>
        </div>
        <div class="lwpscModalBox_footer">
            <div class="lwpscModalBox_footer_buttons">
                <?= AdminHtml::button(esc_attr__('Cancel', 'lwpsc'), [
                    'class' => 'lwpscModal-close lwpscFloatLeft'
                ]) ?>
                <?= AdminHtml::button(esc_attr__('Delete', 'lwpsc'), [
                    'theme' => AdminHtml::BUTTON_THEME_LINK_DELETE,
                    'submit' => true,
                ]) ?>
            </div>
        </div>
    </form>
</div>