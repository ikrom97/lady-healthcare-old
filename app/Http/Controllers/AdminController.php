<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Banner;
use App\Models\Direction;
use App\Models\Drug;
use App\Models\ReleaseForm;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use stdClass;

class AdminController extends Controller
{
  public function index()
  {
    return redirect(route('admin.products'));
  }

  public function products(Request $request)
  {
    $data = new stdClass();

    switch ($request->action) {
      case 'create':
        $data->directions = Direction::get();
        $data->releaseForms = ReleaseForm::get();
        $data->product = null;

        return view('dashboard.pages.products.show', compact('data'));

      case 'edit':
        $data->directions = Direction::get();
        $data->releaseForms = ReleaseForm::get();
        $data->product = Drug::find($request->product);

        return view('dashboard.pages.products.show', compact('data'));

      case 'delete':
        $product = Drug::find($request->product);
        $product->img
          && file_exists($product->img)
          &&  unlink($product->img);

        $product->thumb_img
          && file_exists($product->img_thumb)
          &&  unlink($product->img_thumb);

        $product->instruction
          && file_exists($product->instruction)
          &&  unlink($product->instruction);

        $product->delete();

        return back();

      default:
        $data->products = Drug::latest()->get();

        return view('dashboard.pages.products.index', compact('data'));
    }
  }

  public function productsPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $product = new Drug();
        $product->title = $request->title;
        $product->slug = SlugService::createSlug(Drug::class, 'slug', $product->title);
        $product->category = $request->category;
        $product->prescription = $request->prescription;
        $product->direction_id = $request->direction_id;
        $product->release_form_id = $request->release_form_id;
        $product->description = $request->description;
        $product->compound = $request->compound;
        $product->indications = $request->indications;
        $product->mode = $request->mode;
        $product->url = $request->url;

        if ($request->hasFile('img')) {
          $file = $request->file('img');
          $fileName = $product->slug . '.' . $file->extension();
          $file->move(public_path('img/products'), $fileName);
          $file->move(public_path('img/products/thumbs'), $fileName);
          $product->img = 'img/products/' . $fileName;
          $product->img_thumb = 'img/products/thumbs/' . $fileName;
        }

        if ($request->hasFile('instruction')) {
          $file = $request->file('instruction');
          $fileName = $product->slug . '.' . $file->extension();
          $file->move(public_path('files/products'), $fileName);
          $product->instruction = 'files/products/' . $fileName;
        }

        $product->save();

        return back()->with('success', 'Данные успешно сохранена');

      case 'update':
        $product = Drug::find($request->id);
        $product->title = $request->title;
        $product->category = $request->category;
        $product->prescription = $request->prescription;
        $product->direction_id = $request->direction_id;
        $product->release_form_id = $request->release_form_id;
        $product->description = $request->description;
        $product->compound = $request->compound;
        $product->indications = $request->indications;
        $product->mode = $request->mode;
        $product->url = $request->url;

        if ($request->hasFile('img')) {
          $product->img
            && file_exists($product->img)
            &&  unlink($product->img);

          $product->img_thumb
            && file_exists($product->img_thumb)
            &&  unlink($product->img_thumb);

          $file = $request->file('img');
          $fileName = $product->slug . '.' . $file->extension();
          $file->move(public_path('img/products'), $fileName);
          $file->move(public_path('img/products/thumbs'), $fileName);
          $product->img = 'img/products/' . $fileName;
          $product->img_thumb = 'img/products/thumbs/' . $fileName;
        }

        if ($request->hasFile('instruction')) {
          $product->instruction
            && file_exists($product->instruction)
            &&  unlink($product->instruction);

          $file = $request->file('instruction');
          $fileName = $product->slug . '.' . $file->extension();
          $file->move(public_path('files/products'), $fileName);
          $product->instruction = 'files/products/' . $fileName;
        }

        $product->save();

        return back()->with('success', 'Данные успешно сохранена');
    }
  }

  public function directions(Request $request)
  {
    $data = new stdClass();

    switch ($request->action) {
      case 'delete':
        $direction = Direction::find($request->direction);

        $products = Drug::where('direction_id', $direction->id)->get();
        foreach ($products as $product) {
          $product->direction_id = null;
          $product->update();
        }

        $direction->delete();

        return back();

      case 'update':
        $direction = Direction::find($request->id);
        $direction->title = $request->title;
        $direction->update();

        return back()->with('success', 'Данные успешно сохранена');

      default:
        $data->directions = Direction::get();

        return view('dashboard.pages.directions.index', compact('data'));
    }
  }

  public function directionsPost(Request $request)
  {
    $request->validate(['title' => 'required']);

    switch ($request->action) {
      case 'store':
        $direction = new Direction();
        $direction->title = $request->title;
        $direction->save();

        return back()->with('success', 'Данные успешно сохранена');

      case 'update':
        $direction = Direction::find($request->id);
        $direction->title = $request->title;
        $direction->update();

        return back()->with('success', 'Данные успешно сохранена');
    }
  }

  public function banners(Request $request)
  {
    $data = new stdClass();

    switch ($request->action) {
      case 'create':
        $data->banner = null;

        return view('dashboard.pages.banners.show', compact('data'));

      case 'edit':
        $data->banner = Banner::find($request->banner);

        return view('dashboard.pages.banners.show', compact('data'));

      case 'delete':
        $banner = Banner::find($request->banner);
        $banner->img
          && file_exists($banner->img)
          &&  unlink($banner->img);
        $banner->delete();

        return back();

      default:
        $data->banners = Banner::get();

        return view('dashboard.pages.banners.index', compact('data'));
    }
  }

  public function bannersPost(Request $request)
  {
    switch ($request->action) {
      case 'store':
        $banner = new Banner();
        $banner->title = $request->title;
        $banner->link = $request->link;
        $banner->url = $request->url;
        $banner->text = $request->text;

        if ($request->hasFile('img')) {
          $file = $request->file('img');
          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('img/banners'), $fileName);
          $banner->img = 'img/banners/' . $fileName;
        }

        $banner->save();

        return back()->with('success', 'Данные успешно сохранена');

      case 'update':
        $banner = Banner::find($request->id);
        $banner->title = $request->title;
        $banner->link = $request->link;
        $banner->url = $request->url;
        $banner->text = $request->text;

        if ($request->hasFile('img')) {
          $banner->img
            && file_exists($banner->img)
            && unlink($banner->img);

          $file = $request->file('img');
          $fileName = uniqid() . '.' . $file->extension();
          $file->move(public_path('img/banners'), $fileName);
          $banner->img = 'img/banners/' . $fileName;
        }

        $banner->update();

        return back()->with('success', 'Данные успешно сохранена');
    }
  }
}
