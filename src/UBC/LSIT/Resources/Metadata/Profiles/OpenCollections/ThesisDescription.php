<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:55
     */

    namespace UBC\LSIT\Resources\Metadata\Profiles\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait ThesisDescription {

        /**
         * @var AbstractProperty
         */
        protected $Campus;

        /**
         * @var AbstractProperty
         */
        protected $DegreeGrantor;

        /**
         * @var AbstractProperty
         */
        protected $Program;

        /**
         * @return AbstractProperty
         */
        public function getCampus () {

            return $this->Campus;
        }

        /**
         * @return AbstractProperty
         */
        public function getDegreeGrantor () {

            return $this->DegreeGrantor;
        }

        /**
         * @return AbstractProperty
         */
        public function getProgram () {

            return $this->Program;
        }

    }
