<?php

namespace App\Queries;

use App\Models\Document;
use App\Models\User;
use Auth;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class DocumentDataTable
 * @package App\Queries
 */
class DocumentDataTable
{
    /**
     * @return Builder
     */
    public function get()
    {
        $query = Document::with(['documentType', 'patient.user']);

        /** @var User $user */
        $user = Auth::user();
        if ($user->hasRole('Patient')) {
            $query->where('patient_id', $user->owner_id);
        } elseif ($user->hasRole('Doctor')) {
            $query->where('uploaded_by', $user->id);
        }

        return $query->select('documents.*');
    }
}
