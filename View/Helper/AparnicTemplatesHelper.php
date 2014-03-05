<?php
App::uses('AppHelper', 'View/Helper');

class AparnicTemplatesHelper extends AppHelper{
    
    public $helpers = array('Html');
    
    public function beforeRender($viewFile) {
        
        if(!empty($this->_View->viewVars['adminTemplateSetting'])){
            $adminTemplateSetting = $this->_View->viewVars['adminTemplateSetting'];
            $adminTheme = $adminTemplateSetting['theme'];
            $adminRtlTheme = $adminTemplateSetting['rtl'];
            
            if(!empty($adminTheme)){
                echo $this->Html->css('AparnicTemplates.theme_'.$adminTheme.'/style', array('inline' => false));
                if(!empty($adminRtlTheme))
                    echo $this->Html->css('AparnicTemplates.theme_'.$adminTheme.'/style_rtl', array('inline' => false));
            }
        }
    }
}
