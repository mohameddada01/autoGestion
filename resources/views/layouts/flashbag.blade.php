@if(session()->has('success'))
 <x-alert type="success" errors="">
   <strong>Succès !</strong> {{session('success')}}.


 </x-alert>
@endif

@if(session()->has('danger'))
 <x-alert type="danger" errors="">
   <strong>Error !</strong> {{session('danger')}}.


 </x-alert>
@endif

