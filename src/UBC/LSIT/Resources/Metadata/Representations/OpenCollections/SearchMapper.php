<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 17/07/2015
     * Time: 1:41 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections;

    /**
     * Class SearchMapper
     *
     * The Search Mapper is used to map Application Profile properties to system properties e.g. for elasticsearch
     *
     * ApplicationProperty => SystemProperty
     */
    class SearchMapper
    {

        private static $systemFields = [
            'AlternateTitle'                => 'alternateTitle',
            'AggregatedSourceRepository'    => 'aggregatedSourceRepository',
            'Affiliation'                   => 'affiliation',
            'Annotations'                   => 'annotations',
            'AIPUUID'                       => 'aipUUID',
            'Bottom'                        => 'bottom',
            'Campus'                        => 'campus',
            'Category'                      => 'category',
            'CatalogueNumber'               => 'catalogueNumber',
            'CatalogueRecord'               => 'catalogueRecord',
            'Citation'                      => 'citation',
            'Collection'                    => 'collection',
            'CollectionDescription'         => 'collectionDescription',
            'CollectionTitle'               => 'collectionTitle',
            'CollectedBy'                   => 'collectedBy',
            'CollectorNumber'               => 'collectorNumber',
            'Contents'                      => 'contents',
            'Contributor'                   => 'contributor',
            'CopyrightHolder'               => 'copyrightHolder',
            'Country'                       => 'country',
            'Cover'                         => 'cover',
            'Creator'                       => 'creator',
            'Credits'                       => 'credits',
            'Current'                       => 'current',
            'Date'                          => 'date',
            'DateAvailable'                 => 'dateAvailable',
            'DateCreated'                   => 'dateCreated',
            'DateIssued'                    => 'dateIssued',
            'DegreeGrantor'                 => 'degreeGrantor',
            'Degree'                        => 'degree',
            'DepthOfCapture'                => 'depthOfCapture',
            'DepthOfWater'                  => 'depthOfWater',
            'Description'                   => 'description',
            'DigitalResourceOriginalRecord' => 'digitalResourceOriginalRecord',
            'DistanceOffshore'              => 'distanceOffshore',
            'Edition'                       => 'edition',
            'Episode'                       => 'episode',
            'Extent'                        => 'extent',
            'FileFormat'                    => 'fileFormat',
            'FileUUID'                      => 'fileUUID',
            'FullText'                      => 'fullText',
            'Genre'                         => 'genre',
            'GeographicLocation'            => 'geographicLocation',
            'GrantFundingAgency'            => 'grantFundingAgency',
            'GraduationDate'                => 'graduationDate',
            'HasView'                       => 'hasView',
            'Identifier'                    => 'identifier',
            'IsShownAt'                     => 'isShownAt',
            'Language'                      => 'language',
            'Latitude'                      => 'latitude',
            'License'                       => 'license',
            'Locality'                      => 'locality',
            'Longitude'                     => 'longitude',
            'Map'                           => 'map',
            'MethodOfCapture'               => 'methodOfCapture',
            'Notes'                         => 'notes',
            'OriginalPreserved'             => 'originalPreserved',
            'PeerReviewStatus'              => 'peerReviewStatus',
            'PersonOrCorporation'           => 'personOrCorporation',
            'Program'                       => 'program',
            'ProjectWebsite'                => 'projectWebsite',
            'Provider'                      => 'provider',
            'ProvinceOrState'               => 'provinceOrState',
            'Publisher'                     => 'publisher',
            'PublisherDOI'                  => 'publisherDOI',
            'RBSCLocation'                  => 'rbscLocation',
            'Reference'                     => 'reference',
            'Rights'                        => 'rights',
            'RightsURI'                     => 'rightsURI',
            'ScholarlyLevel'                => 'scholarlyLevel',
            'Series'                        => 'series',
            'Shore'                         => 'shore',
            'SortDate'                      => 'sortDate',
            'Source'                        => 'source',
            'StreamWidth'                   => 'streamWidth',
            'Subject'                       => 'subject',
            'Temperature'                   => 'temperature',
            'Tide'                          => 'tide',
            'Time'                          => 'time',
            'Title'                         => 'title',
            'Translation'                   => 'translation',
            'Type'                          => 'type',
            'URI'                           => 'uri',
            'Vegetation'                    => 'vegetation',
            'Water'                         => 'water',
            'Watershed'                     => 'watershed'
        ];

        public static function getSystemField ($lookup)
        {
            if ( !empty(self::$systemFields[$lookup])) {
                return self::$systemFields[$lookup];
            }
            # error_log ("Language not found for code [$lookup]");

            return $lookup;
        }


    }
