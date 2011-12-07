<?php

namespace Shaduli\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('author')
            ->add('title')
            ->add('content')
            ->add('excerpt')
            ->add('status')
            ->add('comments_count')
            //->add('created_at')
            //->add('updated_at')
        ;
    }

    public function getName()
    {
        return 'shaduli_blogbundle_posttype';
    }
}
