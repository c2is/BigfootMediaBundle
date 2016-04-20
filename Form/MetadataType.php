<?php

namespace Bigfoot\Bundle\MediaBundle\Form;

use Bigfoot\Bundle\CoreBundle\Form\Type\TranslatedEntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class MetadataType
 * @package Bigfoot\Bundle\MediaBundle\Form
 */
class MetadataType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('slug')
            ->add('translation', TranslatedEntityType::class)
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bigfoot\Bundle\MediaBundle\Entity\Metadata'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bigfoot_bundle_mediabundle_metadatatype';
    }
}
