<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 17/07/2015
     * Time: 1:41 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections\V1;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Profiles;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;
    use UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    /**
     * Class ApplicationProfile
     *
     * Whilst most of the properties should be in their contextual profiles,
     * some, such as the Sort Date, which are needed by the Application, are
     * kept in this file, especially as they may be system generated if not
     * found in the source resource
     */
    class ApplicationProfile {

        use Profiles\DPLA\SourceResource;
        use OpenCollections\ArtifactDescription;
        use OpenCollections\BibliographicDescription;
        use OpenCollections\DigitalPreservation;
        use OpenCollections\FieldNotesDescription;
        use OpenCollections\GeographicDescription;
        use OpenCollections\MediaDescription;
        use OpenCollections\PublicationDescription;
        use OpenCollections\SourceResource;
        use OpenCollections\ThesisDescription;

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
            $this->SortDate->setAttribute('lang', 'en');
        }


        public function generateSchemaDefinitionAsJSON () {
            return $this->getAll();
        }


        public function setAccessIdentifier ($value, $label = false) {
            $this->AccessIdentifier = new Schemas\DCTerms\Properties\Identifier($value, $label);
        }


        private function getAll ($verbose = false) {

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
