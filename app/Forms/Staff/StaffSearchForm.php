<?php

namespace App\Forms\Staff;

use Kris\LaravelFormBuilder\Form;

class StaffSearchForm extends Form
{
    public function buildForm()
    {
   
        $query = request()->query;

        $this
            ->add('name', Field::TEXT, [
                'label' => '社員名',
                'value' => $query->get('name'),
            ])
            ->add('status_id', Field::SELECT, [
                'label' => 'ステータス',
                'choices' => Status::findStaff()->toList(),
                'selected' => $query->get('status_id'),
            ])
            ->add('unit_id', Field::SELECT, [
                'label' => '所属部署',
                'choices' => Unit::all(),
                'selected' => $query->get('unit_id'),
            ])
            ->add('office_id', Field::SELECT, [
                'label' => '事務所',
                'choices' => Office::all(),
                'selected' => $query->get('office_id'),
            ]);
    }
}
