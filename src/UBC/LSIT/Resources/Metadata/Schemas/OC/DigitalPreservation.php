<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:23
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OC;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    trait DigitalPreservation {

        /**
         * @var AbstractProperty
         */
        protected $AIPUUID;

        /**
         * @var AbstractProperty
         */
        protected $FileUUID;

        /**
         * @return AbstractProperty
         */
        public function getAIPUUID () {

            return $this->AIPUUID;
        }

        /**
         * @return AbstractProperty
         */
        public function getFileUUID () {

            return $this->FileUUID;
        }

    }
