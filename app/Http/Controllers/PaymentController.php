<?php

namespace App\Http\Controllers;
use App\Events\OrderPaid;
use Carbon\Carbon;
use App\Models\Order;
use App\Exceptions\InvalidRequestException;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payByAlipay(Order $order, Request $request)
    {
    	$this->authorize('own',$order);
    	if ($order->paid_at || $order->closed) {
    		throw new InvalidRequestException('订单状态不正确');
    	}

    	return app('alipay')->web([
    		'out_trade_no' => $order->no,
    		'total_amount' => $order->total_amount,
    		'subject'      => '支付 Laravel Shop 的订单'.$order->no,

    	]);
    }

    public function alipayReturn()
    {    
    	  try {
            app('alipay')->verify();
        } catch (\Exception $e) {
            return view('pages.error', ['msg' => '数据不正确']);
        }

        return view('pages.success', ['msg' => '付款成功']);
    }

    public function alipayNotify()
    {
    	
        $data  = app('alipay')->verify();
        
        $order = Order::where('no', $data->out_trade_no)->first();
        
        if (!$order) {
            return 'fail';
        }
       
        if ($order->paid_at) {
           
            return app('alipay')->success();
        }

        $order->update([
            'paid_at'        => Carbon::now(), 
            'payment_method' => 'alipay', 
            'payment_no'     => $data->trade_no, 
        ]);

        $this->afterPaid($order);
        return app('alipay')->success();
    }

    protected function afterPaid(Order $order)
    {
        event(new OrderPaid($order));
    }
}
