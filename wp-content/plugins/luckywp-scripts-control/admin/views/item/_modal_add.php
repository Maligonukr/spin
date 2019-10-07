<?php
/**
 * @var $model \luckywp\scriptsControl\admin\forms\item\ItemForm
 * @var $areaId int
 */

use luckywp\scriptsControl\core\admin\helpers\AdminHtml;
use luckywp\scriptsControl\core\admin\helpers\AdminUrl;
use luckywp\scriptsControl\core\helpers\Html;

?>
<div class="lwpscModalBox">
    <div class="lwpscModalBox_close lwpscModal-close" title="<?= esc_attr__('Cancel', 'lwpsc') ?>"></div>
    <div class="lwpscModalBox_title"><?= esc_attr__('New Code', 'lwpsc') ?></div>
    <form
        action="<?= AdminUrl::toAjax('lwpsc_add_item', ['areaId' => $areaId]) ?>"
        data-ajax-form="1"
    >
        <div class="lwpscModalBox_body">

            <?php
            if ($model->hasErrors()) {
                echo '<div class="lwpscModalForm_errors">';
                foreach ($model->getErrorSummary() as $error) {
                    echo '<p>' . $error . '</p>';
                }
                echo '</div>';
            }
            ?>

            <div class="lwpscModalForm_field">
                <div class="lwpscModalForm_field_label">
                    <?= $model->getAttributeLabel('caption') ?>
                </div>
                <div class="lwpscModalForm_field_el">
                    <?= AdminHtml::textInput(Html::getInputName($model, 'caption'), $model->caption) ?>
                </div>
            </div>

            <div class="lwpscModalForm_field">
                <div class="lwpscModalForm_field_label">
                    <?= $model->getAttributeLabel('body') ?>
                </div>
                <div class="lwpscModalForm_field_el">
                    <?= AdminHtml::textarea(Html::getInputName($model, 'body'), $model->body) ?>
                </div>
            </div>

        </div>
        <div class="lwpscModalBox_footer">
            <div class="lwpscModalBox_footer_buttons">
                <?= AdminHtml::button(esc_attr__('Cancel', 'lwpsc'), [
                    'class' => 'lwpscModal-close lwpscFloatLeft'
                ]) ?>
                <?= AdminHtml::button(esc_attr__('Add', 'lwpsc'), [
                    'theme' => AdminHtml::BUTTON_THEME_PRIMARY,
                    'submit' => true,
                ]) ?>
            </div>
        </div>
    </form>
</div>