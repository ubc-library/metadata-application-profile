<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:24
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\DPLA;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    /**
     * Class SourceResource
     *
     * THIS IS THE COMPLETE UNIT - V1 SPEC AS OF 08SEP2015
     */

    trait SourceResource {

        /**
         * @var AbstractProperty
         */
        protected $AlternateTitle;

        /**
         * @var AbstractProperty
         */
        protected $Collection;

        /**
         * @var AbstractProperty
         */
        protected $Contributor;

        /**
         * @var AbstractProperty
         */
        protected $Creator;

        /**
         * @var AbstractProperty
         */
        protected $Date;

        /**
         * @var AbstractProperty
         */
        protected $Description;

        /**
         * @var AbstractProperty
         */
        protected $Extent;

        /**
         * @var AbstractProperty
         */
        protected $Genre;

        /**
         * @var AbstractProperty
         */
        protected $GeographicLocation;

        /**
         * @var AbstractProperty
         */
        protected $Identifier;

        /**
         * @var AbstractProperty
         */
        protected $Language;

        /**
         * @var AbstractProperty
         */
        protected $ProjectWebsite;

        /**
         * @var AbstractProperty
         */
        protected $Publisher;

        /**
         * @var AbstractProperty
         */
        protected $Subject;

        /**
         * @var AbstractProperty
         */
        protected $Title;

        /**
         * @var AbstractProperty
         */
        protected $Type;

        /**
         * @return AbstractProperty
         */
        public function getAlternateTitle ()
        {
            return $this->AlternateTitle;
        }

        /**
         * @return AbstractProperty
         */
        public function getCollection ()
        {
            return $this->Collection;
        }

        /**
         * @return AbstractProperty
         */
        public function getContributor ()
        {
            return $this->Contributor;
        }

        /**
         * @return AbstractProperty
         */
        public function getCreator ()
        {
            return $this->Creator;
        }

        /**
         * @return AbstractProperty
         */
        public function getDate ()
        {
            return $this->Date;
        }

        /**
         * @return AbstractProperty
         */
        public function getDescription ()
        {
            return $this->Description;
        }

        /**
         * @return AbstractProperty
         */
        public function getExtent ()
        {
            return $this->Extent;
        }

        /**
         * @return AbstractProperty
         */
        public function getGenre ()
        {
            return $this->Genre;
        }

        /**
         * @return AbstractProperty
         */
        public function getGeographicLocation ()
        {
            return $this->GeographicLocation;
        }

        /**
         * @return AbstractProperty
         */
        public function getIdentifier ()
        {
            return $this->Identifier;
        }

        /**
         * @return AbstractProperty
         */
        public function getLanguage ()
        {
            return $this->Language;
        }

        /**
         * @return AbstractProperty
         */
        public function getProjectWebsite ()
        {
            return $this->ProjectWebsite;
        }

        /**
         * @return AbstractProperty
         */
        public function getPublisher ()
        {
            return $this->Publisher;
        }

        /**
         * @return AbstractProperty
         */
        public function getSubject ()
        {
            return $this->Subject;
        }

        /**
         * @return AbstractProperty
         */
        public function getTitle ()
        {
            return $this->Title;
        }

        /**
         * @return AbstractProperty
         */
        public function getType ()
        {
            return $this->Type;
        }


    }
