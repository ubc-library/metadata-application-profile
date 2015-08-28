<?php
    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait DataDescription {

        /**
         * @var AbstractProperty
         */
        protected $CatalogueNumber;

        /**
         * @var AbstractProperty
         */
        protected $Category;

        /**
         * @var AbstractProperty
         */
        protected $CollectorNumber;

        /**
         * @var AbstractProperty
         */
        protected $CollectedBy;

        /**
         * @var AbstractProperty
         */
        protected $Map;

        /**
         * @return AbstractProperty
         */
        public function getCatalogueNumber ()
        {
            return $this->CatalogueNumber;
        }

        /**
         * @return AbstractProperty
         */
        public function getCategory ()
        {
            return $this->Category;
        }

        /**
         * @return AbstractProperty
         */
        public function getCollectorNumber ()
        {
            return $this->CollectorNumber;
        }

        /**
         * @return AbstractProperty
         */
        public function getCollectedBy ()
        {
            return $this->CollectedBy;
        }

        /**
         * @return AbstractProperty
         */
        public function getMap ()
        {
            return $this->Map;
        }


    }
