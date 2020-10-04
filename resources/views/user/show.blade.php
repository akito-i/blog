@extends('layouts.app')

@section('content')
<h3 class ="ml-3">{{ $user->name }}</h3>
 
   
<div style="margin-top: 30px;">
   
<table class="table table-striped">  
<tr>
<th>氏名</th>
<td>{{ $user->name }}</td>
</tr>  
<th>年齢</th>
<td>{{ $user->age }}</td>
</tr>  
<tr>
<th>メールアドレス</th>
<td>{{ $user->email }}</td>
</tr>  
<tr>
<th>住所（都道府県）</th>
<td>{{ $user->place }}</td>
</tr>
<tr>
<th>言語</th>
<td>{{ $user->language }}</td>
</tr>
<th>プロフィール</th>
<td>{{ $user->profile }}</td>
</tr>
</table>

</div>
@if($user->id == $auth->id)
              <a href="{{ action('UserController@edit') }}"><button class="user-btn">ユーザー登録内容の編集</button></a>
        </div>
@else
<p><a href="/chat/{{$user->id}}">この人とチャットをする</a></p>
@endif


 
</div>
@endsection