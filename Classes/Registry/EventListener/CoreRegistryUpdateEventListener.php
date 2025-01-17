<?php

namespace DigitalMarketingFramework\Typo3\Mail\Registry\EventListener;

use DigitalMarketingFramework\Mail\MailInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new MailInitialization('dmf_mail'));
    }
}
