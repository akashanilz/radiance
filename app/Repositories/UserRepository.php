<?php

namespace App\Repositories;

use App\Models\User;
use Auth;
use Exception;
use Hash;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version January 11, 2020, 11:09 am UTC
 */
class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }

    /**
     * @param  array  $input
     *
     * @return bool
     */
    public function profileUpdate($input)
    {
        /** @var User $user */
        $user = $this->find(Auth::id());
        try {
            if (isset($input['image']) && ! empty($input['image'])) {
                $mediaId = updateProfileImage($user, $input['image']);
            }

            $user->update($input);

            return true;
        } catch (Exception $e) {
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

    /**
     * @param  array  $input
     *
     * @return bool
     */
    public function changePassword($input)
    {
        try {
            /** @var User $user */
            $user = Auth::user();
            if (! Hash::check($input['password_current'], $user->password)) {
                throw new UnprocessableEntityHttpException("Current password is invalid.");
            }
            $input['password'] = Hash::make($input['password']);
            $user->update($input);

            return true;
        } catch (Exception $e) {
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }
}
