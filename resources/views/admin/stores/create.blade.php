<h1>Criar Loja</h1>
<form action="/admin/stores/store" method="post">
    <input type="hidden" value=" {{ csrf_token() }}" name="_token">
    <div>
        <label for="name">Nome Loja</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="description">Descrição</label>
        <input type="text" id="description" name="description">
    </div>
    <div>
        <label for="phone">Telefone</label>
        <input type="text" id="phone" name="phone">
    </div>
    <div>
        <label for="cellphone">Celular</label>
        <input type="text" id="cellphone" name="cellphone">
    </div>
    <div>
        <label for="slug">Slug</label>
        <input type="text" id="slug" name="slug">
    </div>
    <div>
        <label for="user">Usuário</label>
        <select name="user" id="user">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <button type="submit">Criar Loja</button>
    </div>
</form>
