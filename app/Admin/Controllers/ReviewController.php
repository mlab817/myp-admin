<?php

namespace App\Admin\Controllers;

use App\Models\Pap;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ReviewController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Review PAP';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Pap());

        $grid->column('strategy_id', __('Strategy id'));
        $grid->column('pap', __('Pap'));
        $grid->column('brief_description', __('Brief description'));
        $grid->column('implementing_unit_id', __('Implementing unit id'));
        $grid->column('prexc_id', __('Prexc id'));
        $grid->column('commodity_id', __('Commodity id'));
        $grid->column('commodity_system_id', __('Commodity system id'));
        $grid->column('location_id', __('Location id'));
        $grid->column('value_chain_segment_id', __('Value chain segment id'));
        $grid->column('indicator_id', __('Indicator id'));
        $grid->column('unit_of_measure', __('Unit of measure'));
        $grid->column('unit_cost', __('Unit cost'));
        $grid->column('physical_target_2022', __('Physical target 2022'));
        $grid->column('physical_target_2023', __('Physical target 2023'));
        $grid->column('physical_target_2024', __('Physical target 2024'));
        $grid->column('physical_target_2025', __('Physical target 2025'));
        $grid->column('physical_target_2026', __('Physical target 2026'));
        $grid->column('physical_target_2027', __('Physical target 2027'));
        $grid->column('physical_target_2028', __('Physical target 2028'));
        $grid->column('physical_target_2029', __('Physical target 2029'));
        $grid->column('physical_target_2030', __('Physical target 2030'));
        $grid->column('submitted', __('Submitted'));
        $grid->column('approved_regional', __('Approved regional'));
        $grid->column('approved_functional', __('Approved functional'));
        $grid->column('approved_national', __('Approved national'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show->field('submitted', __('Submitted'));
        $show->field('approved_regional', __('Approved regional'));
        $show->field('approved_functional', __('Approved functional'));
        $show->field('approved_national', __('Approved national'));
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
        $form->switch('submitted', __('Submitted'));
        $form->switch('approved_regional', __('Approved regional'));
        $form->switch('approved_functional', __('Approved functional'));
        $form->switch('approved_national', __('Approved national'));

        return $form;
    }
}
