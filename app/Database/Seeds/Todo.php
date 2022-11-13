<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Todo extends Seeder
{
    public function run()
    {
        // Data todo
        $todo_data = [
            [
                'title' => 'Aku kebelet ngiseng',
                'content' => 'Silitku sembelit'
            ],
            [
                'title' => 'Aku pengen mangan basreng',
                'content' => 'BM basreng'
            ],
            [
                'title' => 'Sesok UTS Coy',
                'content' => 'Aku durung sinau'
            ]
        ];

        foreach ($todo_data as $data) {
            $this->db->table('todo_list')->insert($data);
        }
    }
}
