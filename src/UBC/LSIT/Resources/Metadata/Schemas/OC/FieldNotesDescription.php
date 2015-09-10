<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 09 Aug 15
     * Time: 18:40
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OC;

    use UBC\LSIT\Resources\Metadata\Schemas;
    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    /**
     * Class FieldNotes
     *
     * @package UBC\LSIT\Resources\Metadata\Representations\OpenCollections\Enrichments
     */
    trait FieldNotesDescription
    {

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
        public function getCover ()
        {
            return $this->Cover;
        }

        /**
         * @return AbstractProperty
         */
        public function getCurrent ()
        {
            return $this->Current;
        }

        /**
         * @return AbstractProperty
         */
        public function getMethodOfCapture ()
        {
            return $this->MethodOfCapture;
        }

        /**
         * @return AbstractProperty
         */
        public function getOriginalPreserved ()
        {
            return $this->OriginalPreserved;
        }

        /**
         * @return AbstractProperty
         */
        public function getShore ()
        {
            return $this->Shore;
        }

        /**
         * @return AbstractProperty
         */
        public function getStreamWidth ()
        {
            return $this->StreamWidth;
        }

        /**
         * @return AbstractProperty
         */
        public function getTide ()
        {
            return $this->Tide;
        }

        /**
         * @return AbstractProperty
         */
        public function getVegetation ()
        {
            return $this->Vegetation;
        }

        /**
         * @return AbstractProperty
         */
        public function getWater ()
        {
            return $this->Water;
        }

        /**
         * @return AbstractProperty
         */
        public function getWatershed ()
        {
            return $this->Watershed;
        }

    }
