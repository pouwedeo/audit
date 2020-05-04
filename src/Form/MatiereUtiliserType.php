<?php

namespace App\Form;

use App\Entity\MatiereUtiliser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use App\Entity\Etape;
use App\Entity\MatierePremiere;


class MatiereUtiliserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $id = $options['identrprise'];
        $builder
        ->add('etape', EntityType::class, array(
            'class' => Etape::class,
            'query_builder' => function (EntityRepository $er) use($id) {
                return $er->createQueryBuilder('e')->where('e.page='.$id);
                
            },
            'choice_label' => 'nom',
            'placeholder'=>'Sélectionner un étape',
   
            'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
        ))
            ->add('matierepremiere', EntityType::class, array(
                'class'    => MatierePremiere::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('m');
                    
                },
                'choice_label' => 'nom',
                
                    'placeholder'=>'Sélectionner une matière prémière',
                    
                    'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
    
                ))
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {   $resolver->setRequired(['identrprise']);
        
        $resolver->setDefaults([
            'data_class' => MatiereUtiliser::class,
        ]);
    }
}
