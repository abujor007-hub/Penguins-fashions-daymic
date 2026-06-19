<?php

namespace App\Http\Controllers;


use App\Mail\orderConfimMail;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store(Request $request){
          $request->validate([
            'full_name' => 'required',
            'phone'    => 'required',
            'email'     => 'required|email',
            'address'   => 'required',
        ]);

        $cart = Session()->get('cart', []);

        if (empty($cart)) {
            return back()->with('error', 'Cart is empty');
        }

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quintity'];
        }

        $shipping = 150;
        $total = $subtotal + $shipping;

        $order = Order::create([
            'user_id'   => Auth::id(),
            'full_name' => $request->full_name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'address'   => $request->address,
            'message'   => $request->message,
            'subtotal'  => $subtotal,
            'shipping'  => $shipping,
            'total'     => $total,
         
        ]);


        foreach ($cart as $item) {
    $order->items()->create([
        'product_id' => $item['id'],
        'price'      => $item['price'],
        'quintity'   => $item['quintity'],
    ]);
}

   $order = Order::with('items.product')
    ->find($order->id);

    Mail::to($order->email)->send(new orderConfimMail($order));
  

        session()->forget('cart');

      return redirect()
            ->route('order.confirm', $order->id)
            ->with('success', 'Order placed successfully');
   
    }

   public function confirm($id)
    {
       $order = Order::with('items.product')->findOrFail($id);
   

        return view('pages.mainpage.order-confirm', compact('order'));
    }

    public function order_data(){
        $order= Order::with('items.product')->get();
        return view('pages.dashboardPage.order.order',compact('order'));
    }
    
    public function order_info($id){
        $order= Order::with('items.product')->findOrFail($id);

        return view('pages.dashboardPage.order.order-info',compact('order'));
    }


    public function destroy($id)
{
    $order = Order::findOrFail($id);

  
    $order->items()->delete();
    $order->delete();

    return back()->with('success', 'Order deleted successfully');
}


public function updateStatus(Request $request, $id)
{
    $order = Order::findOrFail($id);

    $order->status = $request->status;
    $order->save();

    return back()->with('success', 'Order status updated successfully');
}
}
