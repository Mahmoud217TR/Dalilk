<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stype;
use App\Models\Site;

class AdminsController extends Controller
{
    //

    public function panel()
    {
        return view('admin/panel');
    }


    // Types
    public function addTypeVeiw()
    {
        return view('admin/types/create');
    }

    public function addTypeCon()
    {
        $type = new Stype;
        $type -> name = request('name');
        $type -> icon = request('icon');
        $type->save();
        return redirect('/admins/type/'.$type->id);
    }

    public function editTypeList()
    {
        return view('admin/types/edit_list');
    }

    public function editTypeVeiw($id)
    {
        $type = Stype::findOrFail($id);
        return view('admin/types/edit',['type'=>$type]);
    }

    public function editTypeCon($id)
    {
        $type = Stype::findOrFail($id);
        $type -> name = request('name');
        $type -> icon = request('icon');
        $type->save();
        return redirect('/admins/type/'.$type->id);
    }

    public function deleteTypeList()
    {
        return view('admin/types/delete_list');
    }

    public function deleteTypeVeiw($id)
    {
        $type = Stype::findOrFail($id);
        return view('admin/types/delete',['type'=>$type]);
    }

    public function deleteTypeCon($id)
    {
        $type = Stype::findOrFail($id);
        $type->delete();
        return redirect('/admins/panel');
    }
    
    public function typePreveiw($id)
    {
        $type = Stype::findOrFail($id);
        
        return view('admin/types/preveiw',['type'=>$type]);
    }


    // Sites
    public function addSiteVeiw()
    {
        return view('admin/sites/create');
    }

    public function addSiteCon()
    {
        $site = new Site;
        $site -> name = request('name');
        $site -> desc = request('desc');
        $site -> check = request('check');
        $site -> visited = 0; 
        $site->save();
        return redirect('/admins/site/'.$site->id);
    }

    public function sitePreveiw($id)
    {
        $site = Site::findOrFail($id);
        
        return view('admin/sites/preveiw',['site'=>$site]);
    }

    // Lists
}
