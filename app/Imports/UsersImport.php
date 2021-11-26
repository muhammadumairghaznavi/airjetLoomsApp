<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;


class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new User([
            'name'     => $row['name'],
            'email'    => $row['email'],
            'email_verified_at' => $row['email_verified_at'],
            'password' => Hash::make($row['password']),
            'remember_token' => $row['remember_token'],
            'responsive_id' => $row['responsive_id'],
            'full_name' => $row['full_name'],
            'current_plan' => $row['current_plan'],
            'status' => $row['status']
        ]);
    }
}
