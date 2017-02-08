<?php

namespace Sitephys\PhysmvcBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PhysaddType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      /*  $builder->add('title')->add('username')->add('email')->add('date')->add('content')->add('document')->add('weblink')        ; */
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
    /*    $resolver->setDefaults(array(
            'data_class' => 'Sitephys\PhysmvcBundle\Entity\Physadd'
        )); */
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sitephys_physmvcbundle_physadd';
    }


}
