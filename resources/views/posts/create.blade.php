<x-layout>

    <x-setting heading="Publish New Post">


    <form method="POST" action="/admin/posts" enctype="multipart/form-data" class="mt-10">

        @csrf

        <x-form.input name="title"/>
        <x-form.input name="slug"/>
        <x-form.input name="thumbnal" type="file" />

        <x-form.textarea name="excerpt" />
        <x-form.textarea name="body" />

        <x-form.field>
            <x-form.label name="category" />

            <select name="category_id" id=category_id>
                @foreach(\App\Models\Category::all() as $category)
                <option value="{{ $category->id }}" {{ old('category_id')==$category->id ? 'selected' : '' }}>
                    {{ ucwords($category->name) }}
                </option>
                @endforeach
            </select>

            <x-form.error name="category" />

        </x-form.field>

        <x-form.button>Publish</x-form.button>

    </form>
</x-setting>
</x-layout>
