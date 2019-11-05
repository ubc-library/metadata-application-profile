<?php

namespace UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Properties;
use UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Property;

/**
 * Class Created
 *
 */
class Provenance extends Property
{
    private $uriPart = 'provenance';//http://purl.org/dc/terms/#uriPart

    private $namePart = 'provenance';//Term Name: #name

    /**
     * @param string $value
     * @param string $label
     * @param array  $attrs
     */
    public function __construct ($value, $label = 'Provenance', array $attrs = [])
    {
        #    value
        #  , uri (part put in the uri)
        #  , name (element name in the spec)
        #  , label
        parent::__construct ($value, $this->uriPart, $this->namePart, $label);

        $d = [];
        $d [] = $this->getDescription ();
        $d [] = 'A statement of any changes in ownership and custody of the resource since its creation that are significant for its authenticity, integrity, and interpretation.';

        $this->setDescription (implode ('; ', $d));

        $this->setAttributes ($attrs);
    }
}