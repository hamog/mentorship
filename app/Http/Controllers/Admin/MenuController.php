<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuGroup;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function groups(): Renderable
    {
        $menuGroups = MenuGroup::query()->select(['id', 'label'])->get();

        return view('admin.menu.groups', compact('menuGroups'));
    }

    public function index(): Renderable
    {
        $menuGroup = MenuGroup::query()->findOrFail(request('menu_group_id'));
        $menuItems = $menuGroup->items()->get();

        return view('admin.menu.index', compact('menuItems', 'menuGroup'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        dd($id);
    }
}
