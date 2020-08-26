@extends('layouts.app')

@section('content')
<h3 class ="ml-3">{{ Auth::user()->name }}</h3>
 
   
<div style="margin-top: 30px;">
   
<table class="table table-striped">  
<tr>
<th>氏名</th>
<td>{{ Auth::user()->name }}</td>
</tr>  
<th>年齢</th>
<td>{{ Auth::user()->age }}</td>
</tr>  
<tr>
<th>メールアドレス</th>
<td>{{ Auth::user()->email }}</td>
</tr>  
<tr>
<th>住所（都道府県）</th>
<td>{{ Auth::user()->place }}</td>
</tr>
<tr>
<th>言語</th>
<td>{{ Auth::user()->language }}</td>
</tr>
<th>プロフィール</th>
<td>{{ Auth::user()->profile }}</td>
</tr>
</table>
 
</div>
@endsection