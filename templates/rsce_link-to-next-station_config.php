<?php
return array(
  'label' => array('Link nächste Station', ''),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'link' => array(
      'label' => array('Link-Ziel', 'Wohin soll verlinkt werden? (nächste Stationsseite)'),
      'inputType' => 'url',
    )
  )
);
