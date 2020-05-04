<?php

namespace App\Form;
use App\Entity\CritereSurveille;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\TextType;

class CritereSurveilleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('critere',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'critère de surveillance', 'aria-label'=>'critère de surveillance','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CritereSurveille::class,
        ]);
    }
}  
