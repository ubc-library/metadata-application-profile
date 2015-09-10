<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\FI\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\FI\Property;

    class WaterAreaOverview extends Property
    {
        private $uriPart = 'Link251';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'WaterAreaOverview';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Water Area Overview', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = '"Description of the water area in which the aquatic resource is located, including environmental characteristics, jurisdictional limits, ..." (FIGIS-FIRMS 2002 workshop). Water Area Overview might contain a reference list of areas in which a species or aquatic resource is found or employed.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
