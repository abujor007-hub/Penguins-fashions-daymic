<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Order Confirmation</title>
</head>

<body style="font-family: Arial, sans-serif; background:#f4f4f4; padding: 20px;">

    <table width="700" align="center" cellpadding="0" cellspacing="0"
        style="background:#fff; padding:20px; border-collapse:collapse; padding: 20px;">

        <tr>
            <td>
                <h2 style="margin:0;">Order Confirmation</h2>
                <p>Hi {{ $order->full_name }}</p>
                <p>Your order has been successfully placed.</p>

            </td>
        </tr>

        <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="10" style="border-collapse:collapse;">

                    <thead>
                        <tr style="border-bottom:1px solid #ddd;">
                            <th align="left">Image</th>
                            <th align="left">Name</th>
                            <th align="center">Quantity</th>
                            <th align="right">Price</th>
                            <th align="right">Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($order->items as $item)
                         

                            <tr style="border-bottom:1px solid #eee;">

                                <td width="100">
                                    <img src="{{ config('app.url') . '/storage/' . $item->product->products_image }}"
                                        width="70">
                                </td>

                                <td>
                                    {{ $item->product->title ?? 'N/A' }}
                                </td>

                                <td align="center">
                                    {{ $item->quintity }}
                                </td>

                                <td align="right">
                                    ${{$item->price}}
                                </td>

                                <td align="right"> {{ $order->status }}</td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>
            </td>
        </tr>

        <tr>
            <td align="right" style="padding-top:20px;">

                <p style="margin:5px 0;">
                    Subtotal :
                    <strong>${{ number_format($order->subtotal, 2) }}</strong>
                </p>

                <p style="margin:5px 0;">
                    Shipping :
                    <strong>${{ number_format($order->shipping, 2) }}</strong>
                </p>

                <h2 style="margin-top:10px;">
                    Total :
                    ${{ number_format($order->total, 2) }}
                </h2>

            </td>
        </tr>

    </table>

</body>

</html>