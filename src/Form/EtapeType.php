<?php

namespace App\Form;

use App\Entity\Etape;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use \Symfony\Component\Form\Extension\Core\Type\NumberType;
use \Symfony\Component\Form\Extension\Core\Type\TextareaType;
use \Symfony\Component\Form\Extension\Core\Type\FileType;

class EtapeType extends AbstractType
{    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'nom', 'aria-label'=>'nom','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('niveau',NumberType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'niveau', 'aria-label'=>'niveau','class' => 'form-control')))
            ->add('description',TextareaType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'description', 'aria-label'=>'description','class' => 'form-control')))
            ->add('produit', EntityType::class, array(
                'class'    => 'App:Produit',
                'choice_label' => 'nom',
                    'placeholder'=>'Sélectionner un prodruit',
                    'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
    
                ))
            ->add('elementsortie',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'élément sortie', 'aria-label'=>'elementsortie','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('imageproduitobtenu',FileType::class, array('data_class' => null,'empty_data'=>'photo.JPG','required' => false, 'attr' => array( 'class' => 'custom-file-input')))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etape::class,
        ]);
    }
}
