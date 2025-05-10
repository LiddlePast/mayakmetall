@extends('layouts.app')

@section('page-title', 'Панель управления | Управление услугами')

@section('main')
    <section class="main__section-dashboard section-dashboard section py-10">
        <div class="section-dashboard__heading max-w-[1400px] mx-auto">
            <h2 class="text-3xl font-bold">Панель управления | Управление категориями услуг</h2>
        </div>
    </section>
    <section class="main__section-dashboard-categories dashboard-categories section pb-10">
        <div class="dashboard-categories__inner max-w-[1400px] mx-auto">
            @if(count($categories) > 0)
                <table class="">
                    <thead>
                    <tr class="border">
                        <th>Наименование</th>
                        <th>Описание</th>
                        <th>Изображение</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr class="border p-2">
                            <td class="p-2">{{ $category->name }}</td>
                            <td class="p-2">{{ $category->description }}</td>
                            <td class="p-2">{{ $category->image }}</td>
                            <td class="p-2 flex">
                                <a href="" class="inline-block pr-2 border-r-2">Редактировать</a>
                                <form method="post" class="inline-block pl-2"
                                      action="{{ route('admin.deleteCategory', ['category' => $category->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg
                                            class="icon p-1 rounded transition-colors cursor-pointer hover:bg-red-700 hover:text-white"
                                            viewBox="0 0 24 24" height="24" width="24">
                                            <use href="{{ asset('/icons.svg#trash') }}" height="24" width="24"></use>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Список категорий услуг пуст.</p>
            @endif
        </div>
    </section>
    <section class="main__section-dashboard section-dashboard section pb-10">
        <div class="section-dashboard__heading max-w-[1400px] mx-auto">
            <h2 class="text-3xl font-bold">Добавить категорию</h2>
        </div>
        <div class="section-dashboard__create-category create-category max-w-[1400px] mx-auto pt-10">
            <form action="{{ route('admin.createCategory') }}" method="post" class="create-category__form space-y-5"
                  enctype="multipart/form-data">
                @csrf
                <div class="create-category__name flex flex-col">
                    <label for="name" class="create-category__form-label">Наименование</label>
                    <input type="text"
                           class="create-category__form-input border rounded p-2 border-gray focus-visible:outline-accent transition-all focus-visible:transition-all outline-transparent"
                           name="name" id="name" required value="{{ old('name') }}">
                    @error('name')
                    <p><small>{{ $message }}</small></p>
                    @enderror
                </div>
                <div class="create-category__description flex flex-col">
                    <label for="description" class="create-category__form-label">Описание</label>
                    <input type="text"
                           class="create-category__form-input border rounded p-2 border-gray focus-visible:outline-accent transition-all focus-visible:transition-all outline-transparent"
                           name="description" id="description" required value="{{ old('description') }}">
                    @error('description')
                    <p><small>{{ $message }}</small></p>
                    @enderror
                </div>
                <div class="create-category__image flex flex-col">
                    <label for="image" class="create-category__form-label">Изображение</label>
                    <input type="file"
                           class="create-category__form-input border rounded p-2 border-gray focus-visible:outline-accent transition-all focus-visible:transition-all outline-transparent cursor-pointer file:hidden"
                           name="image" id="image">
                    @error('image')
                    <p><small>{{ $message }}</small></p>
                    @enderror
                </div>
                <button type="submit"
                        class="border border-gray py-2 px-10 rounded cursor-pointer hover:bg-accent hover:text-white transition-all focus-visible:outline-0 focus-visible:bg-accent focus-visible:text-white">
                    Добавить
                </button>
            </form>
        </div>
    </section>
@endsection
