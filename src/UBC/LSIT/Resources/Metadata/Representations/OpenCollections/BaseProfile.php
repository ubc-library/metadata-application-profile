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
    use UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;
    use Sabre\XML\Writer;

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

        use Profiles\DPLA\SourceResource;
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

        /**
         * @var AbstractProperty
         */
        private $SortDate;

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

        protected function getClassmap ($name)
        {

            $ret = false;
            $reflect = new \ReflectionClass($this);
            $traits = $reflect->getTraits ();

            foreach ($traits as $k => $trait) {
                $props = $trait->getProperties ();
                foreach ($props as $prop) {
                    if ($prop->name === $name) {
                        $class = $prop->class;
                        $class = str_ireplace ("openlibrary\\", "", $class);
                        $class = str_ireplace ("metadata\\", "", $class);
                        $class = str_ireplace ("profiles\\", "", $class);
                        $class = str_ireplace ("properties\\", "", $class);
                        $class = str_ireplace ("ubc\\", "", $class);
                        $class = str_ireplace ("lsit\\", "", $class);
                        $class = str_ireplace ("resources\\", "", $class);
                        $class = str_ireplace ("schemas\\", "", $class);
                        $class = str_ireplace ("dpla\\", "dpla:", $class);
                        $class = str_ireplace ("opencollections\\", "oc:", $class);

                        return $class;
                    }
                }

            }

            return $ret;
        }



        public function generateSchemaDefinitionAsXML ($verbose = true)
        {
            $ret = $this->getAll ($verbose);

            foreach ($ret as $k => &$property) {
                if (is_array ($property) && count (array_filter ($property)) == 0) {
                    unset ($ret[$k]);
                }
            }

            $xml = [];

            $xmlWriter = new Writer();
            $xmlWriter->openMemory ();
            $xmlWriter->startDocument ();
            $xmlWriter->setIndent (true);
            $xmlWriter->namespaceMap = ['https://open.library.ubc.ca/terms#' => 'oc'];

            $xmlWriter->startElement ('{https://open.library.ubc.ca/terms#}OpenCollectionsItem');

            foreach ($ret as $k => &$property) {
                if ( !isset($property['ocmap'])) {
                    foreach ($property as $_k => &$_property) {
                        $ns = isset($_property['ns']) ? $property['ns'] : "";
                        $tg = explode (":", $_property['ocmap']);
                        $tg = array_pop ($tg);

                        $attrs = [
                            'lang' => $_property['attrs']['lang']
                        ];

                        $xml [] = [
                            'name'         => "{{$ns}}$tg"
                            , 'attributes' => $attrs
                            , 'value'      => is_object ($_property['value']) ? $_property['value']->getValue () : $_property['value']
                        ];
                    }
                } else {
                    $ns = isset($property['ns']) ? $property['ns'] : "";
                    $tg = explode (":", $property['ocmap']);
                    $tg = array_pop ($tg);

                    $attrs = [
                        'lang' => $property['attrs']['lang']
                    ];

                    $xml [] = [
                        'name'         => "{{$ns}}$tg"
                        , 'attributes' => $attrs
                        , 'value'      => is_object ($property['value']) ? $property['value']->getValue () : $property['value']
                    ];
                }
            }

            $xmlWriter->write ($xml);
            $xmlWriter->endElement ();

            return $xmlWriter->outputMemory ();
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
