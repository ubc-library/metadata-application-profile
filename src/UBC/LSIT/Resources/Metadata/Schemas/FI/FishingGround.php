<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\FI;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    /**
     * Class FishingGround
     *
     * THIS IS THE COMPLETE UNIT - V1 SPEC AS OF 08SEP2015
     */

    trait FishingGround
    {

        /**
         * @var AbstractProperty
         */
        protected $Bottom;


        /**
         * @var AbstractProperty
         */
        protected $DepthOfCapture;

        /**
         * @return AbstractProperty
         */
        public function getBottom ()
        {
            return $this->Bottom;
        }

        /**
         * @return AbstractProperty
         */
        public function getDepthOfCapture ()
        {
            return $this->DepthOfCapture;
        }
    }
