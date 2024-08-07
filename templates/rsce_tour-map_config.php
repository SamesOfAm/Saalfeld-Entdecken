<?php
return array(
  'label' => array('Karte', 'Die Karte mit den Rundgangsstationen'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'href' => array(
      'label' => array('MyMaps Link', 'Gesamte URL des Google MyMaps-Links'),
      'inputType' => 'url'
    ),
    'headline' => array(
      'label' => array('Überschrift (wenn abweichend)', 'Wenn hier nichts eingetragen wird, erscheint "Weg zur nächsten Station"'),
      'inputType' => 'text'
    )
  )
);
