<?php

    namespace UBC\LSIT\Resources\Metadata\Profiles\EDM;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    /**
     * Class Place
     *
     * THIS IS THE COMPLETE UNIT - V1 SPEC AS OF 08SEP2015
     */

    trait Place
    {

        /**
         * @var AbstractProperty
         */
        protected $Latitude;

        /**
         * @var AbstractProperty
         */
        protected $Longitude;

        /**
         * @return AbstractProperty
         */
        public function getLatitude ()
        {
            return $this->Latitude;
        }

        /**
         * @return AbstractProperty
         */
        public function getLongitude ()
        {
            return $this->Longitude;
        }

    }
