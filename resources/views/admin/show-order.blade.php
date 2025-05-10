@extends('layouts.app')

@section('page-title', 'Панель управления | Просомтр заказа')

@section('main')
    <section class="main__section-dashboard section-dashboard section py-10">
        <div class="section-dashboard__heading max-w-[1400px] mx-auto">
            <h2 class="text-3xl font-bold">Панель управления | Просмотр заказа</h2>
        </div>
    </section>
    <section class="main__section-dashboard section-dashboard section pb-10">
        <div class="section-dashboard__show-order show-order max-w-[1400px] mx-auto">
            <div class="links mt-10">
                <a href="{{ route('admin.orders') }}" class="hover:text-accent transition-all">< Назад</a>
            </div>
            <div class="show-order__details mt-10 space-y-2">
                <p><span class="font-bold">Заказчик:</span>&nbsp;<span>{{ $order->user->name }}</span></p>
                <p><span class="font-bold">Дата оформления:</span>&nbsp;<span>{{ $order->order_date }}</span></p>
                <p><span class="font-bold">Статус:</span>&nbsp;<span>{{ $order->status }}</span></p>
                <p class="mb-5"><span class="font-bold">Заказ:</span>&nbsp;
                    @foreach($order->order_items as $item)
                        <span class="p-2 rounded bg-blue-200">{{ $item->category->name }}</span>
                    @endforeach
                </p>
                <hr>
                <form action="{{ route('admin.updateOrder', ['order' => $order->id]) }}" class="show-order__form form mt-5" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="show-order__edit-status">
                        <label for="status" class="form-label">Выберите статус:</label>
                        <select name="status" id="status" class="border rounded p-2">
                            <option value="Оформлен">Офромлен</option>
                            <option value="В обработке">В обработке</option>
                            <option value="Завершен">Завершен</option>
                            <option value="Отменен">Отменен</option>
                        </select>
                    </div>
                    <button type="submit" class="p-2 border rounded mt-5 cursor-pointer hover:bg-accent hover:text-white transition-colors">Изменить статус</button>
                </form>
            </div>
        </div>
    </section>
@endsection
