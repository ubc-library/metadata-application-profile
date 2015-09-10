<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\EDM\Properties;
    use UBC\LSIT\Resources\Metadata\Schemas\EDM\Property;

    class DataProvider extends Property
    {
        private $uriPart = 'dataProvider';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'dataProvider';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Data Provider', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'The name or identifier of the organization who contributes data indirectly to an aggregation service (e.g. Europeana)';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
