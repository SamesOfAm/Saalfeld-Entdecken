<?php
return array(
  'label' => array('Kopfzeile', 'Inhalt für Bild und Überschrift am Anfang der Stationsseite'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'image' => array(
      'label' => array('Bild', 'Welches Bild soll oben erscheinen?'),
      'eval' => array('filesOnly' => true),
      'inputType' => 'fileTree'
    ),
    'focus' => array(
      'label' => array('Fokus', 'Bildausschnitt oben oder unten'),
      'inputType' => 'select',
      'options' => array('Mitte', 'Oben', 'Unten')
    ),
    'headline' => array(
      'label' => array('Überschrift', 'Wie ist der Name dieses Rundgangs?'),
      'inputType' => 'text',
    ),
    'noStations' => array(
      'label' => array('Anzahl Stationen', 'Wie viele Stationen hat dieser Rundgang?'),
      'inputType' => 'text',
    ),
    'distance' => array(
      'label' => array('Entfernung', 'Wie lang ist dieser Rundgang in km?'),
      'inputType' => 'text',
    ),
    'time' => array(
      'label' => array('Dauer', 'Wie viele Stunden braucht man für diesen Rundgang?'),
      'inputType' => 'text',
    ),
    'parentPage' => array(
      'inputType' => 'url',
      'label' => array('Hauptseite des Rundgangs', '')
    ),
    'nextStation' => array(
      'inputType' => 'url',
      'label' => array('Nächste Stationsseite', '')
    ),
  )
);
