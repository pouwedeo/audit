<?php

namespace App\Form;

use App\Entity\Personnel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use \Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class PersonnelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
            ->add('nom',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'nom', 'aria-label'=>'nom','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('prenom',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'prenom', 'aria-label'=>'prénom','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('sexe',ChoiceType::class,  array(
                'choices'=>array(
                    'sexe...'=>'Placeholder',
                    'Masculin'=>'M',
                    'Feminin'=>'F'
             )
            ))
            ->add('telephone',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'téléphone', 'aria-label'=>'telephone','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('email',TextType::class, array('required' => false, 'attr' => array('placeholder' => 'email', 'aria-label'=>'email','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('adresse',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'adresse', 'aria-label'=>'adresse','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
         
            ->add('poste', EntityType::class, array(
                'class'    => 'App:Poste',
                'choice_label' => 'nom',
                    'placeholder'=>'Sélectionner un poste',
                    'required' => TRUE,
                    'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
    
            ))
          
                ->add('photo',FileType::class, array('required' => false,'data_class' => null,'empty_data'=>'photo.JPG', 'attr' => array( 'class' => 'custom-file-input')));
           
           /*  ->add('entreprise', EntityType::class, array(
                'class'    => 'App:Entreprise',
                'choice_label' => 'nom',
                    'placeholder'=>'Sélectionner une entreprise',
                    'required' => TRUE,
                    'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
    
                )) */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personnel::class,
        ]);
    }
}
