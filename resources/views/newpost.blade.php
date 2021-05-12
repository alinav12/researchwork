@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Новий пост') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/storenewpost">
                            @csrf

                            <div class="form-group row" style="margin-left: 3%">
                                <label for="postBody" class="col-md-4 col-form-label text-md-right">{{ __('Тіло поста') }}</label>

                                <div class="col-md-6">
                                    <textarea id="postBody" name="postBody" autofocus></textarea>
                                    {{--<input id="postBody" type="text" name="postBody" autofocus>--}}
                                </div>
                            </div>

                            <div class="form-group row" style="margin-left: 3%">
                                <label for="photoDescription" class="col-md-4 col-form-label text-md-right">{{ __('Опис зображення') }}</label>

                                <div class="col-md-6">
                                    <textarea id="photoDescription" name="photoDescription" autofocus></textarea>
                                    {{--<input id="photoDescription" type="text" name="photoDescription">--}}
                                </div>
                            </div>

                            <br><br>

                            <div style="text-align: justify; text-align: center">

                                <div class="form-group row" style="display: inline-block; width: 33%">
                                    <label for="link" class="col-form-label text-md-right">{{ __('Посилання на фото') }}</label>

                                    <div class="col-md-6">
                                        <input id="link" type="text" name="link">
                                    </div>
                                </div>

                                <div class="form-group row" style="display: inline-block; width: 33%">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('АБО') }}</label>
                                </div>

                                <div class="form-group row" style="display: inline-block; width: 33%">
                                    <label for="file" class="col-form-label text-md-right">{{ __('Прикріпіть файл') }}</label>

                                    <div class="col-md-6">
                                        <input id="file" type="file" name="file">
                                    </div>
                                </div>
                            </div>


                            <br><br>

                            <div class="form-group row" style="margin-left: 3%">
                                <p class="col-md-4 col-form-label text-md-right">{{ __('Оберіть мережу (мережі), де робити публікацію') }}</p>

                                <div style="margin-left: 2%; margin-top: 2%">
                                    <input type="checkbox" id="telegram" name="telegram">
                                    <label for="telegram">Telegram</label>
                                </div>

                                <div style="margin-left: 6%; margin-top: 2%">
                                    <input type="checkbox" id="facebook" name="facebook">
                                    <label for="facebook">Facebook</label>
                                </div>
                            </div>

                            <br>

                            <div class="form-group row mb-0">
                                <div class="col-md-6" style="margin-left: 40%">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Опублікувати') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
