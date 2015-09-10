<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\EDM\Properties;
    use UBC\LSIT\Resources\Metadata\Schemas\EDM\Property;

    class CurrentLocation extends Property
    {
        private $uriPart = 'currentLocation';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'currentLocation';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Current Location', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'The geographic location whose boundaries presently include the CHO. If the name of a repository, building site, or other entity is used, then it should include an indication of its geographic location.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
