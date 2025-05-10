@extends('layouts.app')

@section('page-title', 'Панель управления | Редактировать категорию')

@section('main')
    <section class="main__section-dashboard section-dashboard section py-10">
        <div class="section-dashboard__heading max-w-[1400px] mx-auto">
            <h2 class="text-3xl font-bold">Панель управления | Редактировать категорию</h2>
        </div>
    </section>
    <section class="main__section-dashboard section-dashboard section pb-10">
        <div class="section-dashboard__heading max-w-[1400px] mx-auto">
            <h2 class="text-3xl font-bold">Редактировать категорию</h2>
        </div>
        <div class="section-dashboard__create-category create-category max-w-[1400px] mx-auto pt-10">
            <form action="{{ route('admin.updateCategory', ['category' => $category->id]) }}" method="post"
                  class="create-category__form space-y-5"
                  enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="create-category__name flex flex-col">
                    <label for="name" class="create-category__form-label">Наименование</label>
                    <input type="text"
                           class="create-category__form-input border rounded p-2 border-gray focus-visible:outline-accent transition-all focus-visible:transition-all outline-transparent"
                           name="name" id="name" required value="{{ $category->name ?? old('name') }}">
                    @error('name')
                    <p><small>{{ $message }}</small></p>
                    @enderror
                </div>
                <div class="create-category__description flex flex-col">
                    <label for="description" class="create-category__form-label">Описание</label>
                    <input type="text"
                           class="create-category__form-input border rounded p-2 border-gray focus-visible:outline-accent transition-all focus-visible:transition-all outline-transparent"
                           name="description" id="description" required
                           value="{{ $category->description ?? old('description') }}">
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
                    Изменить
                </button>
            </form>
            <div class="links mt-10">
                <a href="{{ route('admin.categories') }}" class="hover:text-accent transition-all">< Назад</a>
            </div>
        </div>
    </section>
@endsection
