<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\FI;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    /**
     * Class DepthBehav
     *
     * THIS IS THE COMPLETE UNIT - V1 SPEC AS OF 08SEP2015
     */

    trait DepthBehav
    {

        /**
         * @var AbstractProperty
         */
        protected $DepthOfWater;

        /**
         * @return AbstractProperty
         */
        public function getDepthOfWater ()
        {
            return $this->DepthOfWater;
        }


    }
