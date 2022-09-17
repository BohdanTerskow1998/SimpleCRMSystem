<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persons;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
   public function index()
   {
   	$persons = cache()->remember('persons' . request('info', 1), 1, function() {
   		return DB::table('persons')->paginate(50);
   	});

   	return view('welcome', compact('persons'));
   }

   public function sendData(Request $r)
   {
   	$persons = new Persons();
   	$persons->name = $r->name;
   	$persons->email = $r->email;
   	$persons->level = $r->level;
   	$persons->experience = $r->experience;
   	$persons->save();

   	return response()->json(['success' => 'Data sent! Please, update page!']);
   }

   public function list(Request $request)
   {
   	if($request->ajax())
   	{
   		$persons = cache()->remember('persons' . request('info', 1), 1, function() {
   			return Persons::with('persons')->paginate(50);
   	    });

   	    return view('list', compact('persons'))->render();
   	}
   }

   public function update_page($id) 
   {
   	$person = new Persons();
   	return view('update', ['data' => $person->find($id)]);

   }

   public function update_record($id, ProjectRequest $r)
   {
	$person = Persons::find($id);
	$person->name = $r->input("name");
	$person->email = $r->input("email");
	$person->level = $r->input("level");
	$person->experience = $r->input("experience");

	$person->save();
   	return redirect()->route('update', $id);
   }

   public function delete($name)
   {
   	DB::delete("delete from persons where name = ?", [$name]);
   	echo "Record deleted! <a href='/'>Click here in order to back!</a>";
   }
}
