<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\DC\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\DC\Property;

    /**
     * Class Date
     */
    class Date extends Property
    {
        private $uriPart = 'date';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'date';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Date', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'A point or period of time associated with an event in the lifecycle of the resource.';
            $d [] = 'Date may be used to express temporal information at any level of granularity. Recommended best practice is to use an encoding scheme, such as the W3CDTF profile of ISO 8601 [W3CDTF].';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }

    }
