@extends('layouts.kejiban')

@section('main')

  <main>
    <h1>掲示板一覧</h1>
    <nav>
        <ul>
          <li><a href="sakusei">新規話題を作成</a></li>
        </ul>
    </nav>
      <input type="text" name="wadai" value="" class="kensaku"
            placeholder="3~5文字内で「話題名」から検索します。">
      <input type="submit" value="検索">

    <table border="1">
      <tr>
        <th class="hinichi">話題作成日</th>
        <th class="naiyou">話題名</th>
        <th class="kazu">書き込み人数</th>
      </tr>
      <tr>
            <td class="hinichitext">{{$msg}}</td>
            <td class="naiyoutext">{{$msg}}</td>
            <td class="kazutext">{{$msg}}</td>
      </tr>
    </table>
  </main>
@endsection