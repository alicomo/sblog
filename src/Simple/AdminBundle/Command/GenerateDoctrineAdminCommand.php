<?php


/**
 * Description of GenerateDoctrineAdminCommand
 *
 * @author Muhammadali Shaduli
 */

namespace Simple\AdminBundle\Command;

use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;

class GenerateDoctrineAdminCommand extends \Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand
{
    protected function configure()
    {
        parent::configure();
        $this->setName('doctrine:generate:admin');
    }

    protected function getGenerator()
    {
        $generator = new DoctrineCrudGenerator($this->getContainer()->get('filesystem'), __DIR__.'/../Resources/skeleton/crud');
        $this->setGenerator($generator);
        return parent::getGenerator();
    }
}


