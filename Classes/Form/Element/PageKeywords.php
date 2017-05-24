<?php
namespace Nreach\T3Text\Form\Element;

use YoastSeoForTypo3\YoastSeo\Controller\ModuleController;

class PageKeywords extends \Nreach\T3Base\Form\Element\Base
{
    public function render()
    {
        $pageContentUrl = vsprintf(
            '/index.php?id=%d&type=%d&L=%d',
            [(int) $this->data['vanillaUid'],
             ModuleController::FE_PREVIEW_TYPE,
             0]);

        return array_merge_recursive(parent::render(), [
            'linkAttributes' => [
                'class' => 'nreacht3-pagekeywords nreach-btn-container ',
                'data-url' => $pageContentUrl
            ]
        ]);
    }
}
