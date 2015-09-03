<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\ORE;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;


    class Aggregation
    {
        /**
         * @var AbstractProperty
         */
        protected $AggregatedSourceRepository;

        /**
         * @var AbstractProperty
         */
        protected $HasView;

        /**
         * @var AbstractProperty
         */
        protected $DigitalResourceOriginalRecord; // ???

        /**
         * @return AbstractProperty
         */
        public function getAggregatedSourceRepository()
        {
            return $this->AggregatedSourceRepository;
        }
    }
