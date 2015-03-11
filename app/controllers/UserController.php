<?php

class UserController extends \BaseController {

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => ['post', 'put']));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{   $users = User::all();
		return View::make('users.index')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $rules = array(
            'name' => array('required', 'unique:users')
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::route('users.create')->withErrors($validator)->withInput();
        }

		$name = Input::all();
        $user = new User();
        $user->name = $name['name'];
        $user->monthly = $name['monthly'];
        $user->save();
        return Redirect::route('users.index')->withMessage('New user was added');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $single_user = User::findOrFail($id);
		return View::make('users.single')->with('single_user', $single_user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $user = User::findOrFail($id);
		return View::make('users.edit')->withUser($user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $rules = array(
            'name' => 'required|unique:users,name,'.$id
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::route('users.edit', $id)->withErrors($validator)->withInput();
        }

        $name = Input::all();
        $user = User::find($id);
        $user->name = $name['name'];
        $user->monthly = $name['monthly'];
        $user->update();
        return Redirect::route('users.index')->withMessage('User successfully updated');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::findOrFail($id)->delete();
        Return Redirect::route('users.index')->withMessage('User deleted');
	}


}
