<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Task;
use PDF;
use App\Models\Progress;
use App\Models\Room;
use App\Models\User;
use App\Models\Raport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class RaportController extends Controller
{
  public function index(Request $request)
  {
    if ($request->ajax()) {
      // $keywords = $request->keywords;
      $collection = Raport::paginate(10);
      return view('page.admin.raport.list', compact('collection'));
    }
    return view('page.admin.raport.main');
  }

  public function generatePDF()
  {
    $raport = Raport::get();
    $data = ['title' => 'Raport', 'raport' => $raport];
    $pdf = PDF::loadView('page.admin.raport.pdf', $data);
    return $pdf->download('raport.pdf');
  }
}
