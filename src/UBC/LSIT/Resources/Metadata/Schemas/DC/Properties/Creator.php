<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\DC\Properties;
    use UBC\LSIT\Resources\Metadata\Schemas\DC\Property;

    class Creator extends Property
    {

        private $uriPart = 'creator';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'creator';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Creator', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'An entity primarily responsible for making the resource.';
            $d [] = 'Examples of a Creator include a person, an organization, or a service. Typically, the name of a Creator should be used to indicate the entity.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }

    }
