<?php
return array(
  'label' => array('Info mit Übersichtskarte', 'Die Reiter auf der Startseite einer Tour'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'stations' => array(
      'label' => array('Alle Stationen', 'Rechts auf "Neues Element" klicken'),
      'inputType' => 'list',
      'fields' => array(
        'name' => array(
          'label' => array('Name', 'Der Name der Station'),
          'inputType' => 'text'
        ),
        'description' => array(
          'label' => array('Kurzbeschreibung', 'Ein Satz über die Station'),
          'inputType' => 'text'
        ),
        'latCoords' => array(
          'label' => array('Breite-Koordinaten', 'Breite-Koordinaten der Station'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'lngCoords' => array(
          'label' => array('Länge-Koordinaten', 'Länge-Koordinaten der Station'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
      )
    ),
    'infos' => array(
      'label' => array('Infos zur Tour', 'Infotext im Reiter "Infos zur Tour"'),
      'inputType' => 'textarea',
      'eval' => array('rte' => 'tinyMCE', 'tl_class' => 'clr')
    )
  )
);
