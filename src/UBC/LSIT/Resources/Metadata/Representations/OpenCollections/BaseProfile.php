<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 17/07/2015
     * Time: 1:41 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Profiles;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;
    use UBC\LSIT\Resources\Metadata\Profiles\DPLA;
    use UBC\LSIT\Resources\Metadata\Profiles\EDM;
    use UBC\LSIT\Resources\Metadata\Profiles\FI;
    use UBC\LSIT\Resources\Metadata\Profiles\OA;
    use UBC\LSIT\Resources\Metadata\Profiles\OpenCollections;
    use UBC\LSIT\Resources\Metadata\Profiles\ORE;
    use UBC\LSIT\Resources\Metadata\Profiles\SKOS;
    use UBC\LSIT\Resources\Metadata\Profiles\VIVO;

    /**
     * Class ApplicationProfile
     *
     * Whilst most of the properties should be in their contextual profiles,
     * some, such as the Sort Date, which are needed by the Application, are
     * kept in this file, especially as they may be system generated if not
     * found in the source resource
     */
    class BaseProfile
    {

        use DPLA\SourceResource;
        use EDM\Place;
        use EDM\ProvidedCHO;
        use EDM\WebResource;
        use FI\AqRes;
        use FI\DepthBehav;
        use FI\FishingGround;
        use FI\HabitatBio;
        use OA\Annotation;
        use OpenCollections\ArtifactDescription;
        use OpenCollections\DataDescription;
        use OpenCollections\DigitalPreservation;
        use OpenCollections\FieldNotesDescription;
        use OpenCollections\GeographicDescription;
        use OpenCollections\MediaDescription;
        use OpenCollections\PublicationDescription;
        use OpenCollections\SourceResource;
        use OpenCollections\ThesisDescription;
        use OpenCollections\UnmappedDescription;
        use OpenCollections\WebResource;
        use ORE\Aggregation;
        use SKOS\Concept;
        use VIVO\DateTimeValue;
        use VIVO\ThesisDegree;
        use VIVO\EducationalProcess;


        /**
         * @var AbstractProperty
         */
        protected $SortDate;


        /**
         * @param \OpenLibrary\Metadata\Schemas\AbstractProperty $obj
         * @param                                                $propertyName
         * @param array                                          $attributes
         * @param bool|false                                     $isArray
         */
        protected function _setProperty (AbstractProperty $obj, $propertyName, array $attributes, $isArray = false) {

            $attributes['ns']       = $this->getNamespace($obj);
            $attributes['classmap'] = $this->getClassmap($propertyName);
            $attributes['property'] = $obj->getName();//was ocmap
            $obj->setAttributes($attributes);
            if($isArray) {
                $this->{$propertyName}[] = $obj;
            }
            else {
                $this->{$propertyName} = $obj;
            }
        }

        public function setFullText ($v = false, $t = false, $l = 'FullText')
        {
            $obj = new Schemas\OpenAnnotation\Annotation($v, $t, $l);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('FullText');
            $obj->setAttributes ($attributes);
            $this->FullText = $obj;
        }


        /**
         * @param bool|false $date
         */
        public function __construct ($date = false)
        {

            if ($date === false) {
                $this->SortDate = new Schemas\DC\Properties\Date(time (), 'Fake Sort Date');
            } else {
                $this->SortDate = new Schemas\DC\Properties\Date($date, 'Sort Date');
            }
            $this->SortDate->setAttribute ('lang', 'en');
            $this->SortDate->setAttribute ('classmap', $this->getClassmap ('SortDate'));
        }

        /**
         * @return AbstractProperty
         */
        public function getSortDate ()
        {
            return $this->SortDate;
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setSortDate ($value = false, $label = false, $attributes = [])
        {
            if ($value === false) {
                $obj = new Schemas\DC\Properties\Date(time (), 'Fake Sort Date');
            } else {
                $obj = new Schemas\DC\Properties\Date($value, 'Sort Date');
            }
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('AlternateTitle');
            $obj->setAttributes ($attributes);
            $this->SortDate = $obj;
        }

        protected function getNamespace ($obj)
        {
            $reflect = new \ReflectionObject($obj);
            $ret = $reflect->getParentClass ()->getDefaultProperties ();

            return isset($ret['uri']) ? $ret ['uri'] : false;
        }

        protected function getClasspath ($name)
        {
            /*
            $reflect = new \ReflectionClass($this);
            $traits = $reflect->getTraits ();

            foreach ($traits as $k => $trait) {
                $props = $trait->getProperties ();
                foreach ($props as $prop) {
                    if ($prop->name === $name) {
                        $class = $prop->class;
                        $class = str_ireplace ("openlibrary\\",'', $class);
                        $class = str_ireplace ("metadata\\",'', $class);
                        $class = str_ireplace ("profiles\\",'', $class);
                        $class = str_ireplace ("properties\\",'', $class);
                        $class = str_ireplace ("ubc\\",'', $class);
                        $class = str_ireplace ("lsit\\",'', $class);
                        $class = str_ireplace ("resources\\",'', $class);
                        $class = str_ireplace ("schemas\\",'', $class);
                        $class = str_ireplace ("dpla\\", 'dpla:', $class);
                        $class = str_ireplace ("opencollections\\", 'oc:', $class);
                        return $class;
                    }
                }
            }*/
            return $this->getClassmap ($name);
        }

        protected function getClassmap ($name)
        {
            $reflect = new \ReflectionClass(new self());
            $traits = $reflect->getTraits ();

            foreach ($traits as $k => $trait) {
                $props = $trait->getProperties ();
                foreach ($props as $prop) {
                    error_log("{$prop->name} |  {$name}");
                    if (trim("{$prop->name}") === trim("{$name}")) {
                        $class = $prop->class;
                        $class = str_ireplace ("openlibrary\\", '', $class);
                        $class = str_ireplace ("metadata\\", '', $class);
                        $class = str_ireplace ("profiles\\", '', $class);
                        $class = str_ireplace ("properties\\", '', $class);
                        $class = str_ireplace ("ubc\\", '', $class);
                        $class = str_ireplace ("lsit\\", '', $class);
                        $class = str_ireplace ("resources\\", '', $class);
                        $class = str_ireplace ("schemas\\", '', $class);
                        $class = str_ireplace ("dpla\\", 'dpla:', $class);
                        $class = str_ireplace ("edm\\", 'edm:', $class);
                        $class = str_ireplace ("fi\\", 'fi:', $class);
                        $class = str_ireplace ("oa\\", 'oa:', $class);
                        $class = str_ireplace ("opencollections\\", 'oc:', $class);
                        $class = str_ireplace ("ore\\", 'ore:', $class);
                        $class = str_ireplace ("skos\\", 'skos:', $class);
                        $class = str_ireplace ("vivo\\", 'vivo:', $class);
                        return $class;
                    }
                }
            }
            return "unmapped:{$name}";
        }

        private function getAll ($verbose)
        {
            if ($verbose) {
                return $this->getAllVerbosely ();
            } else {
                $data = [];
                foreach ($this as $k => $v) {
                    if (isset($v) && !is_null ($v)) {
                        $cmd = "get{$k}";
                        if (method_exists ($this, $cmd)) {
                            $v = $this->{$cmd}();
                            if (is_array ($v)) {
                                foreach ($v as &$_v) {
                                    $data[$k][] = [
                                          'label'   => $_v->getLabel ()
                                        , 'value'   => $_v->getValue ()
                                        , 'attrs'   => $_v->getAttributes ()
                                    ];
                                }
                            } else {
                                $data[$k][] = [
                                      'label'   => $v->getLabel ()
                                    , 'value'   => $v->getValue ()
                                    , 'attrs'   => $v->getAttributes ()
                                ];

                            }
                        }

                    } else {
                        unset($data[$k]);
                    }
                }

                return $data;
            }
        }

        private function getAllVerbosely ()
        {
            $data = [];
            foreach ($this as $k => $v) {
                if (isset($v) && !is_null ($v)) {
                    $cmd = "get{$k}";
                    if (method_exists ($this, $cmd)) {
                        $v = $this->{$cmd}();
                        if (is_array ($v)) {
                            foreach ($v as &$_v) {
                                $data[$k][] = [
                                      'label'   => $_v->getLabel ()
                                    , 'value'   => $_v->getValue ()
                                    , 'ocmap'   => $_v->getName ()
                                    , 'attrs'   => $_v->getAttributes ()
                                    , 'iri'     => $_v->getUri ()
                                    , 'explain' => $_v->getDescription ()
                                ];
                            }
                        } else {
                            $data[$k][] = [
                                  'label'   => $v->getLabel ()
                                , 'value'   => $v->getValue ()
                                , 'ocmap'   => $v->getName ()
                                , 'attrs'   => $v->getAttributes ()
                                , 'iri'     => $v->getUri ()
                                , 'explain' => $v->getDescription ()
                            ];

                        }
                    }

                } else {
                    unset($data[$k]);
                }
            }

            return $data;
        }

        public function generateSchemaDefinitionAsArray ($verbose = true)
        {
            return $this->getAll ($verbose);
        }

        /** @deprecated */
        public function generateSchemaDefinitionAsJSON ($verbose = true)
        {
            return $this->getAll ($verbose);
        }

    }
