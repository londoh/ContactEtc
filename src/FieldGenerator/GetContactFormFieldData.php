<?php

namespace WebDevEtc\ContactEtc\FieldGenerator;

use Exception;
use WebDevEtc\ContactEtc\ContactFormConfigurator;
use WebDevEtc\ContactEtc\ContactForm;

/**
 * Class FieldGenerator
 * @todo Refactor this helper-like class.
 *
 * @package WebDevEtc\ContactEtc\FieldGenerator
 */
class GetContactFormFieldData implements FieldGeneratorInterface
{
    /**
     * Returns the requested ContactForm object
     *
     * @param $contact_form_name
     * @return ContactForm
     * @throws Exception
     */
    public function contactFormNamed($contact_form_name)
    {
        /** @var ContactFormConfigurator $configurator */
        $configurator = resolve(ContactFormConfigurator::class);

        /** @var ContactForm */
        return $configurator->getContactForm($contact_form_name);
    }
}
