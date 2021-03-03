<x-layout>
 	<x-slot name="Actors page">
		Actors page
    </x-slot>
     <div>
		First name: {{ $actor->first_name }}
	</div>
	<div>
		Last name: {{ $actor->last_name }}
	</div>
	<div>
		About: {{ $actor->description }}
	</div>
</x-layout>