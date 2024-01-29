<?php
$GLOBALS['TL_CONFIG']['metamodelsattribute_multi']['mm_tour']['content'] = array(
  'minCount'     => 2,
  'maxCount'     => 4,
  'tl_class'     => 'clr w50',
  'columnFields' => array(
    'ts_client_os'     => array(
      'label'     => 'Meine Optionen',
      'exclude'   => true,
      'inputType' => 'select',
      'options'   => array(
        'option1' => 'Option 1',
        'option2' => 'Option 2',
      ),
      'eval'      => array('style' => 'width:200px', 'includeBlankOption' => true, 'chosen' => true)
    ),
    'ts_client_mobile' => array(
      'label'     => 'Meine Checkbox',
      'exclude'   => true,
      'inputType' => 'checkbox',
      'eval'      => array('style' => 'width:20px')
    ),
    'ts_extension'     => array(
      'label'     => 'Das Textfeld',
      'inputType' => 'text',
      'eval'      => array('mandatory' => true, 'style' => 'width:200px')
    ),
    'ts_image'     => array(
      'label'     => 'Datei',
      'inputType' => 'fileTree',
      'eval'      => array('mandatory' => true, 'style' => 'width:100px')
    ),
    'ts_desc'     => array(
      'label'     => 'Beschreibung',
      'inputType' => 'textarea',
      'eval'      => array('mandatory' => true, 'style' => 'width:265px')
    ),
  ),
);
