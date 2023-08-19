<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class StripeController extends Controller
{
 
    public function session(Request $request)
    {
        $user         = auth()->user();
        $planItems = [];
 
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
 
        foreach (session('cart') as $id => $details) {
 
            $plan_name = $details['nome'];
            $total_plan = $details['prezzo'];
            $quantity = $details['quantity'];
 
            $two0 = "00";
            $unit_amount = "$total_plan$two0";
 
            $planItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => $plan_name,
                    ],
                    'currency'     => 'EUR',
                    'unit_amount'  => $unit_amount,
                ],
                'quantity' => $quantity
            ];
        }
 
        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items'            => [$planItems],
            'mode'                  => 'payment',
            'allow_promotion_codes' => true,
            'customer_email' => $user->email,//"andrea01.bonoli@edu.unife.it", //$user->email,
            'success_url' => route('success'),
            'cancel_url'  => route('cancel'),
        ]);
     
        return redirect()->away($checkoutSession->url);
    }
 
    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seller will reach out to you as soon as possible";
    }
 
    public function cancel()
    {
        return view('cancel');
    }
}