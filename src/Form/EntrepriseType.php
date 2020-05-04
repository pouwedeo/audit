<?php

namespace App\Form;
use App\Entity\Entreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use \Symfony\Component\Form\Extension\Core\Type\TextareaType;


class EntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'nom', 'aria-label'=>'nom','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('telephone',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'téléphone', 'aria-label'=>'telephone','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('email',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'email', 'aria-label'=>'email','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('adress',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'adress', 'aria-label'=>'adress','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('objectif',TextareaType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'objectif', 'aria-label'=>'objectif','class' => 'form-control')))
            ->add('engagement',TextareaType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'engagement', 'aria-label'=>'engagement','class' => 'form-control')))
            ->add('politique',TextareaType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'politique', 'aria-label'=>'politique','class' => 'form-control')))
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Entreprise::class,
        ]);
    }
}
