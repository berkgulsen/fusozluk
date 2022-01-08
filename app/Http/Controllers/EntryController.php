<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entry;
use App\Models\User;

class EntryController extends Controller
{
    public function entryPost(Request $request){
        $entry = new Entry;
        $entry->content = $request->entryContent;
        $entry->title_id = $request->title_id;
        $entry->user_id = $request->user_id;
        $entry->save();
        return back();
    }
}
