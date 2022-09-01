
<x-layout>
    <x-nav/>
    <x-categoryFilter :categories="$categories"/>
    <x-banner/>
    <x-search/>
    <x-post-section :products="$products" :categories="$categories"/>
    <x-footer/>
</x-layout>