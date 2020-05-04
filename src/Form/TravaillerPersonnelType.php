<?php

namespace App\Form;

use App\Entity\TravaillerPersonnel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use App\Entity\Personnel;
use App\Entity\Equipe;
class TravaillerPersonnelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {  $id = $options['identrprise'];
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
            ->add('personnel', EntityType::class, array(
                'class' => Personnel::class,
                'query_builder' => function (EntityRepository $er) use($id) {
                    return $er->createQueryBuilder('p')->where('p.entreprise='.$id);
                    
                },
                'choice_label' => 'conteneure',
                
                    'placeholder'=>'Sélectionner un personnel',
                    
                    'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
                ))
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    { $resolver->setRequired(['identrprise']);
        $resolver->setDefaults([
            'data_class' => TravaillerPersonnel::class,
        ]);
    }
}
