<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TodoModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Todo extends BaseController
{
    public function index()
    {
        // Membuat model todo
        $todo = new TodoModel();
        /*
            Menyiapkan data yang akan dikirim ke view
        */
        $data['title'] = "Todo List";
        $data['description'] = "Disini semua list Anda";
        $data['sedang_berjalan'] = $todo->where('status', 'sedang berjalan')->findAll();
        $data['selesai'] = $todo->where('status', 'selesai')->findAll();
        $data['batal'] = $todo->where('status', 'batal')->findAll();

        return view('todo', $data);
    }

    public function viewTodos($id)
    {
        $todo = new TodoModel();
        $data['todo'] = $todo->where([
            'id' => $id
        ])->first();

        $data['title'] = "Todo List";
        $data['description'] = "Disini semua list Anda";

        // Menampilkan error jika data tidak ditemukan
        if (!$data['todo']) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('todos_detail', $data);
    }

    public function create_todo()
    {
        $data['title'] = "Membuat Todo List";
        $data['description'] = "Apa yang sedang Anda pikirkan";

        $todo = new TodoModel();

        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'title' => 'required|min_length[5]|max_length[255]',
            'description' => 'required'
        ])) {
            $todo->save([
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('description')
            ]);
            return redirect()->to(base_url('todo'));
        }

        return view('create_todo', $data);
    }

    public function update_todo()
    {
        $data['title'] = "Update Todo List";
        $data['description'] = "Perbarui Apa yang sedang Anda pikirkan";
        $todo = new TodoModel();

        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'title' => 'required|min_length[5]|max_length[255]',
            'description' => 'required'
        ])) {
            $todo->update([
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('description')
            ]);
            return redirect()->to(base_url('todo'));
        }

        return view('update_todo', $data);
    }
}
