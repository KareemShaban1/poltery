<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class websiteInfoController extends Controller
{
    //
    public function index()
    {
        $websiteInfo = WebsiteInfo::all();
        return view('backend.dashboard.views.websiteInfo.index', compact('websiteInfo'));

    }

    public function show()
    {

    }

    public function create()
    {

        return view('backend.dashboard.views.websiteInfo.create');

    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            'key' => 'required|string',
            'value' => 'nullable|string',
            'type' => 'nullable|string',
            'language' => 'nullable|string',

        ], [
            'key.required' => 'الأسم مطلوب'
        ]);
        websiteInfo::create($validateData);

        return redirect()->route('websiteInfo.index')->with('toast_success', 'تم أنشاء ال meta data بنجاح');

    }

    public function edit($id)
    {
        $websiteInfo = websiteInfo::findOrFail($id);
        return view('backend.dashboard.views.websiteInfo.edit', compact('websiteInfo'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'key' => 'required|string',
            'value' => 'nullable|string',
            'type' => 'nullable|string',
            'language' => 'nullable|string',
        ], [
            'key.required' => 'الأسم مطلوب'
        ]);

        $websiteInfo = websiteInfo::findOrFail($id);

        $websiteInfo->update($validateData);

        return redirect()->route('websiteInfo.index')->with('toast_success', 'تم تعديل ال meta data بنجاح');
    }

    public function destroy($id)
    {
        $websiteInfo = websiteInfo::findOrFail($id);
        $websiteInfo->delete();
        return redirect()->route('websiteInfo.index')->with('toast_error', 'تم حذف ال meta data بنجاح');

    }
}