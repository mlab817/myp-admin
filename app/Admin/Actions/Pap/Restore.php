<?php

namespace App\Admin\Actions\Pap;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Restore extends RowAction
{
    public $name = 'Restore';

    public function handle(Model $model)
    {
        $model->restore();

        return $this->response()->success('Successfully restored.')->refresh();
    }


}
