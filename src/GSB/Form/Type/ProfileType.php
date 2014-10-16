<?php

namespace GSB-Report\src\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', 'textarea', array(
                'attr' => array(
                    'rows' => '4',
                    'placeholder' => 'Enter your comment',
                )
            ))
            ->add('save', 'submit', array(
                'label' => 'Publish comment',
            ));
    }

    public function getName()
    {
        return 'comment';
    }
}