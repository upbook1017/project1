@extends('layouts.kejiban')

<style>
    ul#sakusei1 {margin: 15px auto 0px;}
    table#sakusei1 {padding: 0px 0px; margin: 0px 0px 0px 212px; border:#FFFFFF;}
    table#sakusei1 tr .error1 {background-color: #FFFFFF; color: #FF0000;}
    table#sakusei1 tr .myname1 {text-align: left;}
    table#sakusei1 tr td {background-color: #FFFFFF;}
    table#sakusei2 {padding: 0px 0px; margin: 0px 0px 0px 212px; border:#FFFFFF;}
    table#sakusei2 tr .error2 {background-color: #FFFFFF; color: #FF0000;}
    table#sakusei2 tr .wadaimei1 {text-align: left;}
    table#sakusei2 tr td {background-color: #FFFFFF;}
    table#sakusei2 td .wadaimei2 {width: 250px;}
    .error3 {margin-top: 5px; margin-bottom: 5px; margin-left: 215px; color: #FF0000;}
    textarea {display: block; width: 860px ; height: 200px; margin-left: auto;
    margin-right: auto; margin-top: 0px; margin-bottom: 0px; font-size: 16px;}
    .toukou {margin-left: 1028px; margin-top: 5px; margin-bottom: 112px;}
</style>

@section('main')
  <main>
    <h1>新規話題作成</h1>
    <nav>
        <ul id="sakusei1">
          <li><a href="home">一覧に戻る</a></li>
        </ul>
    </nav>
<table id="sakusei1">
@csrf
  <tr><td colspan="2" class="error1">ニックネームを入力してください。</td></tr><!--エラーメッセージ用-->
  <tr>
    <th class="myname1">ニックネーム：</th>
      <td>
      <input type="text" name="name" value="" class="myname2"
            placeholder="10文字以内">
      </td>
  </tr>
</table>
<table id="sakusei2">
  <tr><td colspan="2" class="error2">話題名を入力してください。</td></tr><!--エラーメッセージ用-->
  <tr>
    <th class="wadaimei1">話題名：</th>
      <td>
      <input type="text" name="wadai" value="" class="wadaimei2"
            placeholder="15文字以内">
      </td>
  </tr>
</table>
  <p class="error3">投稿内容を入力してください。</p><!--エラーメッセージ用-->
    <textarea class="comment" name="comment" rows="20"
              placeholder="投稿内容(100文字以内)" required></textarea>
      <input type="submit" value="投稿" class="toukou">
  </main>
@endsection
