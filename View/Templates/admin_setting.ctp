<?php
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb($this->Html->icon('home'), '/admin')
	->addCrumb(__d('aparnic_templates', 'Aparnic Template'), array('plugin' => 'aparnic_templates', 'controller' => 'templates', 'action' => 'setting'));

echo $this->Form->create('Template');

?>
<div class="row-fluid">
	<div class="span8">

		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('aparnic_templates', 'Aparnic Template'), '#template-basic');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id="template-basic" class="tab-pane">
                            <style>
                                .schema table td.theme-name{
                                    width: auto;
                                    padding: 0px 5px;
                                }
                                .schema table td{
                                    width: 25px;
                                    height: 25px;
                                    margin-left: 1px;
                                    display: inline-block;
                                }
                            </style>
                            <div class="input radio">
                            <?php
                                    $this->Form->inputDefaults(array(
                                            'label' => false,
                                            'class' => 'span10',
                                    ));
                                    echo $this->Form->label('theme', __d('aparnic_templates', 'Default Color Schema'));
                                    echo $this->Form->radio('theme', 
                                            array(
                                                '1' => '<div class="schema">'
                                                        . '<table><tr>'
                                                        . '<td class="theme-name">'
                                                        . __d('aparnic_templates', 'Aparnic Theme 1')
                                                        . '</td>'
                                                        . '<td style="background-color:#7AB316;"></td>'
                                                        . '<td style="background-color:#412039;"></td>'
                                                        . '<td style="background-color:#DA4F49;"></td>'
                                                        . '<td style="background-color:#C8C8C8;"></td>'
                                                        . '<td style="background-color:#F1F1F1;"></td>'
                                                        . '</tr></table>'
                                                        . '</div>',
                                            ),
                                            array(
                                                'legend' => false
                                            )
                                    );

                            ?>
                            </div>
                            <div class="input checkbox">
                            <?php
                                    echo $this->Form->checkbox('rtl');
                                    echo $this->Form->label('rtl', __d('aparnic_templates', 'right to left'));
                            ?>
                            </div>
                            
			</div>
			<?php echo $this->Croogo->adminTabs(); ?>
                    
		</div>
	</div>

	<div class="span4">
		<?php
		echo $this->Html->beginBox(__d('croogo', 'Publishing')) .
			$this->Form->button(__d('croogo', 'Apply'), array('name' => 'apply', 'button' => 'default')) .
			$this->Form->button(__d('croogo', 'Save'), array('button' => 'default')) .
			$this->Html->link(__d('croogo', 'Cancel'), array('action' => 'index'), array('button' => 'danger')) .
			$this->Html->endBox();

		echo $this->Croogo->adminBoxes();
		?>
	</div>

</div>
<?php echo $this->Form->end(); ?>
