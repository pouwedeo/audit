<?php

namespace App\Form;

use App\Entity\IdentificationccpDanger;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use \Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Doctrine\ORM\EntityRepository;
use App\Entity\Etape;
class IdentificationccpDangerType extends AbstractType
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
            ->add('description_danger',TextareaType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'description du danger', 'aria-label'=>'description_danger','class' => 'form-control')))
            ->add('cause_danger',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'cause du danger', 'aria-label'=>'cause_danger','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('mesure_preventive',TextareaType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'mesure préventive', 'aria-label'=>'mesure_preventive','class' => 'form-control')))
            ->add('parametreMaitriser',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'paramètre maîtrisé', 'aria-label'=>'parametreMaitriser','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('frequence',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'fréquence', 'aria-label'=>'frequence','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('gravite',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'gravité', 'aria-label'=>'gravite','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('detection',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'détection', 'aria-label'=>'detection','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
         /*    ->add('risque',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'risque', 'aria-label'=>'risque','class' => 'form-control input-mask','aria-describedby'=>'basic-addon1')))
            ->add('ccp',TextType::class, array('required' => TRUE, 'attr' => array('placeholder' => 'ccp', 'aria-label'=>'ccp','class' => 'radio','aria-describedby'=>'basic-addon1','readonly'=>'true'))) */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {   $resolver->setRequired(['identrprise']);
        $resolver->setDefaults([
            'data_class' => IdentificationccpDanger::class,
        ]);
    }
}
