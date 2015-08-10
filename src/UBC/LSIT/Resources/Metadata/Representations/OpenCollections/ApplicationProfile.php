<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 17/07/2015
     * Time: 1:41 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    /**
     * Class ApplicationProfile
     *
     * @package UBC\LSIT\Resources\Metadata\Representations\OpenCollections
     *
     * Whilst most of the properties should be in their contextual profiles,
     * some, such as the Sort Date, which are needed by the Application, are
     * kept in this file, especially as they may be system generated if not
     * found in the source resource
     */
    class ApplicationProfile extends BaseProfile {

        /**
         * @var AbstractProperty
         */
        private $AggregatedSourceRepository;

        /**
         * @var AbstractProperty
         */
        private $DigitalResourceOriginalRecord;


        /**
         * @var AbstractProperty
         */
        private $HasView;

        /**
         * @var AbstractProperty
         */
        private $ResourceAnnotated;

        /**
         * @var AbstractProperty
         */
        private $SortDate;

        /**
         * @param bool|false $date
         */
        public function __construct ($date = false) {

            if($date === false) {
                $this->SortDate = new Schemas\DC\Properties\Date($date, 'Sort Date');
            }
            $this->SortDate->setAttribute('lang','en');
        }


        public function generateSchemaDefinitionAsJSON () {

            $this->setAccessIdentifier(" ");

            return $this->getAll();
        }

        public function getAll ($verbose = false) {

            $data = [];
            foreach ($this as $k => $v) {
                if($verbose) {
                    if(isset($v) && !is_null($v)) {
                        $data[ $k ] = [
                            'label'   => $v->getLabel()
                            ,
                            'value'   => $v->getValue()
                            ,
                            'ocmap'   => $v->getName()
                            ,
                            'iri'     => $v->getUri()
                            ,
                            'explain' => $v->getDescription()
                        ];
                    }
                    else {
                        $data[ $k ] = [];
                    }
                }
                else {
                    if(isset($v) && !is_null($v)) {
                        $data[ $k ] = [
                            'label' => $v->getLabel()
                            ,
                            'value' => $v->getValue()
                            ,
                            'ocmap' => $v->getName()
                        ];
                    }
                    else {
                        $data[ $k ] = [];
                    }
                }
            }

            return $data;
        }
    }
