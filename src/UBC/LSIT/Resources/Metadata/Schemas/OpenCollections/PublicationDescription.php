<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:24
     */
    
    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait PublicationDescription {

        /**
         * @var AbstractProperty
         */
        protected $Citation;

        /**
         * @var AbstractProperty
         */
        protected $CopyrightHolder;

        /**
         * @var AbstractProperty
         */
        protected $GrantFundingAgency;

        /**
         * @var AbstractProperty
         */
        protected $PeerReviewStatus;

        /**
         * @var AbstractProperty
         */
        protected $RightsURI;

        /**
         * @var AbstractProperty
         */
        protected $ScholarlyLevel;

        /**
         * @var AbstractProperty
         */
        protected $Series;

        /**
         * @var AbstractProperty
         */
        protected $URI;

        /**
         * @return AbstractProperty
         */
        public function getCitation () {

            return $this->Citation;
        }

        /**
         * @return AbstractProperty
         */
        public function getCopyrightHolder () {

            return $this->CopyrightHolder;
        }

        /**
         * @return AbstractProperty
         */
        public function getGrantFundingAgency () {

            return $this->GrantFundingAgency;
        }

        /**
         * @return AbstractProperty
         */
        public function getPeerReviewStatus () {

            return $this->PeerReviewStatus;
        }

        /**
         * @return AbstractProperty
         */
        public function getRightsURI () {

            return $this->RightsURI;
        }

        /**
         * @return AbstractProperty
         */
        public function getScholarlyLevel () {

            return $this->ScholarlyLevel;
        }

        /**
         * @return AbstractProperty
         */
        public function getSeries () {

            return $this->Series;
        }

        /**
         * @return AbstractProperty
         */
        public function getURI () {

            return $this->URI;
        }

    }