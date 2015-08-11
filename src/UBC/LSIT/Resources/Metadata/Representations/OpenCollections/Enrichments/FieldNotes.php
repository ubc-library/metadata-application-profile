<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 09 Aug 15
     * Time: 18:40
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections\Enrichments;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    /**
     * Class FieldNotes
     *
     * @package UBC\LSIT\Resources\Metadata\Representations\OpenCollections\Enrichments
     */
    class FieldNotes {

        /**
         * @var AbstractProperty
         */
        private $Bottom;

        /**
         * @var AbstractProperty
         */
        private $CatalogueNumber;

        /**
         * @var AbstractProperty
         */
        private $CollectedBy;

        /**
         * @var AbstractProperty
         */
        private $CollectorNumber;

        /**
         * @var AbstractProperty
         */
        private $Cover;

        /**
         * @var AbstractProperty
         */
        private $Current;

        /**
         * @var AbstractProperty
         */
        private $DepthOfCapture;

        /**
         * @var AbstractProperty
         */
        private $DepthOfWater;

        /**
         * @var AbstractProperty
         */
        private $DistanceOffshore;

        /**
         * @var AbstractProperty
         */
        private $Latitude;

        /**
         * @var AbstractProperty
         */
        private $Locality;

        /**
         * @var AbstractProperty
         */
        private $Longitude;

        /**
         * @var AbstractProperty
         */
        private $Map;

        /**
         * @var AbstractProperty
         */
        private $MethodOfCapture;

        /**
         * @var AbstractProperty
         */
        private $OriginalPreserved;

        /**
         * @var AbstractProperty
         */
        private $Shore;

        /**
         * @var AbstractProperty
         */
        private $StreamWidth;

        /**
         * @var AbstractProperty
         */
        private $Temperature;

        /**
         * @var AbstractProperty
         */
        private $Tide;

        /**
         * @var AbstractProperty
         */
        private $Time;

        /**
         * @var AbstractProperty
         */
        private $Vegetation;

        /**
         * @var AbstractProperty
         */
        private $Water;

        /**
         * @var AbstractProperty
         */
        private $Watershed;

        public function setCatalogueNumber ($value, $label = false) {

            $this->CatalogueNumber = new Schemas\DCTerms\Properties\Identifier($value, $label);
        }

    }
