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
    'toggleHeadline' => array(
      'inputType' => 'checkbox',
      'label' => array('Überschrift ausblenden', 'Soll die Überschrift ("Übersicht: Alle Stationen") ausgeblendet werden?')
    ),
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
        'buttontext' => array(
          'inputType' => 'text',
          'label' => array('Button-Text', 'Was soll auf dem Button stehen?')
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
