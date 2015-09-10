<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\VIVO\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\VIVO\Property;

    class DateIssued extends Property
    {
        private $uriPart = 'dateIssued';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'dateIssued';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Date Issued', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'Date Optional Time Value, DateTime+Timezone Preferred ';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
