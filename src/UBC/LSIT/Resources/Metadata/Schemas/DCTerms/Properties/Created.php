<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Properties;
    use UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Created
     *
     */
    class Created extends Property
    {
        private $uriPart = 'created';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'created';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Date Created', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'Date of creation of the resource.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
