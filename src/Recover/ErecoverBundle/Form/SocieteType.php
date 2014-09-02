<?php

namespace Recover\ErecoverBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SocieteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('raisoc' ,null, array('label'=>'Raison Social'))
            ->add('telephone')
            ->add('adresse')
            ->add('siteweb')
            ->add('email')
            ->add('fax')
            ->add('capital','money',array('currency'=>'XOF','label' => 'Capital en '))
            ->add('rc')
            ->add('ninea')
            ->add('statut')
            ->add('pays','country')
            ->add('active','checkbox',array('required' => 'false'))
            ->add('sections')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Recover\ErecoverBundle\Entity\Societe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'recover_erecoverbundle_societe';
    }
}
