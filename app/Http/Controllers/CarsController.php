<?php namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCarRequest;

class CarsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cars = Car::all();

		return view('cars.index', compact('cars'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cars.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SaveCarRequest $request)
	{
		Car::create($request->all());

		return redirect('cars');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$car = Car::find($id);

		return view('cars.show', compact('car'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$car = Car::find($id);

		return view('cars.edit', compact('car'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(SaveCarRequest $request, $id)
	{
		$car = Car::find($id);

		$car->update($request->all());

		return redirect('cars');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$car = Car::find($id);

		$car->delete();

		return redirect('cars');
	}

}
