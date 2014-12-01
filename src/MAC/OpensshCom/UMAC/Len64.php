<?php

/*
* This file is part of pssht.
*
* (c) François Poirotte <clicky@erebot.net>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace fpoirotte\Pssht\MAC\OpensshCom\UMAC;

class Len64 extends Base
{
    public function __construct($key)
    {
        $this->key  = $key;
        $this->umac = new \fpoirotte\Pssht\UMAC\UMAC64();
    }

    public static function getSize()
    {
        return 16;
    }

    public static function getName()
    {
        return 'umac-64@openssh.com';
    }
}
