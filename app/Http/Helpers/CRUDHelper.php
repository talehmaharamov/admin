<?php

namespace App\Http\Helpers;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
class CRUDHelper
{
    public static function remove_item($model,$id): \Illuminate\Http\RedirectResponse
    {
        try {
            $modelItem = $model::find($id);
            if (file_exists($modelItem->photo)) {
                unlink(public_path($modelItem->photo));
            }
            $modelItem->delete();
            alert()->success(__('messages.success-delete'));
        } catch (Exception $e) {
            alert()->error(__('backend.error-edit'));
        }
        return Redirect::back();
    }
}

