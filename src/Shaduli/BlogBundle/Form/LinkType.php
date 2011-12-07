<?php

namespace Shaduli\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LinkType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('url')
            ->add('name')
            ->add('image')
            ->add('target')
            ->add('description')
            ->add('visible')
            ->add('owner')
            ->add('notes')
            ->add('rss')
        ;
    }

    public function getName()
    {
        return 'shaduli_blogbundle_linktype';
    }
}
