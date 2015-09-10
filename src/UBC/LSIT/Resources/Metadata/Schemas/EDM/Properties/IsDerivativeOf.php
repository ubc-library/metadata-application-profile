<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\EDM\Properties;
    use UBC\LSIT\Resources\Metadata\Schemas\EDM\Property;

    class IsDerivativeOf extends Property
    {
        private $uriPart = 'isDerivativeOf';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'isDerivativeOf';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Is Derivative Of', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'This property captures a narrower notion of derivation than edm:isSimilarTo, in the sense that it relates a resource to another one, obtained by reworking, reducing, expanding, parts or the whole contents of the former, and possibly adding some minor parts. Versions have an even narrower meaning, in that it requires common identity between the related resources. Translations, summaries, abstractions etc. do not qualify as versions, but do qualify as derivatives';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
