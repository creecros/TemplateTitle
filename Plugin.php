<?php

namespace Kanboard\Plugin\TemplateTitle;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
  public function initialize()
  {
      
    //helper  
    $this->helper->register('templateTitleHelper', '\Kanboard\Plugin\TemplateTitle\Helper\TemplateTitleHelper');
    
    //template
    $this->template->setTemplateOverride('task_creation/show', 'templateTitle:task_creation/show');
    $this->template->setTemplateOverride('task_modification/show', 'templateTitle:task_modification/show');
    
    //java
    $this->hook->on('template:layout:js', array('template' => 'plugins/TemplateTitle/assets/js/template-title.js'));

  }
  public function getPluginName()
  {
    return 'TemplateTitle';
  }
  public function getPluginAuthor()
  {
    return 'Craig Crosby';
  }
  public function getPluginVersion()
  {
    return '1.0.0';
  }
  
  public function getPluginDescription()
  {
    return 'Autopopulate Title of template into Task title';
  }
  public function getPluginHomepage()
  {
    return 'https://github.com/creecros/TemplateTitle';
  }
}