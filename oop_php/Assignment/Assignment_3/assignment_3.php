<?php
abstract class Mail
{
    public $sender;
    public $recipients;
    public $subject;
    public $body;

    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    public function setRecipients($recipients)
    {
        $this->recipients = $recipients;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    abstract public function sendEmail();
}

class SendGrid extends Mail
{
    public function sendEmail()
    {
        echo 'SendGrid successfully sent to ' . $this->recipients . "\n";
        echo 'Sender: ' . $this->sender . "\n";
        echo 'Subject: ' . $this->subject . "\n";
        echo 'Content: ' . $this->body . "\n";
    }
}

class MailChimp extends Mail
{
    public function sendEmail()
    {
        echo 'MailChimp successfully sent to ' . $this->recipients . "\n";
        echo 'Sender: ' . $this->sender . "\n";
        echo 'Subject: ' . $this->subject . "\n";
        echo 'Content: ' . $this->body . "\n";
    }
}

// $sendGrid = new SendGrid();
// $sendGrid->setSender('youremail@yourdomain.com');
// $sendGrid->setRecipients('emailID@domain.com');
// $sendGrid->setSubject('Just a Test');
// $sendGrid->setBody('Hi Name, How are you?');

// $sendGrid->sendEmail();

$mailChimp = new MailChimp();
$mailChimp->setSender('youremail@yourdomain.com');
$mailChimp->setRecipients('emailID@domain.com');
$mailChimp->setSubject('Just a Test');
$mailChimp->setBody('Hi Name, How are you?');

$mailChimp->sendEmail();
