<?php

    namespace UBC\LSIT\Resources\Metadata\Profiles\EDM;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    /**
     * Class WebResource
     *
     * THIS IS THE COMPLETE UNIT - V1 SPEC AS OF 08SEP2015
     */
    trait WebResource
    {

        /**
         * @var AbstractProperty
         */
        protected $DateAvailable;

        /**
         * @var AbstractProperty
         */
        protected $FileFormat;

        /**
         * @var AbstractProperty
         */
        protected $IsShownAt;

        /**
         * @var AbstractProperty
         */
        protected $Rights;

        /**
         * @return AbstractProperty
         */
        public function getDateAvailable ()
        {
            return $this->DateAvailable;
        }

        /**
         * @return AbstractProperty
         */
        public function getFileFormat ()
        {
            return $this->FileFormat;
        }

        /**
         * @return AbstractProperty
         */
        public function getIsShownAt ()
        {
            return $this->IsShownAt;
        }

        /**
         * @return AbstractProperty
         */
        public function getRights ()
        {
            return $this->Rights;
        }
    }
