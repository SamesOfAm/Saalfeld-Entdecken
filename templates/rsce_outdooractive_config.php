<?php
return array(
    'label' => array('Outdooractive', 'Einbindung einer Route von Outdooractive'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'beTemplate' => 'be_wildcard',
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'headline' => array(
            'label' => array('Überschrift', 'Wie ist der Name dieser Tour?'),
            'inputType' => 'text',
        ),
        'subheadline' => array(
            'label' => array('Kurzbeschreibung', 'Ein kurzer Text unter der Überschrift (optional)'),
            'inputType' => 'text',
        ),
        'id' => array(
            'label' => array('ID der Route bei Outdooractive', 'Welche ID hat diese Route bei Outdooractive?'),
            'inputType' => 'text',
        )
    )
);
