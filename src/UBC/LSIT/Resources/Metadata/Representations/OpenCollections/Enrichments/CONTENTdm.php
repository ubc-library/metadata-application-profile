<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 09 Aug 15
     * Time: 19:00
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections\Enrichments;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    /**
     * Class CONTENTdm
     *
     * @package UBC\LSIT\Resources\Metadata\Representations\OpenCollections\Enrichments
     */
    trait CONTENTdm {



        /**
         * @var AbstractProperty
         */
        private $CatalogueRecord;





        /**
         * @var AbstractProperty
         */
        private $DigitalIdentifier;








        /**
         * @var AbstractProperty
         */
        private $RBSCLocation;



        /**
         * @var AbstractProperty
         */
        private $Source;

        /**
         * @var AbstractProperty
         */
        private $Translation;



    }
