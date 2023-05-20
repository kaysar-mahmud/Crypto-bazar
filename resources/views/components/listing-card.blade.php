{{-- 
    
    
    since we need to access $listing 
    we need to use a prop
    
    
    
    
    we define props up the html code in blade
    below we are passing an array of props to our prop
    --}}

@props(['listing'])




<x-card>
        <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            <x-listing-tags :tagsCsv="$listing->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
       
        </div>
    </div> 
</x-card>