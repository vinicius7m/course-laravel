<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $helloWorld = 'Hello World';
    # compact que faz uma array com os valores procurando o nome e valor (que é impresso)

    return view('welcome', compact('helloWorld'));
});

Route::get('/model', function() {

    // \App\User::all() - Retorna todos os usuários 
    // \App\User::find(1) - Retorna um usuário
    // \App\User::where('name','email')

    // return \App\User::all();

    // return \App\User::where('name','Katherine Kovacek')->first(); -- primeiro
    // select * from users where name = "Vinicius"
    // return \App\User::paginate(10); -- Paginação do Laravel

    // return \App\User::all();

    /* Mass Assignment Atribuição em massa 
    
    $user = \App\User::create([
       'name'=>'Nanderson Castro',
        'email'=>'nanderson@gmail.com',
        'password'=>bcrypt('1223345')
    ]); */

    /* Mass Update
    $user = \App\User::find(42);

    $user = $user->update([
        'name'=>'Nome atualidade'
    ]);    
    dd($user); */

    // * Como fazer para pegar loja de um usuário
    // $user = \App\User::find(4);
    // dd($user->store()->count()); // objeto único (Store)
    // return dd($user->store());

    // $loja = \App\Store::find(1);
    //return dd($loja->products());

    // return \App\User::all();

    // Pegar categoria de uma loja
    // $category = \App\Category::find(2);
    // $category->products;

    // * Criar uma loja para um usuário
    // $user = \App\User::find(3);
    // $store = $user->store()->create([
    //     'name'=>'Loja teste',
    //     'description'=>'Loja teste de produtos de informática',
    //     'mobile_phone'=>'XX-XXXXX-XXXX',
    //     'phone'=>'XXXX-XXXX',
    //     'slug'=>'loja-teste'
    // ]);

    // * Criar um produto para uma loja
    // $store = \App\Store::find(41);
    // $product = $store->products()->create([
    //     'name'=>'Teste de Produto',
    //     'description'=>'Teste de nome de produto bom',
    //     'body'=>'Produto não sei das quantas',
    //     'price'=>10.22,
    //     'slug'=>'teste-produto'
    // ]);


    // * Criar uma categoria 
    // \App\Category::create([
    //     'name'=>'Games',
    //     'description'=>null,
    //     'slug'=>'games'
    // ]);

    // \App\Category::create([
    //     'name'=>'Joojs',
    //     'description'=>null,
    //     'slug'=>'Joojs'
    // ]);
    // return \App\Category::all();
    // return \App\Category::all();
    
    // * Adicionar um produto para uma categoria
    // $product = \App\Product::find(30);
    // attach - pega a categoria de acordo com o id
    //dd($product->categories()->sync([2]));
    // dd($product->categories()->attach([1]));
    // dd($product->categories()->detach([]));

    $produto = \App\Product::find(30);
    return $produto->categories;

});

Route::get('admin/stores', 'Admin\\StoreController@index');

Route::get('admin/stores/create', 'Admin\\StoreController@create');

Route::post('admin/stores/store', 'Admin\\StoreController@store');
// Route::get - recupera
// Route::post - cria
// Route::put - atualização
// Route::patch - atualização
// Route::delete - exclui
// Route::options - configurações e rotas