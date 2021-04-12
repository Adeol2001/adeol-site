<footer class="text-gray-400">
    @if(! Route::is('n_about'))

    <p> &copy; Copyright {{ date('Y') }} &middot; <a href="{{ route('n_about') }}" class="text-indigo-500 	
    	hover:text-indigo-600 underline"> About us </a> 
    </p>
    
    @endif
    
</footer>