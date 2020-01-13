<?php

use Tests\TestCase;
use WebDevEtc\ContactEtc\ContactFormConfigurator;
use WebDevEtc\ContactEtc\FieldGenerator\GetContactFormFieldData;
use WebDevEtc\ContactEtc\Handlers\HandleContactSubmission;

class HandlerTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->app->singleton(ContactFormConfigurator::class, function () {
            // send a custom array of what config files we want to (by default) include
            // this stops errors being thrown that are not relevant to any testing
            return ContactFormConfigurator::createNew([
                __DIR__ . "/TestConfigs/main_contact_form_config.php",
                __DIR__ . "/TestConfigs/alt.php",
            ]);
        });
    }

    public function test_handler()
    {
        $field_generator = new GetContactFormFieldData();
        $form = $field_generator->contactFormNamed('alt');
        $submitted = [
            'your_name' => "myname",
            "email" => "tescit@example.com",
            "message" => "Hello world message here",
        ];

        $mailer = app()->make('mailer');
        $handler = new HandleContactSubmission();

        $handler->handleContactSubmission($mailer, $submitted, $form);

        $this->assertTrue(count($handler->getErrors()) == 0);
    }

}
