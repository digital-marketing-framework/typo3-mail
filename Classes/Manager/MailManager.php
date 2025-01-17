<?php

namespace DigitalMarketingFramework\Typo3\Mail\Manager;

use DigitalMarketingFramework\Mail\Manager\MailManagerInterface;
use Symfony\Component\Mime\Email;
use TYPO3\CMS\Core\Mail\Mailer;
use TYPO3\CMS\Core\Mail\MailMessage;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class MailManager implements MailManagerInterface
{
    public function __construct(
        protected Mailer $mailer,
    ) {
    }

    public function createMessage(): MailMessage
    {
        return GeneralUtility::makeInstance(MailMessage::class);
    }

    public function sendMessage(Email $message): void
    {
        if ($message instanceof MailMessage) {
            $message->send();
        } else {
            $this->mailer->send($message);
        }
    }
}
