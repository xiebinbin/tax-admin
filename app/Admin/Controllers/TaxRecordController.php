<?php

namespace App\Admin\Controllers;

use App\Enums\IndustryEnum;
use App\Enums\TaxTypeEnum;
use App\Models\TaxRecord;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class TaxRecordController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TaxRecord(), function (Grid $grid) {
            $grid->column('name');
            $grid->column('phone');
            $grid->column('money');
            $grid->column('tax_type')->using(TaxTypeEnum::getFormOptions());
            $grid->column('industry')->using(IndustryEnum::getFormOptions());
            $grid->column('created_at')->sortable();
            $grid->disableRowSelector();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->panel();
                $filter->like('name');
                $filter->like('phone');
                $filter->equal('tax_type')->radio(TaxTypeEnum::getFormOptions());
                $filter->equal('industry')->radio(IndustryEnum::getFormOptions());
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail(int $id): Show
    {
        return Show::make($id, new TaxRecord(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('phone');
            $show->field('money');
//            $show->field('tax_type')->using(TaxTypeEnum::getFormOptions());
//            $show->field('industry')->using(IndustryEnum::getFormOptions());
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form(): Form
    {
        return Form::make(new TaxRecord(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            $form->text('phone')->required();
            $form->decimal('money')->required();
            $form->radio('tax_type')->options(TaxTypeEnum::getFormOptions())->default(TaxTypeEnum::GENERAL_TAXPAYER);
            $form->radio('industry')->options(IndustryEnum::getFormOptions())->default(IndustryEnum::SERVICE);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
