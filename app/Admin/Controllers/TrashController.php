<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Pap\Restore;
use App\Models\Pap;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TrashController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Trash';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Pap());

        $grid->model()->onlyTrashed();

        $grid->actions(function ($actions) {
            $actions->add(new Restore);
        });

        $grid->column('strategy_id', __('Strategy'));
        $grid->column('pap', __('Pap'));
        $grid->column('implementing_unit_id', __('Implementing Unit'));
        $grid->column('prexc_id', __('PREXC'));
        $grid->column('commodity_id', __('Commodity'));
        $grid->column('commodity_system_id', __('Commodity System'));
        $grid->column('location_id', __('Location'));
        $grid->column('value_chain_segment_id', __('Value chain segment'));
        $grid->column('indicator_id', __('Indicator'));
        $grid->column('deleted_at', __('Deleted at'))
            ->display(function () {
                return optional($this->deleted_at)->diffForHumans(null, null, true);
            });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Pap::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('uuid', __('Uuid'));
        $show->field('strategy_id', __('Strategy id'));
        $show->field('pap', __('Pap'));
        $show->field('brief_description', __('Brief description'));
        $show->field('implementing_unit_id', __('Implementing unit id'));
        $show->field('prexc_id', __('Prexc id'));
        $show->field('commodity_id', __('Commodity id'));
        $show->field('commodity_system_id', __('Commodity system id'));
        $show->field('location_id', __('Location id'));
        $show->field('value_chain_segment_id', __('Value chain segment id'));
        $show->field('indicator_id', __('Indicator id'));
        $show->field('unit_of_measure', __('Unit of measure'));
        $show->field('unit_cost', __('Unit cost'));
        $show->field('physical_target_2022', __('Physical target 2022'));
        $show->field('physical_target_2023', __('Physical target 2023'));
        $show->field('physical_target_2024', __('Physical target 2024'));
        $show->field('physical_target_2025', __('Physical target 2025'));
        $show->field('physical_target_2026', __('Physical target 2026'));
        $show->field('physical_target_2027', __('Physical target 2027'));
        $show->field('physical_target_2028', __('Physical target 2028'));
        $show->field('physical_target_2029', __('Physical target 2029'));
        $show->field('physical_target_2030', __('Physical target 2030'));
        $show->field('user_id', __('User id'));
        $show->field('submitted_at', __('Submitted at'));
        $show->field('approved_regional_at', __('Approved regional at'));
        $show->field('approved_functional_at', __('Approved functional at'));
        $show->field('approved_national_at', __('Approved national at'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Pap());

        $form->text('uuid', __('Uuid'));
        $form->number('strategy_id', __('Strategy id'));
        $form->textarea('pap', __('Pap'));
        $form->textarea('brief_description', __('Brief description'));
        $form->number('implementing_unit_id', __('Implementing unit id'));
        $form->number('prexc_id', __('Prexc id'));
        $form->number('commodity_id', __('Commodity id'));
        $form->number('commodity_system_id', __('Commodity system id'));
        $form->number('location_id', __('Location id'));
        $form->number('value_chain_segment_id', __('Value chain segment id'));
        $form->number('indicator_id', __('Indicator id'));
        $form->text('unit_of_measure', __('Unit of measure'));
        $form->decimal('unit_cost', __('Unit cost'))->default(0.00);
        $form->decimal('physical_target_2022', __('Physical target 2022'))->default(0.0000);
        $form->decimal('physical_target_2023', __('Physical target 2023'))->default(0.0000);
        $form->decimal('physical_target_2024', __('Physical target 2024'))->default(0.0000);
        $form->decimal('physical_target_2025', __('Physical target 2025'))->default(0.0000);
        $form->decimal('physical_target_2026', __('Physical target 2026'))->default(0.0000);
        $form->decimal('physical_target_2027', __('Physical target 2027'))->default(0.0000);
        $form->decimal('physical_target_2028', __('Physical target 2028'))->default(0.0000);
        $form->decimal('physical_target_2029', __('Physical target 2029'))->default(0.0000);
        $form->decimal('physical_target_2030', __('Physical target 2030'))->default(0.0000);
        $form->number('user_id', __('User id'));
        $form->datetime('submitted_at', __('Submitted at'))->default(date('Y-m-d H:i:s'));
        $form->datetime('approved_regional_at', __('Approved regional at'))->default(date('Y-m-d H:i:s'));
        $form->datetime('approved_functional_at', __('Approved functional at'))->default(date('Y-m-d H:i:s'));
        $form->datetime('approved_national_at', __('Approved national at'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
