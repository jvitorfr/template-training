<?php

namespace App\Http\Controllers;

use App\Models\User;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:api', ['except' => ['show']]);
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\JsonResponse
   */
  public function show(int $id)
  {
    return response()->json(
      [ 'data' => User::find($id)]
    );
  }
}
