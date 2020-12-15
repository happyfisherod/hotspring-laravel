<html lang="ja"><head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<title>商品購入サンプル画面</title>

<STYLE TYPE="text/css">
TABLE.S1 {font-size: 9pt; border-width: 0px; background-color: #E6ECFA; font-size: 9pt;}
TD.S1   {  border-width: 0px; background-color: #E6ECFA;color: #505050; font-size: 9pt;}
TH.S1   {  border-width: 0px; background-color: #7B8EB4;color: #E6ECFA; font-size: 9pt;}
TABLE {  border-style: solid;  border-width: 1px;  border-color: #7B8EB4; font-size: 8pt;}
TD   {  text-align: center; border-style: solid;  border-width: 2px; border-color: #FFFFFF #CCCCCC #CCCCCC #FFFFFF; color: #505050; font-size: 8pt;}
TH   {  background-color: #7B8EB4;border-style: solid;  border-width: 2px; border-color: #DDDDDD #AAAAAA #AAAAAA #DDDDDD; color: #E6ECFA; font-size: 8pt;}
</STYLE>

</HEAD>
<BODY BGCOLOR="#E6ECFA" text="#505050" link="#555577" vlink="#555577" alink="#557755" onload="init()">
<BR>


  <div class="container">
<div class="row text-center">
<form action="<?php echo e(URL::to('send_order')); ?>" method="get">
<font color="#EE5555"> <?php echo e($err_msg); ?> </font>
<table class=S1 width="400" cellpadding="0" cellspacing="0">
<tr class=S1><td class=S1>

<table class=S1 width="100%" cellpadding="6" style="text-align:center;">
<tr class=S1><th class=S1 style="text-align:left;"><label>商品購入サンプル</label></th></tr>
</table>


<table class=S1 width="90%" style="text-align:center;">
 <tr class=S1>
  <td class=S1>
    <br>以下の項目を入力してください<br>
   <table cellspacing=4 cellpadding=4 style="text-align:left;">
    <tr>
     <td>ユーザーID</td>
     <td><input type="text" name="user_id" value="<?php echo e($user->id); ?>"></td>
    </tr>
    <tr>
     <td>氏名</td>
     <td><input type="text" name="user_name" value="<?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>"></td>
    </tr>
    <tr>
     <td>メールアドレス</td>
     <td><input type="text" name="user_mail_add" value="<?php echo e($user->email); ?>"></td>
    </tr>
    <tr>
        <td>決済区分</td>
        <td><label><input type="radio" name="st" value="normal" onclick="switching(true,false,false)" ${st_normal}>指定無し</label>
        　　<label><input type="radio" name="st" value="card" onclick="switching(true,true,false)" ${st_card}>カード決済</label>
        　　<label><input type="radio" name="st" value="conveni" onclick="switching(false,true,true)" ${st_conveni}>コンビニ決済</label>
        　　<label><input type="radio" name="st" value="atobarai" onclick="switching(true,false,true)" ${st_atobarai}>GMO後払い</label>
        </td>
    </tr>
    <tr>
        <td>コンビニコード</td>
        <td><select name="conveni_code">
                ${conveni_code_item}
            </select>
        </td>
    </tr>
    <tr>
        <td>ユーザ名(カナ)</td>
        <td><input type="text" name="user_name_kana" value="<?php echo e($user->last_name); ?>"></td>
    </tr>
    <tr>
        <td>ユーザ電話番号</td>
        <td><input type="text" name="user_tel" value="<?php echo e($user->mobile); ?>"></td>
    </tr>
    <tr>
        <td>送り先郵便番号</td>
        <td><input type="text" name="consignee_postal" value="<?php echo e($user->address); ?>"></td>
    </tr>
    <tr>
        <td>送り先住所</td>
        <td><select name="consignee_pref">${consignee_pref_item}</select>
        <input type="text" name="consignee_address" value=""></td>
    </tr>
    <tr>
        <td>送り先名</td>
        <td><input type="text" name="consignee_name" value=""></td>
    </tr>
    <tr>
        <td>送り先電話番号</td>
        <td><input type="text" name="consignee_tel" value=""></td>
    </tr>
    <tr>
        <td>注文主郵便番号</td>
        <td><input type="text" name="orderer_postal" value=""></td>
    </tr>
    <tr>
        <td>注文主住所</td>
        <td><select name="orderer_pref">${orderer_pref_item}</select>
        <input type="text" name="orderer_address" value=""></td>
    </tr>
    <tr>
        <td>注文主名</td>
        <td><input type="text" name="orderer_name" value=""></td>
    </tr>
    <tr>
        <td>注文主電話番号</td>
        <td><input type="text" name="orderer_tel" value=""></td>
    </tr>

    <tr>
        <td>課金区分</td>
        <td> 1回課金</td>
    </tr>
    <tr>
        <td>処理区分</td>
        <td>初回課金</td>
    </tr>
   </table>
  </td>
 </tr>
 <tr class=S1>
  <td class=S1>
    <br>
    <input type="hidden" name="come_from" value="here">
    <input type="submit" name="go" value="送信">
  </td>
 </tr>
</table>
  </td>
 </tr>
</table>
</form>
</div>
</div>

</BODY>
<script>
function switching(flaga,flagb,flagc) {
    debugger;
    document.getElementsByName('conveni_code')[0].disabled=flaga;
    document.getElementsByName('user_name_kana')[0].disabled=flaga;
    document.getElementsByName('user_tel')[0].disabled=flaga;
    document.getElementsByName('consignee_postal')[0].disabled=flagb;
    document.getElementsByName('consignee_name')[0].disabled=flagb;
    document.getElementsByName('consignee_pref')[0].disabled=flagb;
    document.getElementsByName('consignee_address')[0].disabled=flagb;
    document.getElementsByName('consignee_tel')[0].disabled=flagb;
    document.getElementsByName('orderer_postal')[0].disabled=flagb;
    document.getElementsByName('orderer_name')[0].disabled=flagb;
    document.getElementsByName('orderer_pref')[0].disabled=flagb;
    document.getElementsByName('orderer_address')[0].disabled=flagb;
    document.getElementsByName('orderer_tel')[0].disabled=flagb;
}
function init(){
    var funcItem = {}
    funcItem["normal"] = function(){ switching(true,false,false) }
    funcItem["card"] = function(){ switching(true,true,false) }
    funcItem["conveni"] = function(){ switching(false,true,true) }
    funcItem["atobarai"] = function(){ switching(true,false,true) }
    var items = document.getElementsByName('st');
    for( var i = 0; i < items.length; i++ ){
        if( items[i].checked ){
            funcItem[items[i].value]();
            return;
        }
    }
}
</script>
</HTML>

