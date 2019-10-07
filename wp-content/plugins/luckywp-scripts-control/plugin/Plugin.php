<?php

namespace luckywp\scriptsControl\plugin;

use luckywp\scriptsControl\admin\Admin;
use luckywp\scriptsControl\admin\Rate;
use luckywp\scriptsControl\core\base\BasePlugin;
use luckywp\scriptsControl\core\base\Request;
use luckywp\scriptsControl\core\base\View;
use luckywp\scriptsControl\core\wp\Options;
use luckywp\scriptsControl\plugin\repositories\ItemRepository;

/**
 * @property Admin $admin
 * @property ItemRepository $items
 * @property Options $options
 * @property Rate $rate
 * @property Request $request
 * @property Settings $settings
 * @property View $view
 */
class Plugin extends BasePlugin
{

    private function pluginI18n()
    {
        __('A great way to insert and manage custom code (CSS, JS, meta tags, etc.) into website before &lt;/head&gt;, after &lt;body&gt; or before &lt;/body&gt;.', 'lwpsc');
    }
}
