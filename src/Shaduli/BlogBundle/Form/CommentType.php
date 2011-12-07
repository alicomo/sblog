<?php

namespace Shaduli\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('post_id')
            ->add('author')
            ->add('author_email')
            ->add('author_url')
            ->add('author_ip')
        ;
    }

    public function getName()
    {
        return 'shaduli_blogbundle_commenttype';
    }
}
