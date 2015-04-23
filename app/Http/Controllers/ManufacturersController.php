<?php namespace App\Http\Controllers;

use App\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveManufacturerRequest;

class ManufacturersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$manufacturers = Manufacturer::all();

		return view('manufacturers.index', compact('manufacturers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('manufacturers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SaveManufacturerRequest $request)
	{
		Manufacturer::create($request->all());

		return redirect('manufacturers');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$manufacturer = Manufacturer::find($id);

		return view('manufacturers.show', compact('manufacturer'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$manufacturer = Manufacturer::find($id);

		return view('manufacturers.edit', compact('manufacturer'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(SaveManufacturerRequest $request, $id)
	{
		$manufacturer = Manufacturer::find($id);

		$manufacturer->update($request->all());

		return redirect('manufacturers');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$manufacturer = Manufacturer::find($id);

		$manufacturer->delete();

		return redirect('manufacturers');
	}

}
