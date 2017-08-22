@component('admin.layouts.elements.body')
@slot('title') Paginas @endslot
@slot('description') Exibição de Paginas @endslot

<h4> {{ $page->title}}</h4>

<p>
	<small>
		Criado em {{ $page->created_at }} | Atualizado em {{ $page->updated_at }}
	</small>
</p>

{!! $page->body !!}

<a href="{{ route('pages.index') }}" class="btn btn-xs bnt-default xs">Voltar</a>
<a href="{{ route('pages.edit', $page->id ) }}" class="btn btn-xs bnt-default xs ">Editar</a>


<form action="{{ route('pages.destroy', $page->id)}}" class="form-horizontal" method="post" style="display: inline-block">
		<input type="hidden" name="_method" value="DELETE">
		{!! csrf_field() !!}
		<input type="submit" value="remover" class="btn btn-xs bnt-default xs">

		
</form>
@endcomponent