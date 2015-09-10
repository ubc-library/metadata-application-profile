<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\EDM\Properties;
    use UBC\LSIT\Resources\Metadata\Schemas\EDM\Property;

    class HasView extends Property
    {
        private $uriPart = 'hasView';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'hasView';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Has View', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'This property relates a ORE aggregation about a CHO with a web resource providing a view of that CHO. Examples of view are: a thumbnail, a textual abstract and a table of contents.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
