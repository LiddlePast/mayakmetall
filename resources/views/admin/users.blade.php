@extends('layouts.app')

@section('page-title', 'Панель управления | Управление пользователями')

@section('main')
    <section class="main__section-dashboard section-dashboard section py-10">
        <div class="section-dashboard__heading max-w-[1400px] mx-auto">
            <div class="links mb-10">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-accent transition-all">< Назад</a>
            </div>
            <h2 class="text-3xl font-bold">Панель управления | Управление пользователями</h2>
        </div>
    </section>
    <section class="main__section-dashboard-categories dashboard-categories section pb-10">
        <div class="dashboard-categories__inner max-w-[1400px] mx-auto">
            @if(count($users) > 0)
                <table class="">
                    <thead>
                    <tr class="border">
                        <th>Имя</th>
                        <th>Email</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="border p-2">
                            <td class="p-2">{{ $user->name }}</td>
                            <td class="p-2">{{ $user->email }}</td>
                            <td class="p-2 flex">
                                <a href="{{ route('admin.editUser', ['user' => $user->id]) }}"
                                   class="inline-block pr-2 border-r-2">Редактировать</a>
                                <form method="post" class="inline-block pl-2"
                                      action="{{ route('admin.deleteUser', ['user' => $user->id]) }}">
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
                <p>Список пользователей услуг пуст.</p>
            @endif
        </div>
    </section>
@endsection
