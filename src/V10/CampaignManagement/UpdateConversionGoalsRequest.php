<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates conversion goals within the account's shared conversion goal library.
     * @link http://msdn.microsoft.com/en-us/library/mt759544(v=msads.100).aspx UpdateConversionGoals Request Object
     * 
     * @uses ConversionGoal
     * @used-by BingAdsCampaignManagementService::UpdateConversionGoals
     */
    final class UpdateConversionGoalsRequest
    {
        public $ConversionGoals;
    }
}
