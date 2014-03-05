<?php
App::uses('Component', 'Controller');

class AparnicTemplatesComponent extends Component{
    
    private $__adminTemplateSettings = array();
    //----------------------------------------------------------
    public function beforeRender(Controller $controller) {
        if(isset($controller->request->params['admin']) && $controller->request->params['admin']){
            $adminTemplateRtl = $controller->Setting->field('value', array('key' => 'aparnicTemplate.rtl'));
            $adminTemplateTheme = $controller->Setting->field('value', array('key' => 'aparnicTemplate.theme'));
            $this->__adminTemplateSettings['theme'] = $adminTemplateTheme;
            $this->__adminTemplateSettings['rtl'] = $adminTemplateRtl;
            $controller->set('adminTemplateSetting', $this->__adminTemplateSettings);
        }
    }
    //----------------------------------------------------------
}
