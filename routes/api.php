<?php
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/students', function () {
    return response()->json(Student::all());
});


Route::get('/subjects', function () {
    return response()->json([
        'Year 1' => Subject::where('year', 1)->get(),
        'Year 2' => Subject::where('year', 2)->get(),
        'Year 3' => Subject::where('year', 3)->get(),
        'Year 4' => Subject::where('year', 4)->get(),
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
