<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\WGS84\Properties;
    use UBC\LSIT\Resources\Metadata\Schemas\WGS84\Property;

    class Lat extends Property
    {

        private $uriPart = 'lat';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'lat';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Latitude', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'Longitude (φ) - Specified in Decimal Degrees';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
