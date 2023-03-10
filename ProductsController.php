<?php class ProductsController {

	function index () {

			$products = ProductModel::all();
		// $products = ProductModel::where('id >= ?');

		Views::render('products.index', get_defined_vars());
	}

	function new () {
		Views::render('products.new', get_defined_vars());
	}

	function create () {
		$product = ProductModel::new($_POST);
		Views::redirect('/produtos');
	}

	function destroy ($id) {
		ProductModel::destroy($id);
		Views::redirect('/produtos');
	}

	function edit ($id) {
		$product = ProductModel::find($id);
		Views::render('products.edit', get_defined_vars());
	}

	function update ($id) {
		$product = ProductModel::find($id);
		$product->update($_REQUEST);
		Views::redirect('/produtos');
	}

}