@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-sm-4">
            <div class="text-center my-4">
                <h3 class="brown border p-2">ユーザ-検索</h3>
            </div>
            {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
                <div class="form-group">
                    {!! Form::label('text', 'ユーザ-名:') !!}
                    {!! Form::text('name' ,'', ['class' => 'form-control', 'placeholder' => '指定なし'] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('text', '言語:') !!}
                    {!! Form::text('language' ,'', ['class' => 'form-control', 'placeholder' => '指定なし'] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('text', '都道府県:') !!}
                    {!! Form::text('place' ,'', ['class' => 'form-control', 'placeholder' => '指定なし'] ) !!}
                </div>
                {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!}

            {!! Form::close() !!}
        </div>
        <div class="col-sm-8">
            <div class="text-center my-4">
                <h3 class="brown p-2">ユーザ一覧</h3>
            </div>

            <div class="container">
                @if(!empty($data))
                    <div class="my-2 p-0">
                        <div class="row  border-bottom text-center">
                            <div class="col-sm-4">
                                <p>ユーザ名</p>
                            </div>
                            <div class="col-sm-4">
                                <p>言語</p>
                            </div>
                            <div class="col-sm-4">
                                <p>都道府県</p>
                            </div>
                        </div>
                        @foreach($data as $item)
                                <div class="row py-2 border-bottom text-center">
                                    <div class="col-sm-4">
                                        <a href="/show/{{$item->id}}">{{ $item->name }}</a>
                                    </div>
                                    <div class="col-sm-4">
                                        {{ $item->language }}
                                    </div>
                                    <div class="col-sm-4">
                                        {{ $item->place }}
                                    </div>
                                </div>
                        @endforeach
                    </div>
                    {{ $data->appends(request()->input())->render('pagination::bootstrap-4') }}
                @endif
            </div>
           
        </div>
    </div>
    @endsection