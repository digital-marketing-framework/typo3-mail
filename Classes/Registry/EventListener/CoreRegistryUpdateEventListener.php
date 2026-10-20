<?php

namespace DigitalMarketingFramework\Typo3\Mail\Registry\EventListener;

use DigitalMarketingFramework\Mail\MailInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;
use DigitalMarketingFramework\Typo3\Mail\Manager\MailManager;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct(MailManager $mailManager)
    {
        parent::__construct(new MailInitialization($mailManager, 'dmf_mail'));
    }
}
