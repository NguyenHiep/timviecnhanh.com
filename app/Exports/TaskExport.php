<?php

namespace App\Exports;

use App\Model\Task;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TaskExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Task::select('id', 'name', 'description', 'start_date', 'end_date', 'status', 'assign_user_id')->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'description',
            'start_date',
            'end_date',
            'status',
            'assign_user_id'
        ];
    }
}
