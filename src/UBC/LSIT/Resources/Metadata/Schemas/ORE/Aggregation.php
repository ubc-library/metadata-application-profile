<?php
    /**
     * Created by PhpStorm.
     * User: seanmcna
     * Date: 11/08/2015
     * Time: 2:59 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas;


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