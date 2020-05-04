<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use \Symfony\Component\Form\Extension\Core\Type\FileType;
use \Symfony\Component\Form\Extension\Core\Type\EmailType;
use \Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'nom', 'aria-label'=>'nom','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('aspectfinal',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'aspect final', 'aria-label'=>'aspectfinal','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('caracteristique',TextareaType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'caractéristique', 'aria-label'=>'caracteristique','class' => 'form-control')))
            ->add('utilisationprevue',TextareaType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'utilisation prévue', 'aria-label'=>'utilisationprevue','class' => 'form-control')))
            ->add('dureconservation',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'duré de conservation', 'aria-label'=>'dureconservation','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('imageproduit',FileType::class, array('data_class' => null,'empty_data'=>'photo.JPG','required' => false, 'attr' => array('id'=>'inputGroupFile01','aria-label'=>'imageproduit','class' => 'custom-file-input','aria-describedby'=>'inputGroupFileAddon01')))
            ->add('emballage',FileType::class, array('data_class' => null,'empty_data'=>'photo.JPG','required' => false, 'attr' => array('aria-label'=>'emballage','class' => 'custom-file-input','aria-describedby'=>'inputGroupFileAddon01')))

            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
