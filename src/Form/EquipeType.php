<?php

namespace App\Form;

use App\Entity\Equipe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use \Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Doctrine\ORM\EntityRepository;
use App\Entity\Personnel;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class EquipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $id = $options['identrprise'];
        $builder
            ->add('nom',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'nom', 'aria-label'=>'nom','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            /* ->add('entreprise', EntityType::class, array(
                'class'    => 'App:Entreprise',
                'choice_label' => 'nom',
                    'placeholder'=>'Sélectionner une entreprise',
                    'required' => TRUE,
                    'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
    
                )) */
            ->add('personnel', EntityType::class, array(
                'class' => Personnel::class,
                'query_builder' => function (EntityRepository $er) use($id) {
                    return $er->createQueryBuilder('p') ->where('p.entreprise='.$id);
                    
                },
                'choice_label' => 'conteneure',
                    'placeholder'=>'Sélectionner un responsable',
                    'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
                )) 
               
            ->add('datecreation',TextType::class, array('required' => TRUE, 'attr' => array('aria-label'=>'datecreation','class' => 'form-control','data-inputmask'=>"'alias': 'dd/mm/yyyy'",'data-mask'=>'')))
            ->add('objectif',TextareaType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'objectif', 'aria-label'=>'objectif','class' => 'form-control')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {$resolver->setRequired(['identrprise'])
           ->setDefaults(['data_class' => Equipe::class,
        ]);
    }
}
