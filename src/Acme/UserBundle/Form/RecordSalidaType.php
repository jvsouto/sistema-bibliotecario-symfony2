<?php

namespace Acme\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RecordSalidaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {

        $builder
            ->add('book_id','number',array(
                 'label' => 'Libro Id ',
            ))
            ->add('person_id','number',array(
                 'label' => 'Usuario Id ',
            ))
            ->add('dia_regreso','date', array(
                'widget' => 'choice',
                    'format' => 'dd-MM-yyyy',
                    'pattern' => '{{ day }}-{{ month }}-{{ year }}',
                    'years' => range(Date('Y'), 2020),
                    'label' => 'Fecha de regreso',
                    'input' => 'string',
                    'data'  =>  '01-01-2001'
                ))
        ;
    }

    public function getName()
    {
        return 'acme_userbundle_recordSalidaType';
    }

}
