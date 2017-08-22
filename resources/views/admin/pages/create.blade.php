@component('admin.layouts.elements.body')
@slot('title') Paginas @endslot
@slot('description') Inclusão de Paginas @endslot

	<form action="{{ route('pages.store') }}" class="form-horizontal" method="post">
		@include('admin.pages.form')
	</form>
<a href="{{ route('pages.index') }}" class="btn btn-xs bnt-default xs">Voltar</a>


@endcomponent