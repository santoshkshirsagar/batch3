<div>
    <h4>Featured Recipes</h4>
    <form action="">
        <input type="text" class="form-control" wire:model="keyword">
        @foreach($recipes as $recipe)
            <div class="mb-2 border rounded p-2"><a wire:click="add('{{ $recipe->id }}')">{{ $recipe->name }}</a></div>
        @endforeach

        @foreach($featured as $row)
            <div class="mb-2 border border-primary rounded p-2">{{ $row->recipe->name }}</div>
        @endforeach
    </form> 
</div>
