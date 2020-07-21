<?
namespace App\Http\Controllers;

/**
 * 
 */
class MyController extends Controller
{
	public function index ($name = 0)
	{
		return $name;
	}

}