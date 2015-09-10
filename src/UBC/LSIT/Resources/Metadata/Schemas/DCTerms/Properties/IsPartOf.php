<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Date
     *
     */
    class IsPartOf extends Property
    {
        private $uriPart = 'isPartOf';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'isPartOf';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Is Part Of', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'A related resource in which the described resource is physically or logically included.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
