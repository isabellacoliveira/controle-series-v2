<x-layout title="Nova Série">
    <!-- o OLD herda uma requisição anterior -->
    <x-series.form :action="route('series.store')" :nome="old('nome')" :update="false"/>
</x-layout>
