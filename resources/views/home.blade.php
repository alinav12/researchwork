@extends('layouts.app')

@section('content')



    <div style="display: flex;">
    <div style="background-color: rgba(0, 0, 0, 0.03);
                flex-grow: 0;
                flex-shrink: 0;
                flex-basis: 10%;
                order: 3;
                margin-right: 13%;
                margin-left: 2%;">
        <div style="height: 1.5%"></div>
        <a href="/newpost">Додати новий пост</a>
    </div>
        <div style="background-color: rgba(0, 0, 0, 0.03);
                    flex-grow: 0;
                    flex-shrink: 0;
                    flex-basis: 10%;
                    order: 1;
                    margin-left: 11.3%;
                    margin-right: 2%;">
            <a href="/newuser">Зареєструвати нового адміністратора</a>
            <br><br>
            <p style="font-size: 16px">Список адміністраторів:</p>
            <b><p style="margin-bottom: 0.5em;">{{$currentUser->name}} - Ви</p>
                <p style="margin-top: 0.5em;">{{$currentUser->email}}</p></b>
            @foreach ($users as $key => $value)
                @if (strcasecmp($value->email, $currentUser->email) == 0)
                    @continue
                @endif
                <p style="margin-bottom: 0.5em;">{{$value->name}}</p>
                <p style="margin-top: 0.5em;">{{$value->email}}</p>
                <br>
            @endforeach
        </div>

        <div  style="flex-grow: 1;order: 2;">
            <div class="row justify-content-center">
                <div class=""> <!-- col-md-8 -->
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">{{ __('Попередні пости') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                                <table class="table table-bordered">
                                    <tr>
                                        <th with="80px">No</th>
                                        <th>Автор поста</th>
                                        <th>Тіло поста</th>
                                        <th>Прикріплене зображення</th>
                                        <th>Час публікації</th>
                                    </tr>
                                    <?php $no=1; ?>
                                    @foreach ($posts as $key => $value)

                                        <tr>

                                            <td>  {{$no++}}</td>
                                            {{--<a href="#" style="position: absolute; width: 100%; left: 0px; height: 10em;"></a>--}}
                                            <td>{{$value->author}}</td>
                                            <td>{{$value->postBody}}</td>
                                            <td  width="30%">
                                                @if($value->file)
                                                    <img style="width: 100%" src="data:'image/png';base64,{{base64_encode( $value->file )}}">
                                                @else
                                                    <img style="width: 100%" src="{{$value->link}}">
                                                @endif
                                            </td>
                                            <td>{{$value->created_at}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



