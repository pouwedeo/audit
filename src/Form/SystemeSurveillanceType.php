<?php

namespace App\Form;

use App\Entity\SystemeSurveillance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use \Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Doctrine\ORM\EntityRepository;
use App\Entity\Personnel;
use App\Entity\Etape;

class SystemeSurveillanceType extends AbstractType
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
                'placeholder'=>'Sélectionner une étape',
                'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
            ))
           ->add('typeprobleme', EntityType::class, array(
            'class'    => 'App:TypeProbleme',
            'choice_label' => 'probleme',
                'placeholder'=>'Sélectionner un problème',
                'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')

            ))
           ->add('criteresurveille', EntityType::class, array(
            'class'    => 'App:CritereSurveille',
            'choice_label' => 'critere',
                'placeholder'=>'Sélectionner un critère',
                'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')

            ))
            ->add('personnel', EntityType::class, array(
                'class' => Personnel::class,
                'query_builder' => function (EntityRepository $er) use($id) {
                    return $er->createQueryBuilder('p')->where('p.entreprise='.$id);
                    
                },
                'choice_label' => 'conteneure',
                    'placeholder'=>'Sélectionner un responsable',
                    'attr' => array('required' => TRUE, 'class' => 'form-control select-mask')
                ))            
        
            ->add('limite_critique',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'limite critique', 'aria-label'=>'limite_critique','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('enregistrement',TextareaType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'enrégistrement', 'aria-label'=>'enregistrement','class' => 'form-control')))
            ->add('action_corrective',TextareaType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'action_corrective', 'aria-label'=>'action_corrective','class' => 'form-control')))
            ->add('frequence_controle',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'fréquence controle', 'aria-label'=>'frequence_controle','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('verification',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'vérification', 'aria-label'=>'verification','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('resultat',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'résultat', 'aria-label'=>'resultat','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {   $resolver->setRequired(['identrprise']);
        $resolver->setDefaults([
            'data_class' => SystemeSurveillance::class,
        ]);
    }
}
