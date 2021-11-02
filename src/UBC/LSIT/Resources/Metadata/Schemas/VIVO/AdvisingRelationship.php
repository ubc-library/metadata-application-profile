<?php
/**
 * Created by PhpStorm.
 * User: jz1603
 * Date: 29/09/2021
 * Time: 12:30 AM
 */

namespace UBC\LSIT\Resources\Metadata\Schemas\VIVO;

use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;


trait AdvisingRelationship
{
    /**
     * @var AbstractProperty
     */
    protected $Supervisor;

    /**
     * @return AbstractProperty
     */
    public function getSupervisor ()
    {
        return $this->Supervisor;
    }

}
