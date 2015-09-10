<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Alternative
     *
     */
    class Alternative extends Property
    {
        private $uriPart = 'alternative';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'alternative';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Alternative Title', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'An alternative name for the resource.';
            $d [] = 'Note - the distinction between titles and alternative titles is resource-specific.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
