<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

	$posts = \App\Post::all();
	foreach ($posts as $post) {
		echo $post->id.'<br>';
		foreach ($post->comments as $comment) {
			echo $comment->content;
		}
	}
	

	/*
	$posts = \App\Post::all();
	foreach ($posts as $post) {
			echo $post->title.'<br>';
	}
	*/	

	/*
	//刪除某筆資料，兩種寫法
	$post = \App\Post::find(3);
	$post->delete();

	\App\Post::destroy(4, 5); //只有destroy可以不用array的寫法
	*/


	/*
	//找到某筆資料，更新資料內容，兩種寫法
	$post = \App\Post::find(1);
	$post->update([
		'title' => '中文',
		'content' => '內容'
	]);

	$post = \App\Post::find(2);
	$post->title = '中文aaa';
	$post->content = '內容bbb';
	$post->save();
	*/

	/*
	//加些條件判斷式
	$post = \App\Post:: where('is_feature', '=', '1')
					 -> where('page_view', '>=', '100')
					 -> orderBy('id', 'page_view', 'desc')
					 -> get();

	dd($post);
	*/

	/*
	//只取出某筆資料
	$post = \App\Post::find(1);
	dd($post);

	//取出某幾筆資料
	$post = \App\Post::find([1, 3, 5]);
	dd($post);
	*/

	/*
	//取出所有的資料，並運用dd function將所有資料印出
	$posts = \App\Post::all();
	dd($posts);
	*/

	/*
	// two ways
	// object instance
	$post = new \App\Post();
	$post->title = 'Hello';
	$post->content = 'Hello, content';
	$post->is_feature = rand(0, 1);
	$post->page_view = rand(0, 100);
	$post->save();
	*/


	/*
	// Mass Assment
	\App\Post::truncate();
	\App\Post::create([
		'title' => 'Hello',
		'content' => 'Hello, content',
		'is_feature' => rand(0, 1),
		'page_view' => rand(0, 100),
	]);
	*/
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
