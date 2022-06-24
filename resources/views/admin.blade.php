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
          <a href="{{url('/admin/check')}}" class="nav-link ms-3">Список проверок</a>
        </li>

      </ul>
    </div>
  </nav>
@endsection
@section('content')
  <p class="fs-4 text-center pt-5 pb-3">Список добавленных url-ов</p>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">дата создания</th>
        <th scope="col">url</th>
        <th scope="col">частота проверки</th>
        <th scope="col">количество повторов</th>
      </tr>
    </thead>
    <?php
      $i = 1;
    ?>
    <tbody>

        <tr>
          <th scope="row">{{ $i++ }}</th>
          <td>{{$url['http_code']}}</td>
          <td>{{$http_code}}</td>
            <td>

            </td>
          <td></td>
        </tr>

    </tbody>
  </table>
@endsection
