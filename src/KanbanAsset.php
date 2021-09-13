<?php
/**
 * @package yii2-kanban
 * @author Simon Karlen <simi.albi@outlook.com>
 * @copyright Copyright © 2019 Simon Karlen
 */

namespace simialbi\yii2\kanban;


use simialbi\yii2\web\AssetBundle;

class KanbanAsset extends AssetBundle
{
    /**
     * {@inheritDoc}
     */
    public $css = [
        'css/kanban.css'
    ];

    public $js = [
        'js/kanban.js'
    ];

    /**
     * {@inheritDoc}
     */
    public $depends = [
     
        'yii\jui\JuiAsset',
       
        'simialbi\yii2\kanban\KanbanSwiperAsset'
    ];
}
