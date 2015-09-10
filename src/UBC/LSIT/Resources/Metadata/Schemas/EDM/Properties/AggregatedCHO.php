<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\EDM\Properties;
    use UBC\LSIT\Resources\Metadata\Schemas\EDM\Property;

    class AggregatedCHO extends Property
    {
        private $uriPart = 'aggregatedCHO';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'aggregatedCHO';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Digital Resource Original Record', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'The identifier of the source object, e.g. the Mona Lisa itself. This could be a full linked open date URI or an internal identifier';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
