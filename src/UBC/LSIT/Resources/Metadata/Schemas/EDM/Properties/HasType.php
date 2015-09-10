<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\EDM\Properties;
    use UBC\LSIT\Resources\Metadata\Schemas\EDM\Property;

    class HasType extends Property
    {
        private $uriPart = 'hasType';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'hasType';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Has Type', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'This property relates a resource with the concepts it belongs to in a suitable type system such as MIME or any thesaurus that captures categories of objects in a given field. It does NOT capture aboutness';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
