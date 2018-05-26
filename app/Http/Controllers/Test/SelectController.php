<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;

class SelectController extends Controller
{

  public function __invoke($id)
  {
    return view('user.profile', ['user' => User::findOrFail($id)]);
  }

  public function selectByOne($id)
  {
  	echo  $id;
  }

}