<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 17/07/2015
     * Time: 1:41 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections;

    use UBC\LSIT\Resources\Metadata\Schemas;
    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    /**
     * Class ApplicationProfile
     *
     * Whilst most of the properties should be in their contextual profiles,
     * some, such as the Sort Date, which are needed by the Application, are
     * kept in this file, especially as they may be system generated if not
     * found in the source resource
     */
    class ApplicationProfile extends BaseProfile
    {

        /**
         * @var AbstractProperty
         */
        protected $SortDate;
        /**
         * @var int
         */
        private $version = 1;

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
            $attributes['ns'] = $obj->getUri ();
            $attributes['classmap'] = $this->getClassmap ('AlternateTitle');
            $obj->setAttributes ($attributes);
            $this->SortDate = $obj;
        }
        /**
         * @param bool|true $verbose
         *
         * @return string
         */
        /*
        public function generateSchemaDefinitionAsXML ($verbose = true)
        {
            $ret = $this->getAll ($verbose);

            foreach ($ret as $k => &$property) {
                if (is_array ($property) && count (array_filter ($property)) === 0) {
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
                if (empty($property['ocmap'])) {
                    foreach ($property as $_k => &$_property) {
                        $ns = !empty($_property['ns']) ? $property['ns'] : '';
                        $tg = explode (':', $_property['ocmap']);
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
        */

        /**
         * @param bool|true $verbose
         *
         * @return array
         */
        public function generateSchemaDefinitionAsArray ($verbose = true)
        {

            return $this->getAll ($verbose);
        }

        /**
         * @param bool|true $verbose
         *
         * @return array
         *
         * @deprecated
         *
         */
        public function generateSchemaDefinitionAsJSON ($verbose = true)
        {

            return $this->getAll ($verbose);
        }

        public function getFullText ()
        {
            return $this->FullText;
        }

        /**
         * @param $verbose
         *
         * @return array
         */
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
                                foreach ($v as $_v) {
                                    $data[$k][] = $this->getStructure ($_v, $k, false);
                                }
                            } else {
                                $data[$k][] = $this->getStructure ($v, $k, false);
                            }
                        }

                    } else {
                        unset($data[$k]);
                    }
                }

                return $data;
            }
        }

        /**
         * @return array
         */
        private function getAllVerbosely ()
        {

            $data = [];

            foreach ($this as $k => $v) {
                if (isset($v) && !is_null ($v)) {
                    $cmd = "get{$k}";
                    if (method_exists ($this, $cmd)) {
                        $v = $this->{$cmd}();
                        if (is_array ($v)) {
                            foreach ($v as $_v) {
                                $data[$k][] = $this->getStructure ($_v, $k, true);
                            }
                        } else {
                            $data[$k][] = $this->getStructure ($v, $k, true);
                        }
                    }
                } else {
                    unset($data[$k]);
                }
            }

            return $data;
        }

        public function getStructure (AbstractProperty $v, $k = '', $full = true)
        {
            $value = $v->getValue ();
            if (in_array ($k, ['Subject', 'Genre', 'Language'], true)) {
                $value = ucwords ($value);
            }
            if ($full) {
                return [
                      'label'     => $v->getLabel ()
                    , 'value'   => $value
                    , 'attrs'   => $v->getAttributes ()
                    , 'iri'     => $v->getUri ()
                    , 'explain' => $v->getDescription ()
                ];
            } else {
                return [
                      'label'   => $v->getLabel ()
                    , 'value' => $value
                    , 'attrs' => $v->getAttributes ()
                ];
            }
        }

        /**
         * @return array
         */
        public function generateSchemaSearchMapAsArray ()
        {

            return $this->getSearchFields ();
        }

        /**
         * @return array
         */
        private function getSearchFields ()
        {

            $data = [];
            foreach ($this as $k => $property) {
                $data[$k][] = [
                    'label'  => LabelMapper::getPropertyLabel ($k)
                    ,
                    'sysmap' => SearchMapper::getSystemField ($k)
                ];
            }

            return $data;
        }

        # Profile Properties Below
        # ------------------------

        /**
         * @param array  $data
         * @param string $ignoreThisPrefix a prefix that can be put on properties to not check them as stubs
         *
         * @return array
         *
         *   $data Looks Like
         *
         *  "unused_nick": {
         *      "property": "Title",
         *      "language": "en",
         *      "label"   : "Title \u540d\u79f0\uff08\u30ed\u30fc\u30de\u5b57\uff09",
         *      "value": [
         *          "01 bankoku_chiri_cover_0001"
         *      ]
         *  }
         *
         */
        public function generateMetadataStubs (array $data, $ignoreThisPrefix = 'internal')
        {

            $ret = [];

            $uniqueFields = [
                'Source'
                ,
                'CatalogueRecord'
                ,
                'Rights'
                ,
                'DateAvailable'
            ];

            foreach ($data as $k => $props) {
                if (stripos ($k, $ignoreThisPrefix) === false) {
                    if (isset($props['property'])) {
                        if (isset($props['value']) && count ($props['value']) > 0) {
                            if ( !is_array ($props['value'])) {
                                $props['value'] = [$props['value']];
                            }
                            if (in_array ($props['property'], $uniqueFields, true)) {
                                $ret[$props['property']] = [
                                    'label' => $props['label'],
                                    'value' => array_pop ($props['value']),
                                    'attrs' => [
                                        'lang' => $props['language']
                                    ]
                                ];
                            } else {
                                foreach ($props['value'] as $value) {
                                    $ret[$props['property']][] = [
                                        'label' => $props['label'],
                                        'value' => $value,
                                        'attrs' => [
                                            'lang' => $props['language']
                                        ]
                                    ];
                                }
                            }
                        }
                    } else {
                        if ( !in_array ("{$k}", ['id', 'fake12345', 'dmrecord', 'find', 'dmmodified', 'dmoclcno', 'dmcreated', 'fullrs'], true)) {
                            error_log ("MAP_ERROR: Has not been specified how to map Property: {$k} => " . json_encode ($props));
                        }
                    }
                }
            }

            return $ret;
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setAffiliation ($value, $label = false, array $attributes = [])
        {

            $this->_setProperty (new Schemas\VIVO\Properties\DepartmentOrSchool ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setAggregatedSourceRepository ($value, $label = false, array $attributes = [])
        {

            $this->_setProperty (new Schemas\EDM\Properties\DataProvider ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setAIPUUID ($value, $label = false, array $attributes = [])
        {

            $this->_setProperty (new Schemas\OC\Properties\IdentifierAIP ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setAlternateTitle ($value, $label = false, array $attributes = [])
        {

            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setAnnotation ($value, $label = false, array $attributes = [])
        {
            #todo skk this should be annotation
            $this->_setProperty (new Schemas\SKOS\Properties\Note ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setBottom ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\FI\Properties\BottomType ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCampus ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\DegreeCampus ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCatalogueNumber ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Identifier ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCatalogueRecord ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\IsReferencedBy ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, false);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCategory ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Subject ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCitation ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\IdentifierCitation ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCollectedBy ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DC\Properties\Creator ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCollection ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\IsPartOf ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCollectionDescription ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCollectionTitle ($value, $label = false, array $attributes = [])
        {

            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCollectorNumber ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\CollectorNumber ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setContents ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\TableOfContents ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setContributor ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Contributor ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCopyrightHolder ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\RightsCopyright ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCountry ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Coverage ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCover ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\Cover ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCreator ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Creator ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCredits ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Contributor ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCurrent ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\Current ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDate ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DC\Properties\Date ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDateAvailable ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Issued ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, false);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDateCreated ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Created ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDateIssued ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Issued ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDegree ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\VIVO\Properties\RelatedDegree ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDegreeGrantor ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\DegreeGrantor ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDepthOfCapture ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\FI\Properties\DepthZone ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDepthOfWater ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\FI\Properties\Bathymetry ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDescription ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Description ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDigitalResourceOriginalRecord ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\EDM\Properties\AggregatedCHO ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDistanceOffshore ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\FI\Properties\HorizontalDist ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setEdition ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\Edition ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setEpisode ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\DescriptionEpisode ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setExtent ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Extent ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setFileFormat ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DC\Properties\Format ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setFileUUID ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\IdentifierFile ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param string $v
         * @param string $l
         * @param array  $attrs
         */
        public function setFullText ($v = '', $l = 'FullText', $attrs = [])
        {
            #todo skk this is wrong, should be annotation
            $obj = new Schemas\SKOS\Properties\Note($v, $l);
            $attrs['ns'] = $obj->getUri ();
            $attrs['classmap'] = $this->getClassmap ('FullText');
            $obj->setAttributes ($attrs);
            $this->FullText = $obj;
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setGenre ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\EDM\Properties\HasType ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setGeographicLocation ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Spatial ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setGraduationDate ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\VIVO\Properties\DateIssued ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setGrantFundingAgency ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\HasGrantFunder ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setHasView ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\EDM\Properties\HasView ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setIdentifier ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Identifier ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setIsShownAt ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\EDM\Properties\IsShownAt ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setLanguage ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Language ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setLatitude ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\WGS84\Properties\Lat ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setLicense ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\License ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setLocality ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\FI\Properties\WaterAreaOverview ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setLongitude ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\WGS84\Properties\Long ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setMap ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\MapProperty ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setMethodOfCapture ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\CaptureMethod ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setNotes ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\SKOS\Properties\Note ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setOriginalPreserved ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\OriginalPreserved ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setPeerReviewStatus ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\PeerReviewStatus ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setPersonOrCorporation ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Subject ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setProgram ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\DegreeDiscipline ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setProjectWebsite ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Relation ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setProvider ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\EDM\Properties\Provider ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setProvinceOrState ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Spatial ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setPublisher ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Publisher ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setRBSCLocation ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\EDM\Properties\CurrentLocation ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setReference ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\Reference ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setRights ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Rights ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, false);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setRightsURI ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\RightsURI ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setScholarlyLevel ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\ScholarLevel ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setSeries ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\IsPartOf ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setShore ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\Shore($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setSource ($value, $label = false, array $attributes = [])
        {

            $this->_setProperty (new Schemas\DCTerms\Properties\Source ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, false);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setStreamWidth ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\StreamWidth($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setSubject ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Subject ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setTemperature ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\FI\Properties\WaterCondition($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setTide ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\Tide($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setTime ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Temporal($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setTitle ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Title ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setTranslation ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\EDM\Properties\IsDerivativeOf($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setType ($value, $label = false, array $attributes = [])
        {

            $this->_setProperty (new Schemas\DCTerms\Properties\Type ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setURI ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\IdentifierURI($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setVegetation ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\Vegetation($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setWater ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\Water($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setWatershed ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OC\Properties\Watershed($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }
    }
