<?php

namespace App\Form;

use App\Entity\TypeProbleme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\TextType;

class TypeProblemeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('probleme',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'problème', 'aria-label'=>'probleme','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TypeProbleme::class,
        ]);
    }
}
