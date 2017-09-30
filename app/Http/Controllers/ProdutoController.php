<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use estoque\Http\Requests\ProdutoRequest;
use estoque\Produto;

class ProdutoController extends Controller{
	public function lista(){
		#Code
		//$produtos = DB::select('select * from produtos');

		//Using Eloquent ORM
		$produtos = Produto::all();
		if(view()->exists('produto.listagem')){
			return view('produto.listagem')->with('produtos', $produtos);
		}
		
	}

	public function mostra($id){
		// get Request HTTP
		//	$id = Request::route('id');

		//Using facades
		//$resposta = DB::select('select * from produtos where id = ?', [$id]);

		//Using Eloquent ORM
		$resposta = Produto::find($id);
		if(empty($resposta)){
			return view('Este produto não existe !');
		}
		return view('produto.detalhes')->with('p', $resposta);
	}

	//add a new product
	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(ProdutoRequest $request){

		$produto = new Produto();

		$produto->nome = $request->nome;
		$produto->descricao = $request->descricao;
		$produto->valor = $request->valor;
		$produto->quantidade = $request->quantidade;

		/* Using Facades
		$nome = Request::input('nome');
		$descricao = Request::input('descricao');
		$valor = Request::input('valor');
		$quantidade = Request::input('quantidade');
		*/
		if(isset($produto->nome) && isset($produto->descricao) && isset($produto->valor) && isset($produto->quantidade)){
			/*Using Facades
			$retorno = DB::insert("insert into produtos(nome,descricao,valor,quantidade) values(?,?,?,?)",
				array($nome, $descricao, $valor, $quantidade));
			*/

			//Using Eloquent ORM
			$retorno = $produto->save();
		}

		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();

		return redirect()->action('ProdutoController@lista');
	}

	public function atualizar($id){
		return view('produto.formularioAlterar')->with('id', $id);
	}

	public function alterar($id){

		$produto = Produto::find($id);

		$produto->nome = Request::input('nome');
		$produto->descricao = Request::input('descricao');
		$produto->valor = Request::input('valor');
		$produto->quantidade = Request::input('quantidade');

		$retorno = $produto->save();

		return redirect()->action('ProdutoController@lista');
	}

	//Returning object json for webepage
	public function listaJson(){
		//$produtos = DB::select('select * from produtos');
		$produtos = Produto::all();

		//Path for find arquive
		//$arquivo = 'C:\Users\Romero\Desktop\PHP e Laravel Crie aplicacoes web como um verdadeiro artesao - Casa do Codigo.pdf';

		//Function for return arquive download
		//return response()->download($arquivo);

		return response()->json($produtos);
		
	}	
}