<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:24
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OC;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    trait SourceResource {

        /**
         * @var AbstractProperty
         */
        protected $DateCreated;

        /**
         * @var AbstractProperty
         */
        protected $DateIssued;

        /**
         * @var AbstractProperty
         */
        protected $Source;

        /**
         * @return AbstractProperty
         */
        public function getDateCreated () {

            return $this->DateCreated;
        }

        /**
         * @return AbstractProperty
         */
        public function getDateIssued () {

            return $this->DateIssued;
        }

        /**
         * @return AbstractProperty
         */
        public function getSource () {

            return $this->Source;
        }

    }
