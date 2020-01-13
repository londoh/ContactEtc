<?php

namespace WebDevEtc\ContactEtc\FieldGenerator;

use WebDevEtc\ContactEtc\ContactForm;

/**
 * Interface FieldGeneratorInterface
 * @package WebDevEtc\ContactEtc\FieldGenerator
 */
interface FieldGeneratorInterface
{
    /**
     * Returns the requested ContactForm object
     *
     * @param $contactFieldId
     * @return ContactForm
     */
    public function contactFormNamed(string $contactFieldId);
}
