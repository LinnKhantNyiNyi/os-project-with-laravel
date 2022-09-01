
<x-layout>
  <x-nav/>
    
 <x-table/>
<x-categoryFilter :categories="$categories"/>
<x-create_form :categories="$categories"/>
     
  <x-footer/>
</x-layout>