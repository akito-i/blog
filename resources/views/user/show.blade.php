@extends('layouts.app')

@section('content')
<h3 class ="ml-3">{{ Auth::user()->name }}</h3>
 
   
<div style="margin-top: 30px;">
   
<table class="table table-striped">  
<tr>
<th>氏名</th>
<td>{{ $auth->name }}</td>
</tr>  
<th>年齢</th>
<td>{{ $auth->age }}</td>
</tr>  
<tr>
<th>メールアドレス</th>
<td>{{ $auth->email }}</td>
</tr>  
<tr>
<th>住所（都道府県）</th>
<td>{{ $auth->place }}</td>
</tr>
<tr>
<th>言語</th>
<td>{{ $auth->language }}</td>
</tr>
<th>プロフィール</th>
<td>{{ $auth->profile }}</td>
</tr>
</table>

</div>
              <a href="{{ action('UserController@edit') }}"><button class="user-btn">ユーザー登録内容の編集</button></a>
        </div>
 
</div>
@endsection