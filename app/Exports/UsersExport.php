<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;



class UsersExport implements FromCollection,WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        // dd(User::all());
        return User::all();
    }


    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Email Verified At',
            'Password',
            'remember_token',
            'responsive_id',
            'full_name',
            'current_plan',
            'status',
        ];
    }

    public function map($user): array
    {
        return [

            $user->name,
            $user->email,
            $user->email_verified_at,
            $user->password,
            $user->remember_token,
            $user->responsive_id,
            $user->full_name,
            $user->current_plan,
            $user->status
        ];
    }
}
