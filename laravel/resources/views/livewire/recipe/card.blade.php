<div class="col mb-3">
    <img src="{{ asset('storage/'.$recipe->image) }}" alt="" class="w-100 rounded">
    <h5><a href="{{ route('recipe.show',['recipe'=>$recipe->id]) }}">{{ $recipe->name }}</a></h5>
    <small>{{ $recipe->category->name }}</small>
</div>