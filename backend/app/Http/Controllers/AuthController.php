<?php
namespace App\Http\Controllers;


use App\Http\Requests\Auth\LoginRequest;
use App\Facades\Repositories\Auth\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Mockery\Exception;

class AuthController extends Controller
{

  public function __construct()
  {

    $this->middleware('auth:api', ['except' => ['login','register']]);
  }

    /**
     * JWT Login
     *
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
   {
      $credentials = $request->validated();
      $token = Auth::attempt($credentials);

      $response = [
        'status' => 'error',
        'message' => 'Unauthorized',
      ];

      if (!$token) {
        return response()->json($response, 401);
      }


     $response = [
       'status' => 'success',
       'user' => Auth::user(),
       'authorization' => [
         'token' => $token,
         'type' => 'bearer',
       ]
     ];

      return response()->json($response);

  }

    /**
     * JWT Register
     *
     * @param Request $request
     * @return JsonResponse
     */
  public function register(Request $request): JsonResponse
  {

    $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6',
    ]);


   try {
     $user = UserRepository::create([
       'name' => $request->name,
       'email' => $request->email,
       'password' => Hash::make($request->password),
     ]);


     $token = Auth::login($user);

     return response()->json([
       'status' => 'success',
       'message' => 'User created successfully',
       'user' => $user,
       'authorisation' => [
         'token' => $token,
         'type' => 'bearer',
       ]
     ]);
    } catch (Exception $error)
    {
      return response()->json([
        'status' => 'error',
        'message' => $error->getMessage(),
      ]);
    }

  }

  /**
   * JWT Logout
   *
   * @return JsonResponse
   */
  public function logout(): JsonResponse
  {
    Auth::logout();
    return response()->json([
      'status' => 'success',
      'message' => 'Successfully logged out',
    ]);
  }

  /**
   * JWT Refresh
   *
   * @return JsonResponse
   */
  public function refresh(): JsonResponse
  {
    return response()->json([
      'status' => 'success',
      'user' => Auth::user(),
      'authorisation' => [
        'token' => Auth::refresh(),
        'type' => 'bearer',
      ]
    ]);
  }

}
