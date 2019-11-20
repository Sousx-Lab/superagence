<?php
namespace Grafikart\RecaptchaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class RecaptchaBundle extends Bundle 
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
        $container->addCompilerPass(new RecaptchaCompilerPass());
    }

}