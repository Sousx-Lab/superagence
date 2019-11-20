<?php
namespace Grafikart\RecaptchaBundle\Constraints;

use Symfony\Component\Validator\Constraint;

class Recaptcha extends Constraint {

    public $message = 'Invalide Captcha';
}

