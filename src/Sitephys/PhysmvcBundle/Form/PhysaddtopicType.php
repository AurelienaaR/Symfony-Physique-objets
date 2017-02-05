<?php

namespace Sitephys\PhysmvcBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PhysaddtopicType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')->add('username')->add('email')->add('date')->add('contentexpin')->add('contentth')->add('contentexpout')->add('contentretexpin')->add('contentretth')->add('contentretexpout')->add('document')->add('weblink')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sitephys\PhysmvcBundle\Entity\Physaddtopic'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sitephys_physmvcbundle_physaddtopic';
    }


}
