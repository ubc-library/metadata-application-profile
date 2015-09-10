<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Property;

    class IsReferencedBy extends Property
    {
        private $uriPart = 'isReferencedBy';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'isReferencedBy';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Is Referenced By', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'A related resource that references, cites, or otherwise points to the described resource.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
