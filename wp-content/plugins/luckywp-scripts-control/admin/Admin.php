<?php

namespace luckywp\scriptsControl\admin;

use luckywp\scriptsControl\admin\controllers\ItemController;
use luckywp\scriptsControl\admin\controllers\RateController;
use luckywp\scriptsControl\admin\controllers\ScriptsController;
use luckywp\scriptsControl\core\admin\helpers\AdminUrl;
use luckywp\scriptsControl\core\base\BaseObject;
use luckywp\scriptsControl\core\Core;
use luckywp\scriptsControl\core\helpers\Html;
use ReflectionException;

class Admin extends BaseObject
{

    protected $pageScriptsHook;

    /**
     * @throws ReflectionException
     */
    public function init()
    {
        if (is_admin()) {
            add_action('admin_menu', [$this, 'menu']);
            add_action('admin_enqueue_scripts', [$this, 'assets']);

            // Ссылки в списке плагинов
            add_filter('plugin_action_links_' . Core::$plugin->basename, function ($links) {
                array_unshift($links, Html::a(esc_html__('Scripts', 'lwpsc'), AdminUrl::toOptions('scripts')));
                return $links;
            });

            // Контроллеры
            ItemController::getInstance();
            RateController::getInstance();
        }
    }

    public function menu()
    {
        $this->pageScriptsHook = add_submenu_page(
            'options-general.php',
            esc_html__('Scripts', 'lwpsc'),
            esc_html__('Scripts', 'lwpsc'),
            'manage_options',
            Core::$plugin->prefix . 'scripts',
            [ScriptsController::className(), 'router']
        );
    }

    public function assets($hook)
    {
        if (Core::$plugin->rate->isShow() || $hook == $this->pageScriptsHook) {
            wp_enqueue_style(Core::$plugin->prefix . 'adminMain', Core::$plugin->url . '/admin/assets/main.min.css', [], Core::$plugin->version);
            wp_enqueue_script(Core::$plugin->prefix . 'adminMain', Core::$plugin->url . '/admin/assets/main.min.js', ['jquery', 'jquery-ui-sortable'], Core::$plugin->version);
            wp_localize_script(Core::$plugin->prefix . 'adminMain', 'lwpscMain', [
                'ajaxUrl' => admin_url('admin-ajax.php'),
            ]);
        }
    }
}
