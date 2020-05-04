<?php

namespace App\Form;

use App\Entity\Produir;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use App\Entity\Equipe;
use App\Entity\Produit;

class ProduirType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {    $id = $options['identrprise'];
        $builder
            ->add('equipe', EntityType::class, array(
                'class'    =>Equipe::class,
                'query_builder' => function (EntityRepository $er) use($id) {
                    return $er->createQueryBuilder('q')->where('q.entreprise='.$id);
                    
                },
                'choice_label' => 'nom',
                
                    'placeholder'=>'Sélectionner une équipe',
                    'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
    
                ))
            ->add('produit', EntityType::class, array(
                'class'    => Produit::class,
                'query_builder' => function (EntityRepository $er) use($id) {
                    return $er->createQueryBuilder('p');
                    
                },
                'choice_label' => 'nom',
                    'placeholder'=>'Sélectionner un produit',
                    
                    'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
    
                ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {  $resolver->setRequired(['identrprise']);
        $resolver->setDefaults([
            'data_class' => Produir::class,
        ]);
    }
}
