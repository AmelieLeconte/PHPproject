<?php

namespace App\Form;

use App\Entity\Bank;
use App\Entity\Coin;
use App\Entity\Member;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BankType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numero')
            ->add('createur', EntityType::class, [
                'class' => Member::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('coin', EntityType::class, [
                'class' => Coin::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bank::class,
        ]);
    }
}