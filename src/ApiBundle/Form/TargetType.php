<?php

namespace ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TargetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('users', EntityType::class, 
                array('choice_label'=> 'fullName',
                      'class' => 'ApiBundle\Entity\User',
                      'multiple'      => true,
                      'expanded'      => true,
                      'query_builder' => function ($repository) 
                      { 
                        return $repository->createQueryBuilder('c')->orderBy('c.lastName', 'ASC'); 
                      })
            )
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ApiBundle\Entity\Target'
        ));
    }
}
