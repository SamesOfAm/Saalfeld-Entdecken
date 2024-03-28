<?php
return array(
  'label' => array('Bildlink', 'Bild mit Text und Button'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'image' => array(
      'label' => array('Bild', 'Welches Bild soll links erscheinen?'),
      'eval' => array('filesOnly' => true),
      'inputType' => 'fileTree'
    ),
    'headline' => array(
      'label' => array('Überschrift', 'Was soll oben drüber stehen?'),
      'inputType' => 'text',
    ),
    'url' => array(
      'label' => array('Link', 'Wohin soll verlinkt werden?'),
      'inputType' => 'url',
    ),
    'buttonText' => array(
      'label' => array('Text auf Button', 'Was soll auf dem Button stehen?'),
      'inputType' => 'text',
    ),
    'description' => array(
      'label' => array('Text', 'Was soll über dem Button stehen?'),
      'inputType' => 'text',
    ),
    'color' => array(
      'label' => array('Hintergrundfarbe', 'Welche Hintergrundfarbe soll der Text haben?'),
      'inputType' => 'select',
      'options' => array('schwarz','orange','gruen','dunkelrot')
    ),
  ),
);
