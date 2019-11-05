<?php
    /*
    #
    #   User: skhanker
    #   Date: 23/03/2016
    #   Time: 3:09 PM
    #
    */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections;


    class Mapper {

        private static $fields = [
            'AlternateTitle'                => [
                'field' => 'alternateTitle',
                'label' => 'Alternate Title'
            ],
            'AggregatedSourceRepository'    => [
                'field' => 'aggregatedSourceRepository',
                'label' => 'Aggregated Source Repository'
            ],
            'Affiliation'                   => [
                'field' => 'affiliation',
                'label' => 'Affiliation'
            ],
            'Annotations'                   => [
                'field' => 'annotations',
                'label' => 'Annotations'
            ],
            'AIPUUID'                       => [
                'field' => 'aipUUID',
                'label' => 'AIP UUID'
            ],
            'Bottom'                        => [
                'field' => 'bottom',
                'label' => 'Bottom'
            ],
            'Campus'                        => [
                'field' => 'campus',
                'label' => 'Campus'
            ],
            'Category'                      => [
                'field' => 'category',
                'label' => 'Category'
            ],
            'CatalogueNumber'               => [
                'field' => 'catalogueNumber',
                'label' => 'Catalogue Number'
            ],
            'CatalogueRecord'               => [
                'field' => 'catalogueRecord',
                'label' => 'Catalogue Record'
            ],
            'Citation'                      => [
                'field' => 'citation',
                'label' => 'Citation'
            ],
            'Collection'                    => [
                'field' => 'collection',
                'label' => 'Collection'
            ],
            'CollectionDescription'         => [
                'field' => 'collectionDescription',
                'label' => 'Collection Description'
            ],
            'CollectionTitle'               => [
                'field' => 'collectionTitle',
                'label' => 'Collection Title'
            ],
            'CollectedBy'                   => [
                'field' => 'collectedBy',
                'label' => 'Collected By'
            ],
            'CollectorNumber'               => [
                'field' => 'collectorNumber',
                'label' => 'Collector Number'
            ],
            'Contents'                      => [
                'field' => 'contents',
                'label' => 'Contents'
            ],
            'Contributor'                   => [
                'field' => 'contributor',
                'label' => 'Contributor(s)'
            ],
            'CopyrightHolder'               => [
                'field' => 'copyrightHolder',
                'label' => 'Copyright Holder(s)'
            ],
            'Country'                       => [
                'field' => 'country',
                'label' => 'Country'
            ],
            'Cover'                         => [
                'field' => 'cover',
                'label' => 'Cover'
            ],
            'Creator'                       => [
                'field' => 'creator',
                'label' => 'Creator(s)'
            ],
            'Credits'                       => [
                'field' => 'credits',
                'label' => 'Credits'
            ],
            'Current'                       => [
                'field' => 'current',
                'label' => 'Current'
            ],
            'Date'                          => [
                'field' => 'date',
                'label' => 'Date'
            ],
            'DateAvailable'                 => [
                'field' => 'dateAvailable',
                'label' => 'Date Available'
            ],
            'DateCreated'                   => [
                'field' => 'dateCreated',
                'label' => 'Date Created'
            ],
            'DateIssued'                    => [
                'field' => 'dateIssued',
                'label' => 'Date Issued'
            ],
            'DegreeGrantor'                 => [
                'field' => 'degreeGrantor',
                'label' => 'Degree Grantor'
            ],
            'Degree'                        => [
                'field' => 'degree',
                'label' => 'Degree'
            ],
            'DepthOfCapture'                => [
                'field' => 'depthOfCapture',
                'label' => 'Depth Of Capture'
            ],
            'DepthOfWater'                  => [
                'field' => 'depthOfWater',
                'label' => 'Depth Of Water'
            ],
            'Description'                   => [
                'field' => 'description',
                'label' => 'Description'
            ],
            'DigitalResourceOriginalRecord' => [
                'field' => 'digitalResourceOriginalRecord',
                'label' => 'Digital Resource Original Record'
            ],
            'DistanceOffshore'              => [
                'field' => 'distanceOffshore',
                'label' => 'Distance Offshore'
            ],
            'Edition'                       => [
                'field' => 'edition',
                'label' => 'Edition'
            ],
            'Episode'                       => [
                'field' => 'episode',
                'label' => 'Episode'
            ],
            'Extent'                        => [
                'field' => 'extent',
                'label' => 'Extent'
            ],
            'FileFormat'                    => [
                'field' => 'fileFormat',
                'label' => 'Format'
            ],
            'FileUUID'                      => [
                'field' => 'fileUUID',
                'label' => 'File UUID'
            ],
            'FullText'                      => [
                'field' => 'fullText',
                'label' => 'Full Text'
            ],
            'Genre'                         => [
                'field' => 'genre',
                'label' => 'Genre'
            ],
            'GeographicLocation'            => [
                'field' => 'geographicLocation',
                'label' => 'Geographic Location'
            ],
            'GrantFundingAgency'            => [
                'field' => 'grantFundingAgency',
                'label' => 'Grant Funding Agency'
            ],
            'GraduationDate'                => [
                'field' => 'graduationDate',
                'label' => 'Graduation Date'
            ],
            'HasView'                       => [
                'field' => 'hasView',
                'label' => 'Has View'
            ],
            'Identifier'                    => [
                'field' => 'identifier',
                'label' => 'Identifier'
            ],
            'IsShownAt'                     => [
                'field' => 'isShownAt',
                'label' => 'IsShownAt'
            ],
            'Language'                      => [
                'field' => 'language',
                'label' => 'Language'
            ],
            'Latitude'                      => [
                'field' => 'latitude',
                'label' => 'Latitude'
            ],
            'License'                       => [
                'field' => 'license',
                'label' => 'License'
            ],
            'Locality'                      => [
                'field' => 'locality',
                'label' => 'Locality'
            ],
            'Longitude'                     => [
                'field' => 'longitude',
                'label' => 'Longitude'
            ],
            'Map'                           => [
                'field' => 'map',
                'label' => 'Map'
            ],
            'MethodOfCapture'               => [
                'field' => 'methodOfCapture',
                'label' => 'Method Of Capture'
            ],
            'Notes'                         => [
                'field' => 'notes',
                'label' => 'Notes'
            ],
            'OriginalPreserved'             => [
                'field' => 'originalPreserved',
                'label' => 'Original Preserved'
            ],
            'PeerReviewStatus'              => [
                'field' => 'peerReviewStatus',
                'label' => 'Peer Review Status'
            ],
            'PersonOrCorporation'           => [
                'field' => 'personOrCorporation',
                'label' => 'Person/Corporation'
            ],
            'Program'                       => [
                'field' => 'program',
                'label' => 'Program'
            ],
            'ProjectWebsite'                => [
                'field' => 'projectWebsite',
                'label' => 'Project Website'
            ],
            'Provenance'                      => [
                'field' => 'provenance',
                'label' => 'Provenance'
            ],
            'Provider'                      => [
                'field' => 'provider',
                'label' => 'Provider'
            ],
            'ProvinceOrState'               => [
                'field' => 'provinceOrState',
                'label' => 'Province/State'
            ],
            'Publisher'                     => [
                'field' => 'publisher',
                'label' => 'Publisher'
            ],
            'PublisherDOI'                     => [
                'field' => 'publisherDOI',
                'label' => 'Publisher DOI'
            ],
            'RBSCLocation'                  => [
                'field' => 'rbscLocation',
                'label' => 'RBSC Location'
            ],
            'Reference'                     => [
                'field' => 'reference',
                'label' => 'Reference'
            ],
            'Rights'                        => [
                'field' => 'rights',
                'label' => 'Rights'
            ],
            'RightsURI'                     => [
                'field' => 'rightsURI',
                'label' => 'Rights URI'
            ],
            'ScholarlyLevel'                => [
                'field' => 'scholarlyLevel',
                'label' => 'ScholarlyLevel'
            ],
            'Series'                        => [
                'field' => 'series',
                'label' => 'Series'
            ],
            'Shore'                         => [
                'field' => 'shore',
                'label' => 'Shore'
            ],
            'SortDate'                      => [
                'field' => 'sortDate',
                'label' => 'Sort Date'
            ],
            'Source'                        => [
                'field' => 'source',
                'label' => 'Source'
            ],
            'StreamWidth'                   => [
                'field' => 'streamWidth',
                'label' => 'Stream Width'
            ],
            'Subject'                       => [
                'field' => 'subject',
                'label' => 'Subject'
            ],
            'Temperature'                   => [
                'field' => 'temperature',
                'label' => 'Temperature'
            ],
            'Tide'                          => [
                'field' => 'tide',
                'label' => 'Tide'
            ],
            'Time'                          => [
                'field' => 'time',
                'label' => 'Time'
            ],
            'Title'                         => [
                'field' => 'title',
                'label' => 'Title'
            ],
            'Translation'                   => [
                'field' => 'translation',
                'label' => 'Translation'
            ],
            'Type'                          => [
                'field' => 'type',
                'label' => 'Type'
            ],
            'URI'                           => [
                'field' => 'uri',
                'label' => 'URI'
            ],
            'Vegetation'                    => [
                'field' => 'vegetation',
                'label' => 'Vegetation'
            ],
            'Water'                         => [
                'field' => 'water',
                'label' => 'Water'
            ],
            'Watershed'                     => [
                'field' => 'watershed',
                'label' => 'Watershed'
            ]
        ];

        public static function getSystemField ($lookup)
        {
            if (!empty(self::$fields[$lookup])) {
                return self::$fields[$lookup];
            }
            error_log ("Field not found for key [$lookup]");

            return $lookup;
        }

        public static function getAll () {
            return self::$fields;
        }

        public static function getAllAsJSON () {
            return json_encode(self::$fields);
        }

    }
