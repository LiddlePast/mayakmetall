<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
    }

    public function categories(): View
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    public function createCategory(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ], [
            'name.required' => 'Укажите наименование категории',
            'name.unique' => 'Такая категория уже существует',
            'name.max' => 'Максимум символов для наименования - :max',
            'description.required' => 'Укажите описание категории',
            'image.image' => 'Необходимый тип файла - изображение',
            'image.mimes' => 'Поддерживаемый формат файла - jpeg,png,jpg,gif,svg',
        ]);
        $name = $request->input('name');
        $description = $request->input('description');
        $image = $request->file('image');
        $imageNameWithExt = $image->getClientOriginalName();
        $image->storeAs('images/catalog', $imageNameWithExt);
        Category::create([
            'name' => $name,
            'description' => $description,
            'image' => $imageNameWithExt,
        ]);
        return to_route('admin.categories');
    }

    public function editCategory(Category $category): View
    {
        return view('admin.edit-category', compact('category'));
    }

    public function updateCategory(Request $request, Category $category): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ], [
            'name.required' => 'Укажите наименование категории',
            'name.unique' => 'Такая категория уже существует',
            'name.max' => 'Максимум символов для наименования - :max',
            'description.required' => 'Укажите описание категории',
            'image.image' => 'Необходимый тип файла - изображение',
            'image.mimes' => 'Поддерживаемый формат файла - jpeg,png,jpg,gif,svg',
        ]);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $image = $request->file('image') ?? null;
        if ($image) {
            $imageNameWithExt = $image->getClientOriginalName();
            $category->image = $imageNameWithExt;
            $image->storeAs('images/catalog', $imageNameWithExt);
        }
        $category->update();
        return to_route('admin.categories');
    }

    public function deleteCategory(Category $category): RedirectResponse
    {
        $categoryImage = $category->image;
        Storage::delete('images/catalog/' . $categoryImage);
        $category->delete();
        return to_route('admin.categories');
    }

    public function users(): View
    {
        $users = User::where('role', 'user')->get();
        return view('admin.users', compact('users'));
    }

    public function editUser(User $user): View
    {
        return view('admin.edit-user', compact('user'));
    }

    public function updateUser(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save();
        return to_route('admin.users');
    }

    public function deleteUser(User $user): RedirectResponse
    {
        $user->delete();
        return to_route('admin.users');
    }

    public function orders(): View
    {
        $orders = Order::latest()->get();
        return view('admin.orders', compact('orders'));
    }

    public function showOrder(Order $order): View
    {
        return view('admin.show-order', compact('order'));
    }

    public function updateOrder(Request $request, Order $order): RedirectResponse
    {
        $order->status = $request->input('status');
        $order->save();
        return to_route('admin.orders');
    }
}
