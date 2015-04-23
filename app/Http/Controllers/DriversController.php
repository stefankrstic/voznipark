<?php namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveDriverRequest;

class DriversController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$drivers = Driver::all();

		return view('drivers.index', compact('drivers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('drivers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SaveDriverRequest $request)
	{
		Driver::create($request->all());

		return redirect('drivers');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$driver = Driver::find($id);

		return view('drivers.show', compact('driver'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$driver = Driver::find($id);

		return view('drivers.edit', compact('driver'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(SaveDriverRequest $request, $id)
	{
		$driver = Driver::find($id);

		$driver->update($request->all());

		return redirect('drivers');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$driver = Driver::find($id);

		$driver->delete();

		return redirect('drivers');
	}

}
