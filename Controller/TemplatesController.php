<?php
App::uses('AparnicTemplatesAppController', 'AparnicTemplates.Controller');
/**
 * Templates Controller
 *
 */
class TemplatesController extends AparnicTemplatesAppController {
    

    public function admin_setting($name = null) {
		
        if(!empty($this->request->data)){
//            debug($this->request->data);
            $theme = $this->request->data['Template']['theme'];
            $rtl = $this->request->data['Template']['rtl'];
            $this->Setting->write('aparnicTemplate.rtl', $rtl, array(
                'editable' => '1'
            ));
            $this->Setting->write('aparnicTemplate.theme', $theme, array(
                'editable' => '1'
            ));
        }
        
        $adminTemplateRtl = $this->Setting->field('value', array('key' => 'aparnicTemplate.rtl'));
        $adminTemplateTheme = $this->Setting->field('value', array('key' => 'aparnicTemplate.theme'));
        $this->request->data['Template']['rtl'] = $adminTemplateRtl;
        $this->request->data['Template']['theme'] = $adminTemplateTheme;
    }
}
