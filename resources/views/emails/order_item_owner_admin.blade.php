<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <style>
        table tr td {
            vertical-align: middle;
			border-collapse: collapse;
			font-size: 12px;
			padding: 0 5px;
        }
    </style>
</head>
<body>
    <div style="width:8cm; margin:20px; background:#eee;">
		<table width="100%">
			<tr>
				<td colspan="2" width="20%" style="background:#ddd;"></td>
				<td width="20%" style="text-align: center; font-size:20px; font-weight:bold;">Mundiger</td>
				<td colspan="2" width="20%" style="background:#ddd;"></td></tr>
			<tr>
				<td colspan="5" style="text-align:center;">{{$restaurant->restaurant_name}}</td>
			</tr>
			
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr>
				<td colspan="5">{{$restaurant->restaurant_address}}</td>
			</tr>
			<tr>
				<td colspan="5">Tel: {{ getcong('phone') }}</td>
			</tr>
			
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr>
				<td colspan="5">{{ $restaurant->mwst }}</td>
			</tr>
			<tr>
				<td colspan="5">{{ $restaurant->sitename }}</td>
			</tr>
			
			<tr>
				<td colspan="5" style="text-align:center; font-size:20px; font-weight:bold;">Order from Web</td>
			</tr>
			<tr>
				<td colspan="2" width="20%" style="background:#ddd;"></td>
				<td width="20%" style="text-align: center;">Ticket</td>
				<td colspan="2" width="20%" style="background:#ddd;"></td>
			</tr>
			<tr>
				<td colspan="5">Date: {{ $curdate}}</td>
			</tr>
			<tr>
				<td colspan="5">Time: {{ $curtime }}</td>
			</tr>
			
			
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr>
				<td colspan="5" style="text-align:center;">=========================================</td>
			</tr>				
			<tr>
				<td colspan="5" style="text-align:center; font-size:20px; font-weight:bold;">{{ $uaddress }}&nbsp;{{ $upostalcode }}&nbsp;{{ $ucity }} </td>
			</tr>
			<tr>
				<td>Name : </td>
				<td colspan="4">{{ $ufname }} {{ $ulname }}</td>
			</tr>
			<tr>
				<td>TEL : </td>
				<td colspan="4">{{ $umobile }}</td>
			</tr>
			<tr>
				<td>Delivery Date : </td>
				<td colspan="4">{{ $udelidate }}</td>
			</tr>
			<tr>
				<td>Delivery Time : </td>
				<td colspan="4">{{ $udelitime }}</td>
			</tr>
			<tr>
				<td>Delivery Fee : </td>
				<td colspan="4">{{getcong('currency_symbol')}}{{ $delifee }}</td>
			</tr>
			@if( $ukind == 1)
                <tr>
					<td>Delivery Way : </td>
					<td colspan="4">Delivery</td>
				</tr>
            @endif
            @if( $ukind == 2 )
                <tr>
					<td>Delivery Way : </td>
					<td colspan="4">Pick up</td>
				</tr>
            @endif
			
            @if( $upayway == 1)
                <tr>
					<td>Payment Way : </td>
					<td colspan="4">Cash on Delievery</td>
				</tr>
            @endif
            @if( $upayway == 2 )
                <tr>
					<td>Payment Way : </td>
					<td colspan="4">Cash on Pick up in Restaurant</td>
				</tr>
            @endif
            @if( $upayway == 3 )
                <tr>
					<td>Payment Way : </td>
					<td colspan="4">Payment with Card on Delivery</td>
				</tr>
            @endif
			<tr>
				<td>Notice : </td>
				<td colspan="4">{{ $unotice }}</td>
			</tr>
			
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr>
				<td colspan="2" width="20%" style="background:#ddd;"></td>
				<td width="20%" style="text-align: center;">Ticket List</td>
				<td colspan="2" width="20%" style="background:#ddd;"></td>
			</tr>
			<tr>
				<td colspan="5" style="text-align: center;">------------------------------------------------------------------</td>
			</tr>
			<?php $sum=0;?>
				@foreach($order_list as $order)
				<tr>
					<td colspan="4">-&nbsp;{{$order->quantity}}&nbsp;{{$order->item_name}}&nbsp;({{getcong('currency_symbol')}}{{ \App\Menu::getMenunfo($order->item_id)->price}})</td>
					<td>{{getcong('currency_symbol')}}{{$order->item_price}}</td>
				</tr>
				<?php $sum=$sum+$order->item_price; ?>
			@endforeach
			<tr>
				<td colspan="5" style="text-align: center;">------------------------------------------------------------------</td>
			</tr>
			
			<tr>
				<td colspan="4" style="font-size:15px; font-weight:bold;">Rechnung Total: </td>
				<td>{{getcong('currency_symbol')}}{{$sum}}</td>
			</tr>
			<tr>
				<td colspan="4">Cash</td>
				<td>{{getcong('currency_symbol')}}{{$sum}}</td>
			</tr>
			<tr>
				<td colspan="5" style="text-align: center;">------------------------------------------------------------------</td>
			</tr>
			<tr>
				<td colspan="5" style="text-align: center;">Thank You {{ $ufname }}</td>
			</tr>
			<tr>
				<td colspan="5" style="text-align: center;">=========================================</td>
			</tr>
		</table>
	</div>
</body>
</html>
 