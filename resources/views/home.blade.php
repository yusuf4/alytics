@extends('app')

@section('title', 'Home')
@section('content')
  <p class="text-center mt-5 fs-3 fw-normal">Форма создания ссылки на проверку</p>
  <form class="m-5" action="{{url('createform')}}" method="POST">
    @csrf
    <div class="form-outline mb-4">
      @if(session()->has('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div>
      @endif
      <label class="form-label" for="urlname">URL для проверки</label>
      <input type="text" name="urlname" class="form-control" placeholder="URL"/>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <label class="form-label" for="proverkai">Частота проверки (минут)</label>
          <select class="form-select" id="proverkai" name="proverka[]" multiple>
            <option selected>Выберите частота проверки</option>
            <option value="1">Один</option>
            <option value="5">Пять</option>
            <option value="10">Десять</option>
          </select>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <label class="form-label" for="povtori">Количество повторов</label>
          <select class="form-select" id="povtori" name="povtor">
            <option selected>Выберите количество повторов</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
      </div>
    </div>

    <button type="submit" class=" btn btn-primary btn-block mb-2">Отправить</button>
    </div>
  </form>
@endsection
