<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 09 Aug 15
     * Time: 18:40
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    /**
     * Class FieldNotes
     *
     * @package UBC\LSIT\Resources\Metadata\Representations\OpenCollections\Enrichments
     */
    trait FieldNotesDescription {

        /**
         * @var AbstractProperty
         */
        protected $Bottom;

        /**
         * @var AbstractProperty
         */
        protected $CatalogueNumber;

        /**
         * @var AbstractProperty
         */
        protected $CollectedBy;

        /**
         * @var AbstractProperty
         */
        protected $CollectorNumber;

        /**
         * @var AbstractProperty
         */
        protected $Cover;

        /**
         * @var AbstractProperty
         */
        protected $Current;

        /**
         * @var AbstractProperty
         */
        protected $DepthOfCapture;

        /**
         * @var AbstractProperty
         */
        protected $DepthOfWater;

        /**
         * @var AbstractProperty
         */
        protected $DistanceOffshore;

        /**
         * @var AbstractProperty
         */
        protected $Map;

        /**
         * @var AbstractProperty
         */
        protected $MethodOfCapture;

        /**
         * @var AbstractProperty
         */
        protected $OriginalPreserved;

        /**
         * @var AbstractProperty
         */
        protected $Shore;

        /**
         * @var AbstractProperty
         */
        protected $StreamWidth;

        /**
         * @var AbstractProperty
         */
        protected $Temperature;

        /**
         * @var AbstractProperty
         */
        protected $Tide;

        /**
         * @var AbstractProperty
         */
        protected $Vegetation;

        /**
         * @var AbstractProperty
         */
        protected $Water;

        /**
         * @var AbstractProperty
         */
        protected $Watershed;

        /**
         * @return AbstractProperty
         */
        public function getBottom () {

            return $this->Bottom;
        }

        /**
         * @return AbstractProperty
         */
        public function getCatalogueNumber () {

            return $this->CatalogueNumber;
        }

        /**
         * @return AbstractProperty
         */
        public function getCollectedBy () {

            return $this->CollectedBy;
        }

        /**
         * @return AbstractProperty
         */
        public function getCollectorNumber () {

            return $this->CollectorNumber;
        }

        /**
         * @return AbstractProperty
         */
        public function getCover () {

            return $this->Cover;
        }

        /**
         * @return AbstractProperty
         */
        public function getCurrent () {

            return $this->Current;
        }

        /**
         * @return AbstractProperty
         */
        public function getDepthOfCapture () {

            return $this->DepthOfCapture;
        }

        /**
         * @return AbstractProperty
         */
        public function getDepthOfWater () {

            return $this->DepthOfWater;
        }

        /**
         * @return AbstractProperty
         */
        public function getDistanceOffshore () {

            return $this->DistanceOffshore;
        }

        /**
         * @return AbstractProperty
         */
        public function getMap () {

            return $this->Map;
        }

        /**
         * @return AbstractProperty
         */
        public function getMethodOfCapture () {

            return $this->MethodOfCapture;
        }

        /**
         * @return AbstractProperty
         */
        public function getOriginalPreserved () {

            return $this->OriginalPreserved;
        }

        /**
         * @return AbstractProperty
         */
        public function getShore () {

            return $this->Shore;
        }

        /**
         * @return AbstractProperty
         */
        public function getStreamWidth () {

            return $this->StreamWidth;
        }

        /**
         * @return AbstractProperty
         */
        public function getTemperature () {

            return $this->Temperature;
        }

        /**
         * @return AbstractProperty
         */
        public function getTide () {

            return $this->Tide;
        }

        /**
         * @return AbstractProperty
         */
        public function getVegetation () {

            return $this->Vegetation;
        }

        /**
         * @return AbstractProperty
         */
        public function getWater () {

            return $this->Water;
        }

        /**
         * @return AbstractProperty
         */
        public function getWatershed () {

            return $this->Watershed;
        }

    }
