<?php

namespace PHPExiftool\Driver\Tag\MNG;

class BoundaryOrigin extends \PHPExiftool\Driver\Tag
{

    protected $Id = 24;

    protected $Name = 'BoundaryOrigin';

    protected $FullName = 'MNG::PasteImage';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Boundary Origin';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Desination Origin',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Target Origin',
        ),
    );

}