<?php

namespace SoftUniBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class UserEditType extends UserType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('roles', ChoiceType::class, array(
            'choices'=>[
                'Admin' => "ROLE_ADMIN",
                'User' => "ROLE_USER",
            ],
            'expanded' => true,
            'multiple' => true,
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'SoftUniBlogBundle\Entity\User',) );
    }

    public function getName()
    {
        return 'soft_uni_blog_bundle_user_edit_type';
    }
}
