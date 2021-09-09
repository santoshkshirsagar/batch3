@component('mail::message')
# Recipe Published

Your order has been shipped!

@component('mail::button', ['url' => route('recipe.show',['recipe'=>$recipe->id])])
View Recipe
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent