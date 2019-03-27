<?php

namespace SocialiteProviders\Cronofy;

use SocialiteProviders\Manager\SocialiteWasCalled;

class CronofyExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'cronofy', __NAMESPACE__.'\Provider'
        );
    }
}
