<form>
    <select class="input-select">
		<option value="0">All Categories</option>
        @foreach($categories as $category)
		<option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
		
	</select>
    <input class="input" placeholder="Search here">
	<button class="search-btn">Search</button>
</form>