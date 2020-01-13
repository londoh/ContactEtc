<?php

namespace WebDevEtc\ContactEtc\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use WebDevEtc\ContactEtc\ContactForm;

/**
 * Class ContactFormError
 * @package WebDevEtc\ContactEtc\Events
 */
class ContactFormError
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /** @var array */
    public $submitted_data;
    /** @var ContactForm */
    public $contact_form;
    public $errors;

    /**
     * ContactFormError constructor.
     * @param array $submitted_data
     * @param ContactForm $contact_form
     * @param $errors
     */
    public function __construct(array $submitted_data, ContactForm $contact_form, $errors)
    {
        $this->submitted_data = $submitted_data;
        $this->contact_form = $contact_form;
        $this->errors = $errors;
    }
}
