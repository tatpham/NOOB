<?php

namespace RESTBundle\Form;

use AIESECGermany\EntityBundle\Entity\OutgoerPreparation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OutgoerPreparationType extends AbstractRESTFormType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('lc')
            ->add('startDate', 'date', array(
                'widget' => 'single_text'
            ))
            ->add('endDate', 'date', array(
                'widget' => 'single_text'
            ))
            ->add('salesforceID')
        ;
    }

    protected function getDataClass()
    {
        return OutgoerPreparation::class;
    }
}
