@csrf

<label class="uppercase text-gray-700 text-xs text-white">Titulo</label>
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>


<input 
    type="text" 
    name="title" 
    id="title" 
    class="bg-white dark:bg-gray-800 text-black dark:text-white rounded border-gray-200 dark:border-gray-700 w-full mb-4" 
    value="{{ old('title', $post->title) }}"
>

<label class="uppercase text-gray-700 text-xs text-white">Slug</label>
<span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>


<input 
    type="text" 
    name="slug" 
    id="slug" 
    class="bg-white dark:bg-gray-800 text-black dark:text-white rounded border-gray-200 dark:border-gray-700 w-full mb-4" 
    value="{{ old('slug', $post->slug) }}"
>


<label class="uppercase text-gray-700 text-xs text-white">
    Contenido
</label>
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>

<textarea name="body" rows="5" class="bg-white dark:bg-gray-800 text-black dark:text-white rounded border-gray-200 dark:border-gray-700 w-full mb-4">{{ old('body', $post->body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600 text-white">
        Volver
    </a>

    <input type="submit" value="Actualizar" class="bg-white dark:bg-gray-800 text-black dark:text-white rounded-full px-4 py-2 border border-gray-200 dark:border-gray-700">
</div>