<?php

namespace Bigfoot\Bundle\MediaBundle\Form;

use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class PortfolioSearchType
 *
 * @package Bigfoot\Bundle\MediaBundle\Form
 */
class PortfolioSearchType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'search',
            'text',
            array(
                'label'     => 'context.term',
                'required'  => false,
                'attr' => array(
                    'data-portfolio-input' => 'search'
                )
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bigfoot_portfolio_search';
    }
}
