<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\FI;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    /**
     * Class HabitatBio
     *
     * THIS IS THE COMPLETE UNIT - V1 SPEC AS OF 08SEP2015
     */
    trait HabitatBio
    {
        /**
         * @var AbstractProperty
         */
        protected $DistanceOffshore;

        /**
         * @var AbstractProperty
         */
        protected $Temperature;

        /**
         * @return AbstractProperty
         */
        public function getDistanceOffshore ()
        {
            return $this->DistanceOffshore;
        }

        /**
         * @return AbstractProperty
         */
        public function getTemperature ()
        {
            return $this->Temperature;
        }


    }
