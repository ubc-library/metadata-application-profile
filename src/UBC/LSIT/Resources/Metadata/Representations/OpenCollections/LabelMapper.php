<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 17/07/2015
     * Time: 1:41 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections;

    /**
     * Class Label
     *
     * The label Mapper is used to provide a user-friendly field label for instances where ApplicationProperty is not over-ridden
     *
     * ApplicationProperty => System Predefined Label
     */
    class LabelMapper
    {

        private static $systemFields = [
            'AIPUUID'                    => 'AIP UUID',
            'Affiliation'                => 'Affiliation',
            'AggregatedSourceRepository' => 'Aggregated Source Repository',
            'AlternateTitle'             => 'Alternate Title',
            'Annotations'                => 'Annotations',
            'Bottom'                     => 'Bottom',
            'Campus'                     => 'Campus',
            'CatalogueNumber'            => 'Catalogue Number',
            'CatalogueRecord'            => 'Catalogue Record',
            'Category'                   => 'Category',
            'Citation'                   => 'Citation',
            'CollectedBy'                => 'Collected By',
            'Collection'                 => 'Collection',
            'CollectionDescription'      => 'Collection Description',
            'CollectionTitle'            => 'Collection Title',
            'CollectorNumber'            => 'Collector Number',
            'Contents'                   => 'Contents',
            'Contributor'                => 'Contributor(s)',
            'CopyrightHolder'            => 'Copyright Holder(s)',
            'Country'                    => 'Country',
            'Cover'                      => 'Cover',
            'Creator'                    => 'Creator(s)',
            'Credits'                    => 'Credits',
            'Current'                    => 'Current',
            'Date'                       => 'Date',
            'DateAvailable'              => 'Date Available',
            'DateCreated'                => 'Date Created',
            'DateIssued'                 => 'Date Issued',
            'Degree'                     => 'Degree',
            'DegreeGrantor'              => 'Degree Grantor',
            'DepthOfCapture'             => 'Depth Of Capture',
            'DepthOfWater'               => 'Depth Of Water',
            'Description'                => 'Description',
            'DistanceOffshore'           => 'Distance Offshore',
            'Edition'                    => 'Edition',
            'Episode'                    => 'Episode',
            'Extent'                     => 'Extent',
            'FileFormat'                 => 'Format',
            'FileUUID'                   => 'File UUID',
            'Genre'                      => 'Genre',
            'GeographicLocation'         => 'Geographic Location',
            'GraduationDate'             => 'Graduation Date',
            'GrantFundingAgency'         => 'Grant Funding Agency',
            'HasView'                    => 'Has View',
            'Identifier'                 => 'Identifier',
            'IsShownAt'                  => 'Is Shown At',
            'Language'                   => 'Language',
            'Latitude'                   => 'Latitude',
            'Longitude'                  => 'Longitude',
            'MethodOfCapture'            => 'Method Of Capture',
            'OriginalPreserved'          => 'Original Preserved',
            'PeerReviewStatus'           => 'Peer Review Status',
            'PersonOrCorporation'        => 'Person/Corporation',
            'Program'                    => 'Program',
            'ProjectWebsite'             => 'Project Website',
            'Provenance'                 => 'Provenance',
            'ProvinceOrState'            => 'Province/State',
            'Publisher'                  => 'Publisher',
            'PublisherDOI'               => 'Publisher DOI',
            'Reference'                  => 'Reference',
            'RightsURI'                  => 'Rights URI',
            'ScholarlyLevel'             => 'Scholarly Level',
            'Series'                     => 'Series',
            'Shore'                      => 'Shore',
            'Source'                     => 'Source',
            'StreamWidth'                => 'Stream Width',
            'Subject'                    => 'Subject',
            'Temperature'                => 'Temperature',
            'Tide'                       => 'Tide',
            'Title'                      => 'Title',
            'Type'                       => 'Type',
            'URI'                        => 'URI',
            'Vegetation'                 => 'Vegetation',
            'Water'                      => 'Water',
            'Watershed'                  => 'Watershed'
        ];

        public static function getPropertyLabel ($lookup)
        {
            if ( !empty(self::$systemFields[$lookup])) {
                return self::$systemFields[$lookup];
            }
            # error_log ("Property Label not found for Property [$lookup]");

            return $lookup;
        }


    }
