<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.100).aspx GetKeywordsByIds Response Object
     * 
     * @uses Keyword
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
     */
    final class GetKeywordsByIdsResponse
    {
        /**
         * An array of Keyword objects that corresponds directly to the keyword identifiers that you specified in the request.
         * @var Keyword[]
         */
        public $Keywords;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
