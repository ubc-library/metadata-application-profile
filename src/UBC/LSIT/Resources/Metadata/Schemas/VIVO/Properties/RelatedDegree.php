<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\VIVO\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\VIVO\Property;

    class RelatedDegree extends Property
    {
        private $uriPart = 'relatedDegree';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'relatedDegree';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Related Degree', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'The thesis degree';
            $d [] = 'Extended Property specified by UBC, as per https://wiki.duraspace.org/display/VIVO/Ontology+Editor%27s+Guide';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
