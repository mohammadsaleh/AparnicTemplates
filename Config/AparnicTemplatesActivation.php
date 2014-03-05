<?php

class AparnicTemplatesActivation {

	public function beforeActivation(&$controller) {
            return true;
	}

	public function onActivation(&$controller) {
            $setting = ClassRegistry::init('Setting');
            $setting->write('aparnicTemplate.rtl', '0', array(
                'editable' => '1'
            ));
            $setting->write('aparnicTemplate.theme', '1', array(
                'editable' => '1'
            ));
            return true;
	}

	public function beforeDeactivation(&$controller) {
            return true;
	}

	public function onDeactivation(&$controller) {
            $setting = ClassRegistry::init('Setting');
            $setting->deleteKey('aparnicTemplate.rtl');
            $setting->deleteKey('aparnicTemplate.theme');
            return true;
	}

}
