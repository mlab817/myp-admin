<?php

namespace App\Admin\Actions\Pap;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Submit extends RowAction
{
    public $name = 'Submit';

    public function handle(Model $model)
    {
        $model->submitted_at = now();
        $model->save();

        return $this->response()->success('Successfully submitted PAP.')->refresh();
    }

    public function dialog()
    {
        $this->confirm(
            'Confirm Submission',
            'Submitted PAPs can no longer be edited unless returned by reviewer. Proceed only if you\'re sure.');
    }
}
