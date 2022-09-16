<?php

namespace Kanboard\Plugin\TemplateTitle\Helper;

use Kanboard\Helper\TaskHelper;
use Kanboard\Model\PredefinedTaskDescriptionModel;
use Kanboard\Core\Base;

/**
 * TemplateTitle Helper
 *
 * @package helper
 * @author  Craig Crosby
 */
class TemplateTitleHelper extends TaskHelper
{
        public function renderDescriptionAndTitleTemplateDropdown($projectId)
    {
        $templates = $this->predefinedTaskDescriptionModel->getAll($projectId);

        if (! empty($templates)) {
            $html = '<div class="dropdown dropdown-smaller">';
            $html .= '<a href="#" class="dropdown-menu dropdown-menu-link-icon"><i class="fa fa-floppy-o fa-fw" aria-hidden="true"></i>'.t('Template for the task description').' <i class="fa fa-caret-down" aria-hidden="true"></i></a>';
            $html .= '<ul>';

            foreach ($templates as  $template) {
                $html .= '<li>';
                $html .= '<a href="#" data-template-target="textarea[name=description]" data-template="'.$this->helper->text->e($template['description']).'" data-templatetitle-target="input[name=title]" data-templatetitle="'.$this->helper->text->e($template['title']).'" class="js-template-title">';
                //$html .= '<a href="#" data-template-target="textarea[name=description]" data-template="'.$this->helper->text->e($template['description']).'" class="js-template">';
                //$html .= '<a href="#" data-template-target="input[name=title]" data-template="'.$this->helper->text->e($template['title']).'" class="js-template-title">';
                $html .= $this->helper->text->e($template['title']);
                $html .= '</a>';
                $html .= '</li>';
            }

            $html .= '</ul></div>';
            return $html;
        }

        return '';
    }
    
}