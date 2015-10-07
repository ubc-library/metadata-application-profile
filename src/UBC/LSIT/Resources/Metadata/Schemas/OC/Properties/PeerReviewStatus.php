<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OC\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\OC\Property;

    class PeerReviewStatus extends Property
    {
        private $uriPart = 'peerReviewStatus';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'peerReviewStatus';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Peer Review Status', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'Local Field';
            $d [] = 'Identifies whether or not the resource is peer-reviewed. Applies to published resources only.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
