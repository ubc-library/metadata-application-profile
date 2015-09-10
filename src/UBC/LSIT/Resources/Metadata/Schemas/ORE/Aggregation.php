<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\ORE;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;


    trait Aggregation
    {
        /**
         * @var AbstractProperty
         */
        protected $AggregatedSourceRepository;

        /**
         * @var AbstractProperty
         */
        protected $DigitalResourceOriginalRecord;

        /**
         * @var AbstractProperty
         */
        protected $HasView;

        /**
         * @var AbstractProperty
         */
        protected $Provider;

        /**
         * @return AbstractProperty
         */
        public function getAggregatedSourceRepository ()
        {
            return $this->AggregatedSourceRepository;
        }

        /**
         * @return AbstractProperty
         */
        public function getDigitalResourceOriginalRecord ()
        {
            return $this->DigitalResourceOriginalRecord;
        }

        /**
         * @return AbstractProperty
         */
        public function getHasView ()
        {
            return $this->HasView;
        }

        /**
         * @return AbstractProperty
         */
        public function getProvider ()
        {
            return $this->Provider;
        }


    }
