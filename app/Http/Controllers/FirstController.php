<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FirstController extends Controller
{
    public function Welcome(){
        $customer = [
            ["Name" => "Arsalan", "Email" => "arsalan@gmail.com", "Coins" => 100],
            ["Name" => "Asim", "Email" => "asim@gmail.com", "Coins" => 150],
            ["Name" => "Nasir", "Email" => "nasir@gmail.com", "Coins" => 120],
            ["Name" => "Jameel", "Email" => "jameel@gmail.com", "Coins" => 132],
            ["Name" => "Sohail", "Email" => "sohail@gmail.com", "Coins" => 142]
        ];
    
        return view('welcome', ["Customers" => $customer]);
    }

    public function Home(){
        $customer = ["Name" => "Abdul Basit", "Age" => 10, "Count" => 100];
        return view('home', $customer);
    }

    public function QueryParameter(){
        $name = request("name");
        $email = request("email");
        $age = request("age");

        $finalData = ["Name" => $name, "Email" => $email, "Age" => $age];

        return view('queryparameter', $finalData);
    }

    public function RouteParameter($name, $age){
        $finalData = ["Name" => $name, "Age" => $age];
        return view('routeparameter', $finalData);
    }

    // ------------------------------------------------------------------
    // CRUD application action start from here
    public function Products(){
        
        $products = Product::all();
        // $products = Product::orderby('name', 'asc')->get();
        // $products = Product::where('name', 'Tie')->get();
    
        return view('products', ["products" => $products]);
    }

    public function ProductCreate_get() {
        return view("product_create");
    }

    public function ProductCreate_post() {
        $obj = new Product();
        $obj->name = request("Name");
        $obj->description = request("Description");
        $obj->bundle_qunatity = request("BundleQuantity");
        $obj->save();

        return redirect("/products");
    }

    public function ProductEdit_get($id) {

        $product = Product::findOrFail($id);

        return view("product_edit", $product);
    }

    public function ProductEdit_post($id) {
        $obj = Product::findOrFail($id);
        $obj->name = request("Name");
        $obj->description = request("Description");
        $obj->bundle_qunatity = request("BundleQuantity");
        $obj->save();

        return redirect("/products");
    }

    public function ProductDelete($id) {

        $obj = Product::findOrFail($id);
        $obj->delete();
        return redirect("/products");
    }
}
