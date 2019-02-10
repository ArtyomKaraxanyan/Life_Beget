<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios=Portfolio::all();
        return view('admin.portfolio.index',compact('portfolios'));
    }
    public function create()
    {

        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/img_portfolio/', $name);
        }
        $portfolio= new Portfolio;
        $portfolio->name=$request->get('name');
        $portfolio->link=$request->get('link');
        $portfolio->image=$name;
        $portfolio->save();
        return redirect('admin/portfolio')->with('success', 'Information has been added');
    }
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);

        return view('admin.portfolio.edit',compact('portfolio'));
    }
    public function update(Request $request, $id)
    {
        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/img_portfolio/', $name);
        }
        $portfolio= Portfolio::find($id);
        $portfolio->name=$request->get('name');
        $portfolio->link=$request->get('link');
        if (empty($name)){
            $name= $portfolio->image;
            $portfolio->image=$name;
        }
        $portfolio->image=$name;
        $portfolio->update();
        return redirect('admin/portfolio')->with('success','Information has been  updated');
    }
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect('admin/portfolio')->with('success','Information has been  deleted');
    }

}
