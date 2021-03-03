<x-layout>
 	<x-slot name="Movie page">
		Movie page
    </x-slot>
     <div>
		Title: {{ $movie->title() }}
	</div>
	<div>
		Description: {{ $movie->description }}
	</div>
</x-layout>