<?php

    namespace UBC\LSIT\Resources\Metadata\Profiles\FI;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    /**
     * Class AqRes
     *
     * THIS IS THE COMPLETE UNIT - V1 SPEC AS OF 08SEP2015
     */

    trait AqRes
    {

        /**
         * @var AbstractProperty
         */
        protected $Locality;

        /**
         * @return AbstractProperty
         */
        public function getLocality ()
        {
            return $this->Locality;
        }


    }
