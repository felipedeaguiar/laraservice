@include('admin.includes.alerts')
@csrf
<div class="form-group">
    <label>Nome</label>
    <input type="text" name="name" class="form-control" value="{{ isset($plan->name) ? $plan->name : old('name') }}" placeholder="Nome:">
</div>
<div class="form-group">
    <label>Preço</label>
    <input type="text" name="price" class="form-control" value="{{ isset($plan->price) ? $plan->price : old('price') }}" placeholder="Preço:">
</div>
<div class="form-group">
    <label>Descrição</label>
    <input type="text" name="description" class="form-control" value="{{ isset($plan->description) ? $plan->description : old('description') }}" placeholder="Descrição:">
</div>
