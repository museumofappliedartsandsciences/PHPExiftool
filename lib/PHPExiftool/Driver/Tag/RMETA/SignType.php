<?php

namespace PHPExiftool\Driver\Tag\RMETA;

class SignType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Sign type';

    protected $Name = 'SignType';

    protected $FullName = 'Ricoh::RMETA';

    protected $GroupName = 'RMETA';

    protected $g0 = 'APP5';

    protected $g1 = 'RMETA';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Sign Type';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Directional',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Warning',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Information',
        ),
    );

}