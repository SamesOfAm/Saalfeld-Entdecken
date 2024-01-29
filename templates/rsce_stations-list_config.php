<?php
return array(
  'label' => array('Liste der Stationen', 'Auflistung aller Stationen eines Rundgangs'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'stations' => array(
      'inputType' => 'list',
      'label' => array('Stationen eintragen', 'Rechts auf "Neues Element" klicken'),
      'fields' => array(
        'name' => array(
          'inputType' => 'text',
          'label' => array('Name', 'Der Name der Station')
        ),
        'description' => array(
          'inputType' => 'text',
          'label' => array('Kurzbeschreibung', 'Ein ganz kurzer Satz über deíese Station')
        ),
        'link' => array(
          'inputType' => 'url',
          'label' => array('Seite der Station', 'Rechts auf das blaue Kugel-Icon klicken')
        ),
        'image' => array(
          'label' => array('Bild', 'Ein Bild von der Station'),
          'eval' => array('filesOnly' => true),
          'inputType' => 'fileTree'
        ),
      )
    )
  )
);
