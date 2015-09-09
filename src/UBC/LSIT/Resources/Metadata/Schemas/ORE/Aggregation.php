<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\ORE;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;


    trait Aggregation
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

    }
