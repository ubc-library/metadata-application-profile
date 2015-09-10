<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:24
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OC;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    trait MediaDescription {

        /**
         * @var AbstractProperty
         */
        protected $Credits;

        /**
         * @var AbstractProperty
         */
        protected $Episode;

        /**
         * @return AbstractProperty
         */
        public function getCredits () {

            return $this->Credits;
        }

        /**
         * @return AbstractProperty
         */
        public function getEpisode () {

            return $this->Episode;
        }

    }
