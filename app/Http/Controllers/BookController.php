<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{

    public function index(Request $request)
    {

        $items = Book::all();
        return $items->toArray();
    }

    //    public function add(Request $request){
    //     file_put_contents('test.log', print_r($request->input(), true));}

    public function add(Request $request)
    {
        $book = new Book;
        $form = $request->all();
        //unset($form['_token']);
        $book->fill($form)->save();

        // $items = Book::all();
        // return $items->toArray();
    }
    // $param =[
    //     'title'=>$request->title,
    //     'author'=>$request->author,
    // ];
    // DB::insert('insert into books(title,author)value(:title,:author)',$param);

    // public function index(Request $request) {
    //     $items= Book::all();
    //     return $items->toArray();
    // $books = [
    //     'id' => 1,
    //     'title' =>'初めてのJavaScript',
    //     'price' => 2000
    // ];
    // return $book;
    //DBから取得した複数個のデータが$itemsに入っている場合
    //$items= Book::all();
    //return $items->toArray();}
}
