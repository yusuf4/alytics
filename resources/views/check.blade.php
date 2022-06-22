@extends('app')

@section('title', 'Admin')
@section('navdiv')
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
      <a href="#" class="navbar-brand">Alytics</a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="{{url('/admin')}}" class="nav-link me-4" >Список URL-ов</a>
        </li>
        <li class="nav-item">
          <a href="{{url ('/admin/check')}}" class="nav-link ms-3">Список проверок</a>
        </li>

      </ul>
    </div>
  </nav>
@endsection
@section('content')
  <p class="fs-4 text-center pt-5 pb-3">Список проверок</p>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">дата проверки</th>
        <th scope="col">url</th>
        <th scope="col">????</th>
        <th scope="col">номер попытки</th>
      </tr>
    </thead>
    <?php
      $i = 1;
    ?>
    <tbody>
      @foreach($proverok as $item)
        <tr>
          <th scope="row">{{ $i++ }}</th>
          <td>{{date('d.m.Y',strtotime($item->created_at))}}</td>
          <td>{{$item->formProverka['urlname']}}</td>
          <td></td>
          <td>{{$item->check_interval}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
