@extends('layouts.admin')

@section("title")
    Главная страница
@endsection

@section('content')
    <div class="container mt-5">
        <h1>Добро пожаловать в панель администратора!</h1>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Игры</h5>
                        <p class="card-text">Управление играми</p>
                        <a href="{{route('admin.game.index')}}" class="btn btn-primary">Открыть</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Жанры</h5>
                        <p class="card-text">Управление жанрами</p>
                        <a href="{{route('admin.genre.index')}}" class="btn btn-primary">Открыть</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
