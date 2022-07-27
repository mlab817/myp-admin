<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Pap\Submit;
use App\Models\Commodity;
use App\Models\CommoditySystem;
use App\Models\ImplementingUnit;
use App\Models\Indicator;
use App\Models\Location;
use App\Models\Pap;
use App\Models\Prexc;
use App\Models\Strategy;
use App\Models\ValueChainSegment;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PapController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Program/Activity/Project';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Pap());

        $grid->model()->where('user_id', auth()->id());

        $grid->actions(function ($actions) {
            $actions->add(new Submit);
        });

        $grid->column('strategy', __('Strategy'));
        $grid->column('pap', __('Program/Activity/Project'));
        $grid->column('brief_description', __('Brief Description'));
        $grid->column('implementing_unit', __('Implementing Unit'));
        $grid->column('prexc', __('PREXC/Function'));
        $grid->column('commodity', __('Commodity'));
        $grid->column('commodity_system', __('Commodity System'));
        $grid->column('location', __('Location'));
        $grid->column('value_chain_segment', __('Value Chain Segment'));
        $grid->column('indicator', __('Indicator'));
        $grid->column('total_cost', __('Total Cost'))->display(function() {
            return $this->total_cost;
        })->setAttributes(['class' => 'text-right']);
        $grid->column('submitted', __('Submitted'))
            ->display(function () {
                return $this->submitted_at ? 'Yes': 'No';
            });
        $grid->column('updated_at', __('Last updated'))
            ->display(function () {
                return optional($this->updated_at)->diffForHumans(null, null, true);
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

        $form->select('strategy_id', __('Strategy'))
            ->options(Strategy::all()->pluck('name','id'));
        $form->text('pap', __('Program/Activity/Project'));
        $form->textarea('brief_description', __('Brief Description'));
        $form->select('implementing_unit_id', __('Implementing Unit'))
            ->options(ImplementingUnit::all()->pluck('name','id'));
        $form->select('prexc_id', __('Prexc/Function'))
            ->options(Prexc::all()->pluck('name','id'));
        $form->select('commodity_id', __('Commodity'))
            ->options(Commodity::all()->pluck('name', 'id'));
        $form->select('commodity_system_id', __('Commodity system'))
            ->options(CommoditySystem::all()->pluck('name', 'id'));
        $form->select('location_id', __('Location'))
            ->options(Location::all()->pluck('name', 'id'));
        $form->select('value_chain_segment_id', __('Value chain segment'))
            ->options(ValueChainSegment::all()->pluck('name', 'id'));
        $form->select('indicator_id', __('Indicator'))
            ->options(Indicator::all()->pluck('name','id'));
        $form->text('unit_of_measure', __('Unit of Measure'));
        $form->decimal('unit_cost', __('Unit Cost'))->default(0.00);
        $form->decimal('physical_target_2022', __('Physical target 2022'))->default(0.0000);
        $form->decimal('physical_target_2023', __('Physical target 2023'))->default(0.0000);
        $form->decimal('physical_target_2024', __('Physical target 2024'))->default(0.0000);
        $form->decimal('physical_target_2025', __('Physical target 2025'))->default(0.0000);
        $form->decimal('physical_target_2026', __('Physical target 2026'))->default(0.0000);
        $form->decimal('physical_target_2027', __('Physical target 2027'))->default(0.0000);
        $form->decimal('physical_target_2028', __('Physical target 2028'))->default(0.0000);
        $form->decimal('physical_target_2029', __('Physical target 2029'))->default(0.0000);
        $form->decimal('physical_target_2030', __('Physical target 2030'))->default(0.0000);

        $form->saving(function (Form $form) {
            $form->model()->user_id = auth()->id();
        });

        return $form;
    }
}
