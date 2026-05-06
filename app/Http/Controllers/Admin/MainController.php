<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class MainController extends Controller
{
    public function index() {

        $tag = new Tag();
        $tag->title = 'я конченый не подходите';
        $tag->save();

        return view('admin.index');
        //sadgfasiodghilasdlkgkjhlasdlhgljhasdljhlj КАКОЙ АККАУНТ СЕМЕНА АЛО ЭТО Я ЭТО НЕ СЕМЕН
        //sadgfasiodghilasdlkgkjhlasdlhgljhasdljhlj КАКОЙ АККАУНТ СЕМЕНА АЛО ЭТО Я ЭТО НЕ СЕМЕН

    }
}
