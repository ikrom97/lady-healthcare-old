@extends('dashboard.layouts.master')

@section('content')
  <main class="page__content">
    <div class="modal modal--fail {{ session()->has('fail') ? '' : 'modal--hidden' }}">{{ session()->get('fail') }}</div>
    <div class="modal modal--success {{ session()->has('success') ? '' : 'modal--hidden' }}">{{ session()->get('success') }}</div>

    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main') }}">Главная =></a>
      </li>
      <li class="page__breadcrumb">
        <a href="{{ route('admin.banners') }}">Баннеры =></a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">
        {{ $data->banner ? 'Редактирование' : 'Добавление' }}
      </li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data->banner)
        <h1 class="page__title">Редактирование</h1>
      @else
        <h1 class="page__title">Добавление</h1>
      @endif
      <a class="page__link" data-action="submit">Сохранить</a>
    </div>

    <img
      @if ($data->banner) src="{{ asset($data->banner->img) }}" @endif
      width="1280"
      height="628"
      style="object-fit: cover;">

    <form class="form-dash" action="{{ $data->banner ? route('banners.post', ['action' => 'update']) : route('banners.post', ['action' => 'store']) }}" method="post" enctype="multipart/form-data">
      @csrf

      @if ($data->banner)
        <input type="hidden" name="id" value="{{ $data->banner->id }}">
      @endif

      <label class="form-dash__element">
        <span class="form-dash__label">Баннер</span>
        <input class="visually-hidden" name="img" type="file">
        <input
          class="form-dash__field"
          type="text"
          placeholder="{{ $data->banner && $data->banner->img ? $data->banner->img : 'Выберите файл' }}"
          value="{{ $data->banner->img ?? '' }}"
          readonly>
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Заголовок</span>
        <input
          class="form-dash__field"
          name="title"
          placeholder="Нео Витес для имменитета"
          value="{{ $data->banner->title ?? '' }}">
        </input>
      </label>

      <label class="form-dash__element" style="grid-column: span 2; grid-row: span 2">
        <span class="form-dash__label">Текст</span>
        <textarea
          class="form-dash__field"
          name="text"
          placeholder="НЕО ВИТЕС (для иммунитета) стимулирует как специфические, так и неспецифические факторы иммунитета.">{{ $data->banner->text ?? '' }}</textarea>
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Ссылка (текст)</span>
        <input
          class="form-dash__field"
          name="link"
          type="text"
          value="{{ $data->banner->link ?? '' }}"
          placeholder="К препарату">
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Ссылка (адрес)</span>
        <input
          class="form-dash__field"
          name="url"
          type="url"
          value="{{ $data->banner->url ?? '' }}"
          placeholder="https://salomat.tj">
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/banners-show.js') }}" type="module"></script>
@endsection
