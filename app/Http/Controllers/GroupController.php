<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function showSeconde()
    {
        $seconde = Group::where('id', '1')->first();
        $students = $seconde->students;
        return view('groups.seconde', compact('students'));


}

    public function showPremière()
    {
        $première = Group::where('id', '2')->first();
        $students = $première->students;
        return view('groups.première', compact('students'));

}

    public function showTerminale()
    {
        $terminale = Group::where('id', '3')->first();
        $students = $terminale->students;
        return view('groups.terminale', compact('students'));

}
}

