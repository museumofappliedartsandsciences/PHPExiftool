<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class FocusRange extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4106;

    protected $Name = 'FocusRange';

    protected $FullName = 'Olympus::Main';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Focus Range';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Macro',
        ),
    );

}