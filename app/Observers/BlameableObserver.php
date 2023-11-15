<?php

namespace App\Observers;

use App\Models\BaseModel;
use Illuminate\Support\Facades\Auth;

class BlameableObserver
{
    public function creating(BaseModel $model)
    {
        if ($model->hasColumn('created_by')) {
            if (Auth::check()) {
                $model->created_by = Auth::user()->id;
                $model->updated_by = Auth::user()->id;
            } else {
                $model->created_by = null;
                $model->updated_by = null;
            }
        }
    }

    public function updating(BaseModel $model)
    {
        if ($model->hasColumn('updated_by')) {
            if (Auth::check()) {
                $model->updated_by = Auth::user()->id;
            } else {
                $model->updated_by = null;
            }
        }
    }

    public function deleting(BaseModel $model)
    {
        if ($model->hasColumn('deleted_by')) {
            if (Auth::check()) {
                $model->deleted_by = Auth::user()->id;
            } else {
                $model->deleted_by = null;
            }

            $model->save();
        }
    }
}
