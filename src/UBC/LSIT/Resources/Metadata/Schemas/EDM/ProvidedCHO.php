<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\EDM;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    /**
     * Class ProvidedCHO
     *
     * THIS IS THE COMPLETE UNIT - V1 SPEC AS OF 08SEP2015
     */

    trait ProvidedCHO
    {

        /**
         * @var AbstractProperty
         */
        protected $CatalogueRecord;

        /**
         * @var AbstractProperty
         */
        protected $RBSCLocation;

        /**
         * @var AbstractProperty
         */
        protected $Time;

        /**
         * @var AbstractProperty
         */
        protected $Translation;

        /**
         * @return AbstractProperty
         */
        public function getCatalogueRecord ()
        {
            return $this->CatalogueRecord;
        }

        /**
         * @return AbstractProperty
         */
        public function getRBSCLocation ()
        {
            return $this->RBSCLocation;
        }

        /**
         * @return AbstractProperty
         */
        public function getTime ()
        {
            return $this->Time;
        }

        /**
         * @return AbstractProperty
         */
        public function getTranslation ()
        {
            return $this->Translation;
        }


    }
